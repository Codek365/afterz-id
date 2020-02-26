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
                'password'           => '$2y$10$JQ8ChFLY2eq5di7.7s.X2eiPdElsRKhe8MiqUez0cyQd4OmkK6a2i',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-02-26 16:59:44',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
