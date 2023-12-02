<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'yarniap124@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'Althair.assassint@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'ayuastuti0308@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
