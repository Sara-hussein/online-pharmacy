<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
            'FirstName' => 'Admin',
            'MiddleName' => 'Admin',
            'LastName' => 'Admin',
            'Mobile' => '01223654563',
            'Phone' => '2205361495',
            'email' => 'admin@yahoo.com',
            'password' => Hash::make('123456admin'),
            'admin' => '1'


        ],[
            'FirstName' => 'User',
            'MiddleName' => 'User',
            'LastName' => 'User',
            'Mobile' => '01223654563',
            'Phone' => '2205361495',
            'email' => 'User@yahoo.com',
            'password' =>Hash::make('123456user'),
            'admin' => '0'


        ]
    ]);
    }
}
