<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Ambil ID pengguna (User) secara acak
        $user_ids = \App\Models\User::pluck('id')->toArray();
        
        // Pastikan ada User yang terdaftar sebelum menjalankan Factory
        if (empty($user_ids)) {
             // Jika tabel users kosong, buat setidaknya satu user
             $user = \App\Models\User::factory()->create();
             $user_ids = [$user->id];
        }

        return [
            'title' => $this->faker->sentence(6), // Judul acak 6 kata
            'content' => $this->faker->paragraphs(5, true), // 5 paragraf konten
            'author_id' => $this->faker->randomElement($user_ids), // Pilih author_id dari daftar users yang ada
        ];
    }
}