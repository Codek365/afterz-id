<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$7/.U8geMzZkADhr/QFZ1WeRF7VdTg9szu89nsc8L5Dh2zzplri7S2',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-02-25 07:59:22',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
