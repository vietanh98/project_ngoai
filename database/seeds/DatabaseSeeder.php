<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'Nguyễn Việt Anh',
            'email' => 'vietanh911998@gmail.com',
            'password' =>  bcrypt('Anh911998'),
            'phone' => '0988459063',
            'account_facebook' => 'Hà Nội',
            'role_id' => '1',
            'is_active' => '1',
        ]);
    }
}
