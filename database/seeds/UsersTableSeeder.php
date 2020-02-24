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
                'password'           => '$2y$10$cd8/PXH6jutoSB6EIvWeZ.yxcH89XQqHjcFnZCKTrA2SZq6Oti4IK',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-02-24 17:18:18',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
