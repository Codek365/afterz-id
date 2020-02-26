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
                'password'           => '$2y$10$frX4mtwI.U82hGi/VburEOddEIRnj0n14Ub6wwqJo.PvoDLvQtAa.',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-02-26 08:20:31',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
