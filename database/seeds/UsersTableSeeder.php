<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Git McClain',
            'email' => 'git@mcclainconcepts.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);

        DB::table('users')->insert([
            'name' => 'Your Emailaddress',
            'email' => 'your@emailaddress.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jim Baldwin',
            'email' => 'jim@jimbaldwin.net',
            'password' => bcrypt('LaravelTestPW'),
        ]);
    }
}
