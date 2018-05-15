<?php

use Illuminate\Database\Seeder;
use App\Administrator;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'admin_name' => 'admin',
            'password'  => bcrypt('123456'),
            'admin_status' => Administrator::ADMIN_STATUS_ONE,
        ];

        Administrator::create($data);
    }
}
