<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@stomalina.com',
            'email_verified_at' => now(),
            'password' => Hash::make('stomalina1234'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@stomalina.ru',
            'email_verified_at' => now(),
            'password' => Hash::make('stomalina1234'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'test',
            'email_verified_at' => now(),
            'password' => Hash::make('test'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}