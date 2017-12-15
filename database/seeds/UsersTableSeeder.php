<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        App\User::create([
            'name'      => 'Administrator',
            'username'  => 'administrator',
            'email'     => 'administrator@admin.com',
            'password'  => Hash::make('administrator'),
            'access'    => 2,
            'api_token' => $faker->sha256
        ]);
    }
}
