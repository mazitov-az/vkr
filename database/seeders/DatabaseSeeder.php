<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wire;
use App\Models\Connector;
use App\Models\Shieldinge;
use App\Models\Tube;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            ConnectorSeeder::class, 
            WireSeeder::class, 
            ShieldingeSeeder::class, 
            TubeSeeder::class,
        ]);        
    }
}
