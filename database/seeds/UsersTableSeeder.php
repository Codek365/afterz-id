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
                'password'           => '$2y$10$gXe9COZkwVpciPuWZOQ3ueYZw9gHAt7eiGUlKbiHNQjnzWtMRphgq',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-02-24 08:42:22',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
