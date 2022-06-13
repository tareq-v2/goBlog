<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => "Post Title",
            'slug' => "Post-Slug",
            'quote' => "Some quote here from author",
            'editor_comment' => "Some comment here from author",
            'editor_photo' => "editorPhoto.png",
            'description' => "Description",
        ]);
    }
}
