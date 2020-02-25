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
        DB::table('users')->truncate();
        DB::table('users')->insert(array (
            0 =>
            array( 'name' => 'Demo User', 'email' => 'demo@demo.com', 'password' => bcrypt('demodemo')),

            1 =>
            array( 'name' => 'shehan', 'email' => 's.nai@gmail.com', 'password' => bcrypt('espn')),

            2 =>
            array( 'name' => 'Lahiru', 'email' => 's.lahiru1995@gmail.com', 'password' => bcrypt('Snimalka@921')),

        ));
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
    }
}
