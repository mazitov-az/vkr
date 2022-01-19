<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wire;
use App\Models\Connector;
use App\Models\Shieldinge;
use App\Models\Tube;

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
            ConnectorSeeder::class, 
            WireSeeder::class, 
            ShieldingeSeeder::class, 
            TubeSeeder::class,
        ]);        
    }
}
