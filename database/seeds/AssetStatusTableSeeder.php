<?php

use App\AssetStatus;
use Illuminate\Database\Seeder;

class AssetStatusTableSeeder extends Seeder
{
    public function run()
    {
        $assetStatuses = [
            [
                'id'         => '1',
                'name'       => 'Available',
                'created_at' => '2020-02-24 12:22:55',
                'updated_at' => '2020-02-24 12:22:55',
            ],
            [
                'id'         => '2',
                'name'       => 'Not Available',
                'created_at' => '2020-02-24 12:22:55',
                'updated_at' => '2020-02-24 12:22:55',
            ],
            [
                'id'         => '3',
                'name'       => 'Broken',
                'created_at' => '2020-02-24 12:22:55',
                'updated_at' => '2020-02-24 12:22:55',
            ],
            [
                'id'         => '4',
                'name'       => 'Out for Repair',
                'created_at' => '2020-02-24 12:22:55',
                'updated_at' => '2020-02-24 12:22:55',
            ],
        ];

        AssetStatus::insert($assetStatuses);
    }
}
