<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        return Inertia::render('Admin/User/Index');
    }

    public function create()
    {
        return Inertia::render('Admin/User/Create');
    }

    public function show($id)
    {
        $user = User::with(['location','coach_category','location_user'])->find($id);
        return Inertia::render('Admin/User/Show', [
            'userData' => $user
        ]);
    }

    public function edit($id)
    {
        
        $user = User::with(['location','coach_category','location_user'])->find($id);
        return Inertia::render('Admin/User/Edit', [
            'userData' => $user
        ]);
    }

    public function availability($id) {
        $user = User::with(['availabilities'])->find($id);
        return Inertia::render('Admin/User/Availability', [
            'userData' => $user
        ]);
    }
}
