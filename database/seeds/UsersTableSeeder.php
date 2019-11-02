<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create( [
            'name' => 'Administrator',
            'password' => bcrypt('admin'),
            'email' => 'admin@seecs.net',
            'admin' => 1
        ]);

        App\User::create( [
            'name' => 'Siraj',
            'password' => bcrypt('qazi'),
            'email' => 'siraj@seecs.net'
        ]);
    }
}
