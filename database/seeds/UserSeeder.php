<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users

        $mick = DB::table('users')->insert([
            'name' => 'Mick B',
            'username' => 'phpMick',
            'email' => 'phpMick@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $lisa = DB::table('users')->insert([
            'name' => 'Lisa B',
            'username' => 'lisab',
            'email' => 'lisab@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $mag = DB::table('users')->insert([
            'name' => 'Maggie B',
            'username' => 'magb',
            'email' => 'magb@gmail.com',
            'password' => Hash::make('password'),
        ]);


        //followers
        DB::table('followers')->insert([
            'user_id' => 2,
            'following_id' =>1
        ]);

        DB::table('followers')->insert([
            'user_id' => 3,
            'following_id' =>1
        ]);

        //tweets
        DB::table('tweets')->insert([
            'user_id' => 1,
            'body' =>'This is a tweet body'
        ]);


        DB::table('tweets')->insert([
            'user_id' => 2,
            'body' =>'This is a tweet body'
        ]);







    }
}
