<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Connector;
use App\Models\User;

class ConnectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('connectors')->insert([['title' =>'DB-9M',  'weight' => 14, 'max_section' => 0.2],
        								 ['title' =>'DB-15F', 'weight' => 21, 'max_section' => 0.2],
        								 ['title' =>'2РМ18',  'weight' => 24, 'max_section' => 1.0],
        								 ['title' =>'СШР32',  'weight' => 61, 'max_section' => 3.0]]);
    }
}
