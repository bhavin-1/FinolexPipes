<?php
namespace Database\Seeders;


use App\Services\UserService;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
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
                'name' => 'merchant',
                'email' => 'fileo@merchant.com',
                'password' => bcrypt('12345678'),
                'mobile' => '1234567891',
                'status' => '1',
            ],
        ];

        foreach ($params as $key => $value) {
            $user_service = new UserService;
            $user_service->createUser($value, 'merchant');
        }
    }
}
