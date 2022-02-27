<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            ['name' => 'Aaron', 'email' => 'aaron@gmail.com', 'role' => 'student',
            'password' => '$2y$10$.2SA7/XvbkZFmL1/w2lB6uWGedkWKqY6OZ4Q932CbCn0CepxOERaC',
            ],
            ['name' => 'Martin', 'email' => 'martin@gmail.com', 'role' => 'student',
            'password' => '$2y$10$.2SA7/XvbkZFmL1/w2lB6uWGedkWKqY6OZ4Q932CbCn0CepxOERaC',
            ],
        ]; /** can do this bcrypt('hello') */
        
        foreach($users as $user){
            User::create($user);
        }
    }
}

/**https://stackoverflow.com/questions/28594076/seed-multiple-rows-at-once-laravel-5 */