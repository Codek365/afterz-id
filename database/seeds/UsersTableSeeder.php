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
                'password'           => '$2y$10$r9BLENQ2iM47ZJgRnS6YOuyfLgXXu2MN.iVVTzSjRmxvnv.ZeU1qq',
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2020-03-01 07:45:22',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
