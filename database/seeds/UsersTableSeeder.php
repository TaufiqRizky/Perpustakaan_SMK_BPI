<?php

use App\User;
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
        $users = new User();
        $users->name = 'Admin';
        $users->email = 'admin@example.com';
        $users->password = bcrypt(User::DEFAULT_PASSWORD);
        $users->save();
    }
}
