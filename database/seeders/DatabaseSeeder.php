<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();
        Post::factory()->create(['user_id' => 1, 'category_id' =>3]);
        foreach(range(1,7) as $i)
            Post::factory()->create(['user_id' => rand(1, 10), 'category_id' =>rand(1,10)]);
        Comment::factory(4)->create(['user_id' => 1, 'post_id' => 10]);
        $comment = Comment::first();
        foreach(range(1,7) as $i)
            $comment->voter()->attach($i, ['upvoted' => rand(0,1)]);
    }
}
