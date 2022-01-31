<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([['name' => 'admin',
                                    'email' => 'admin@cable.ru',
                                    'password' => Hash::make('admin')],
                                    ['name' => 'guest',
                                    'email' => 'guest@cable.ru',
                                    'password' => Hash::make('guest')]
                                    ]);
    }
}
