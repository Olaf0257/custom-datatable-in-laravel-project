<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin123'),
                'usertype' => 'admin'
            ],
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => bcrypt('secret123'),
                'usertype' => ''
            ]
        ]);
    }
}
