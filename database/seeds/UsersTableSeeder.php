<?php

use Illuminate\Database\Seeder;
use App\user;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin')
        ]);

        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' => Hash::make('authorauthor')
        ]);

        $user = User::create([
            'name' => 'User User',
            'email' => 'user@user.com',
            'password' => Hash::make('useruser')
        ]);
    }
}
