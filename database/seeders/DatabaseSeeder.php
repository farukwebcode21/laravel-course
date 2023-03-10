<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Course;
use App\Models\Platform;
use App\Models\Review;
use App\Models\Series;
use App\Models\Topic;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'Admin',
            'email'=> 'hi@faruk.me',
            'password'=>bcrypt('password'),
            'type'=>1,
        ]);

        $series=[
            [
                'name'=> 'Laravel',
                'slug'=>'laravel',
                'image'=>'https://i.ibb.co/Q9j6qR9/laravel.png',
            ],
            [
                'name'=> 'PHP',
                'slug'=>'php',
                'image'=>'https://i.ibb.co/xmrN91Q/php.png',
            ],
            [
                'name'=> 'Livewire',
                'slug'=>'livewire',
                'image'=>'https://i.ibb.co/74Jfg79/livewire.png',
            ],
            [
                'name'=> 'Vuejs',
                'slug'=>'vuejs',
                'image'=>'https://i.ibb.co/WKbsP6h/vuejs.png',
            ],
            [
                'name'=> 'Alpinejs',
                'slug'=>'Alpinejs',
                'image'=>'https://i.ibb.co/mJ1qX9h/alpinejs.png',
            ],
            [
                'name'=> 'tailwindcss',
                'slug'=> 'tailwindcss',
                'image'=>'https://i.ibb.co/7zYJzMy/tailwindcss.png',
            ]
        ];

        foreach($series as $item){
            Series::create([
                'name'=>$item['name'],
                'image'=>$item['image'],
                'slug'=>$item['slug'],
            ]);
        }

        $topics = ['Eloquent', 'Validation', 'Authentication', 'Testing', 'Refactoring'];
        foreach($topics as $item){
            $slug =strtolower(str_replace('', '-', $item));
            Topic::create([
                'name'=> $item,
                'slug'=>$slug
            ]);
        }
        $platforms =['Laracasts', 'Youtube', 'Larajobs', 'Laravel News', 'Laracasts Forum'];
        foreach($platforms as $item){
            Platform::create([
                'name'=>$item,
            ]);
        }

        // $authors =['Faruk Ahmad', 'Another Name ', 'Laracasts'];
        // foreach($authors as $item){
        //     Author::create([
        //         'name'=>$item,
        //     ]);
        // }
        Author::factory(10)->create();

        // create 50 users
        User::factory(50)->create();

        // create 100 course
        Course::factory(100)->create();
        $courses = Course::all();
        foreach($courses as $course){
            $topics = Topic::all()->random(rand(1, 5))->pluck('id')->toArray();
            $course->topics()->attach($topics);

            $authors = Author::all()->random(rand(1, 3))->pluck('id')->toArray();
            $course->authors()->attach($authors);

            $series =Series::all()->random(rand(1, 4))->pluck('id')->toArray();
            $course->series()->attach($series);

        }
        Review::factory(100)->create();
    }
}
