<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dhabit',
            'email' => 'dhabit@gmail.com',
            'password' => Hash::make('dhabit'),
        ]);
    }
}
