<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Wire;

class WireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wires')->insert([['title' =>'МСЭО 21-31', 'weight' => 6.32,   'section' => 0.12],
        								 ['title' =>'ПВС 2х0,75', 'weight' => 51.067, 'section' => 0.75],
        								 ['title' =>'МС 21-11',   'weight' => 3.02,   'section' => 0.2],
        								 ['title' =>'ВВГ 3х1,5',  'weight' => 102,    'section' => 1.5]]);
    }
}
