<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\User;
use App\Models\Location;
use Illuminate\Support\Str;
use Mail;
use App\Mail\CoachWelcomeNotification;

class CoachImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            if (isset($row['email']) && isset($row['first_name']) && isset($row['last_name'])) {
                $check = User::where('email', $row['email'])->first();
                if (!$check) {
                    $userArr = [
                        'name' => $row['name'] ?? '',
                        'email' => $row['email'] ?? '',
                        'password' => Str::random(10),
                        'first_name' => $row['first_name'] ?? '',
                        'last_name' => $row['last_name'] ?? '',
                        'mobile_number' => $row['mobile_number'] ?? null,
                        'zoom_key' => $row['zoom_key'] ?? null,
                        'zoom_secret' => $row['zoom_secret'] ?? null,
                    ];

                    $user = User::create($userArr);
                    $user->assignRole('Coach');
                    Mail::to($row['email'])->queue(new CoachWelcomeNotification($userArr));
                } else {
                    $check->update([
                        'name' => $row['name'] ?? '',
                        'email' => $row['email'] ?? '',
                        'first_name' => $row['first_name'] ?? '',
                        'last_name' => $row['last_name'] ?? '',
                        'mobile_number' => $row['mobile_number'] ?? null,
                        'zoom_key' => $row['zoom_key'] ?? null,
                        'zoom_secret' => $row['zoom_secret'] ?? null,
                    ]);
                }
            } else {
                continue;
            }
        }
    }
}
