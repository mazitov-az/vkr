<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tube;

class TubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tubes')->insert([['title' =>'ТВ-50',  'weight' => 10.6,  'diameter' => '4,0'],
        								 ['title' =>'ТВ-40',  'weight' => 18.38, 'diameter' => '7,0'],
        								 ['title' =>'ТВ-60',  'weight' => 33.51, 'diameter' => '12,0'],
        								 ['title' =>'ТВ-60',  'weight' => 38.79, 'diameter' => '14,0']]);
    }
}
