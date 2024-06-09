<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Diego';
        $user->email = 'diego@gmail.com';
        $user->password = bcrypt('12345');

        $user->save();

        $user = new User();

        $user->name = 'Juan';
        $user->email = 'juan@gmail.com';
        $user->password = bcrypt('12345');

        $user->save();

        $user = new User();

        $user->name = 'Perez';
        $user->email = 'p@gmail.com';
        $user->password = bcrypt('12345');

        $user->save();
    }
}
