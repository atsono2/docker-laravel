<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('users')) {
            DB::table('users')->insert([
                'name' => '綾野剛',
                'email' => 'go@gmail.com',
                'password' => Hash::make('password'),
                'admin_chk' => true,
            ]);
            DB::table('users')->insert([
                'name' => '山田孝之',
                'email' => 'yamada@gmail.com',
                'password' => Hash::make('yamada'),
            ]);
            DB::table('users')->insert([
                'name' => '鈴木',
                'email' => 'suzu@gmail.com',
                'password' => Hash::make('suzu'),
            ]);
        }
    }
}
