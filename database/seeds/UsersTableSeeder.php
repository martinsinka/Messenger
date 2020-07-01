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
        User::create([
        	'name' => 'Martin',
        	'email' => 'martin@gmail.com',
        	'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Efrain',
            'email' => 'efrain@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Marcos',
            'email' => 'marcos@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
