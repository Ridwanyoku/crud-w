<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article; // Import Model Article

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil ArticleFactory untuk membuat 100 data artikel
        Article::factory()->count(100)->create(); 
    }
}