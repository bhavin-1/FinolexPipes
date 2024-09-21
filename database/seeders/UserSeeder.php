<?php

namespace Database\Seeders;

use App\Services\UserService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [            
            [
                'name' => 'admin',
                'email' => 'fileo@admin.com',
                'password' => bcrypt('12345678'),
                'mobile' => '1234567890',
                'status' => '1',
            ]
        ];

        foreach ($params as $key => $value) {
            $user_service = new UserService;
            $user_service->createUser($value, 'admin');
        }
    }
}
