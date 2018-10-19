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
        'name' => 'client',
        'email' => 'client@wishlist.com',
        'password' => Hash::make('client123')
      ]);
    }
}
