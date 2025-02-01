<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1 = Category::create(['name' => 'Catégorie 1']);
        $category2 = Category::create(['name' => 'Catégorie 2']);

        Post::create([
            'title' => 'Post 1',
            'content' => 'Contenu du post 1',
            'image' => 'images/post1.jpg',
            'category_id' => $category1->id,
        ]);

        Post::create([
            'title' => 'Post 2',
            'content' => 'Contenu du post 2',
            'image' => 'images/post2.jpg',
            'category_id' => $category2->id,
        ]);

        // Add more posts as needed
    }
}
