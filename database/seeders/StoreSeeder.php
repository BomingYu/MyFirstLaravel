<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Store::factory()->count(3)->create();
        Book::factory()->count(5)->create();
    }
}
