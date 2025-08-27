<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // masukin data 
        DB::table('books') -> insert([
            'id' => '1',
            'title'=> 'Harry Poter',
            'author' => 'J.K. Rowling',
            'publisher' => 'Gramedia',
            'year' => '1990',
        ]);
    }
}
