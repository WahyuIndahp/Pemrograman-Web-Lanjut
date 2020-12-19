<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin talk',
            'level' => 'admin',
            'email' => 'admintalk@admin.com',
            'password' => bcrypt('talkactive'),
            'remember_token' => Str::random(60),
        ]);
    }
}
