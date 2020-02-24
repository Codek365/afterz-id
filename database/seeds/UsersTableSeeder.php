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
                'password'           => '$2y$10$n1jiUcuilRoxVnu/qkM/xu1C4hSVG4UXFrpYueHD6yZzPrZnM0ojm',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-02-24 15:37:45',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
