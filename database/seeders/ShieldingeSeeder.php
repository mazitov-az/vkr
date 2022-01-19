<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Shieldinge;

class ShieldingeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shieldinges')->insert([['title' =>'ПМЛ',  'weight' => 38.49, 'diameter' => '6x10'],
        								 ['title' =>'ПМЛ',  'weight' => 78.65, 'diameter' => '10x16'],
        								 ['title' =>'ПМЛ',  'weight' => 92.48, 'diameter' => '16x24'],
        								 ['title' =>'ПМЛ',  'weight' => 123.8, 'diameter' => '24x30']]);
    }
}
