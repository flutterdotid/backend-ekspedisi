<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ilham Maulana',
            'identity_id' => '12345678345',
            'gender' => 1,
            'address' => 'Bogor',
            'photo' => 'ilham.png', //note: tidak ada gambar
            'email' => 'k4ilham@gmail.com',
            'password' => app('hash')->make('Ilham343'),
            'phone_number' => '081316790080',
            'api_token' => Str::random(40),
            'role' => 0,
            'status' => 1
        ]);
    }
}
