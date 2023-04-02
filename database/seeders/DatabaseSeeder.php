<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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

        User::factory(5)->create();

        Category::create([
            'name' => 'Football',
            'slug' => 'football'
        ]);

        Category::create([
            'name' => 'Futsal',
            'slug' => 'futsal'
        ]);

        Category::create([
            'name' => 'Basketball',
            'slug' => 'basketball'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'risti',
        //     'email' => 'risti@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'first-title',
        //     'slug' => 'first-title',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, dolor.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ut eligendi ab numquam ipsa, reiciendis facere omnis quidem perferendis repellendus enim quibusdam veritatis sapiente magnam in! Voluptas reprehenderit consequuntur debitis labore quisquam, magnam nam dolorum. Sint, illum ipsam, vitae libero error ad maiores molestiae voluptatibus suscipit, modi ratione aperiam incidunt.'
        // ]);

        // Post::create([
        //     'title' => 'second-title',
        //     'slug' => 'second-title',
        //     'user_id' => 1,
        //     'category_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, dolor.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ut eligendi ab numquam ipsa, reiciendis facere omnis quidem perferendis repellendus enim quibusdam veritatis sapiente magnam in! Voluptas reprehenderit consequuntur debitis labore quisquam, magnam nam dolorum. Sint, illum ipsam, vitae libero error ad maiores molestiae voluptatibus suscipit, modi ratione aperiam incidunt.'
        // ]);

    }
}
