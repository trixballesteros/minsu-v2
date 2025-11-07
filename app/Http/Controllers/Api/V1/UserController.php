<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Mail\CoachWelcomeNotification;
use Illuminate\Support\Facades\Mail;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\User as UserResource;

use Illuminate\Validation\ValidationException;
// IMPORT
use App\Imports\CoachImport;
use Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('view user')) {
            return abort(401);
        }

        $perPage = $request->has('perPage') ? $request->input('perPage') : 10;
        $users = User::with(['location','coach_category'])
                         ->orWhereHas('roles', function ($query)  {
                             $query->where('name', '=', 'Coach');
                         })
                        ->where(function($query) use ($request){
                            if($request->has('query'))
                            {
                                $query_string = $request->input('query');
                                $query->where('name', 'like', '%' . $query_string. '%')
                                    ->orWhere('email', 'like', '%' . $query_string. '%');
                            }
                        })
                        ->paginate($perPage);
        return new UserResource($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {

        if (!auth()->user()->can('insert user')) {
            return abort(401);
        }
        $userArr = $request->validated();
        $userArr['password'] = bcrypt($request->input('password'));
        $userArr['name'] = $request->input('first_name') . ' ' . $request->input('last_name');
        $user = User::create($userArr);
        $user->assignRole($request->input('role')); //asign role

        if($request->has('location_id'))
        {
            foreach ($request->input('location_id') as $location) {
                $user->location_user()->attach($location);
            }
        }
        if($request->has('segment_id'))
        {
            foreach ($request->input('segment_id') as $segment) {
                $user->segment()->attach($segment);
            }
        }
        if($request->has('need_state_id'))
        {
            foreach ($request->input('need_state_id') as $need_state) {
                $user->need_state()->attach($need_state);
            }
        }

        if($request->has('profile_photo'))
        {
            $user->updateProfilePhoto($request->file("profile_photo"));
        }

        Mail::to($request->input('email'))->queue(new CoachWelcomeNotification($request->validated()));
        return (new UserResource($user))
                ->response()
                ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('view user')) {
            return abort(401);
        }
        $user = User::with(['location','coach_category'])->findOrFail($id);
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        if (!auth()->user()->can('update user')) {
            return abort(401);
        }
        $userArr = $request->validated();
        $userArr['password'] = bcrypt($request->input('password'));
        $userArr['name'] = $request->input('first_name') . ' ' . $request->input('last_name');
        $user = User::findOrFail($id);
        $user->assignRole($request->input('role')); //asign role
        $user->update($userArr);

        if($request->has('location_id'))
        {
            $user->location_user()->detach();
            foreach ($request->input('location_id') as $location) {
                $user->location_user()->attach($location);
            }
        }
        if($request->has('segment_id'))
        {
            $user->segment()->detach();
            foreach ($request->input('segment_id') as $segment) {
                $user->segment()->attach($segment);
            }
        }
        if($request->has('need_state_id'))
        {
            $user->need_state()->detach();
            foreach ($request->input('need_state_id') as $need_state) {
                $user->need_state()->attach($need_state);
            }
        }
        if($request->has('profile_photo'))
        {
            $user->updateProfilePhoto($request->file("profile_photo"));
        }

        return (new UserResource($user))
            ->response()
            ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('delete user')) {
            return abort(401);
        }
        $user = User::findOrFail($id);
        $user->delete();

        return response(null, 204);
    }


    public function import(Request $request)
    {
        $request->validate([
            'import' => 'required'
        ]);

        $allowed_types = [
            'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'text/csv',
            'text/plain',
            'text/x-csv'
        ];
        $file = $request->file('import');
        $fileType = $file->getClientMimeType();
        if (!in_array($fileType, $allowed_types, true)) {
            throw ValidationException::withMessages(['product_files' => 'File is not a valid csv/excel file']);
        }
        Excel::import(new CoachImport, $file);
        return 'Success';
    }

    public function updateAvailability(Request $request, User $user)
    {
        $user->employment_type = $request->employment_type;
        $user->update();

        foreach ($request->availabilities ?? [] as $data) {
            $user->availabilities()->updateOrCreate(['day' => $data['day'], 'user_id' => $user->id],[
                'start_time' => $data['start_time'] == "null" ?null:$data['start_time'],
                'end_time' => $data['end_time'] == "null" ?null:$data['end_time'],
                'available' => $data['available'],
                'day' => $data['day']
            ]);
        }
        
        $user->load(['availabilities']);
        return new UserResource($user);
    }
}
