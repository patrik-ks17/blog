<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {/*  User::truncate();
        Category::truncate();
        Post::truncate(); */

        /* $user = User::factory()->create([
            'name' => 'John Doe'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]); */



        /* $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        Post::create([
            'title' => 'My Family post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Excerpt for my post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facilis sapiente magni doloribus libero recusandae ducimus accusantium quis commodi repellendus non sequi odio, explicabo officiis. Nisi, corrupti! Beatae, repudiandae soluta!
            Expedita molestiae corporis totam neque quam hic optio asperiores, soluta odit ipsum nemo esse molestias nisi obcaecati, eveniet maxime! Ipsum quod velit recusandae unde minima reprehenderit. Sunt voluptatibus eveniet aliquam.</p>',
            'user_id' => $user->id,
            'category_id' => $family->id
        ]);

        Post::create([
            'title' => 'My Work post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Excerpt for my post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facilis sapiente magni doloribus libero recusandae ducimus accusantium quis commodi repellendus non sequi odio, explicabo officiis. Nisi, corrupti! Beatae, repudiandae soluta!
            Expedita molestiae corporis totam neque quam hic optio asperiores, soluta odit ipsum nemo esse molestias nisi obcaecati, eveniet maxime! Ipsum quod velit recusandae unde minima reprehenderit. Sunt voluptatibus eveniet aliquam.</p>',
            'user_id' => $user->id,
            'category_id' => $work->id
        ]);

        Post::create([
            'title' => 'My Personal post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Excerpt for my post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facilis sapiente magni doloribus libero recusandae ducimus accusantium quis commodi repellendus non sequi odio, explicabo officiis. Nisi, corrupti! Beatae, repudiandae soluta!
            Expedita molestiae corporis totam neque quam hic optio asperiores, soluta odit ipsum nemo esse molestias nisi obcaecati, eveniet maxime! Ipsum quod velit recusandae unde minima reprehenderit. Sunt voluptatibus eveniet aliquam.</p>',
            'user_id' => $user->id,
            'category_id' => $personal->id
        ]); */

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
