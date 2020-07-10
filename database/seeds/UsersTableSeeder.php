<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'aaaa',
                'email' => 'aaaa' . '@gmail.com',
                'password' => Hash::make('password123')
            ], [
                'name' => 'bbbb',
                'email' => 'bbbb' . '@gmail.com',
                'password' => Hash::make('password123')
            ]
        ]);
    }
}
