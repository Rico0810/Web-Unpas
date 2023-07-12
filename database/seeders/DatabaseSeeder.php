<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Mutia',
        //     'email' => 'mutia123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Dodi',
        //     'email' => 'dodi89@gmail.com',
        //     'password' => bcrypt('9833')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, molestiae!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor provident exercitationem sunt quaerat, fuga repellendus, commodi doloribus ad cupiditate veritatis iure officia esse sapiente at! Tempore qui maxime consectetur dolore. Ratione dolores molestiae mollitia voluptate totam, dicta voluptatem recusandae esse dolore voluptates tempora, aspernatur tenetur qui perferendis eligendi, a quasi quia dolorem magni odio nam quo laborum quam ducimus. Dolorem officiis maiores nobis quas, unde odit dignissimos sit voluptatem, animi vel, debitis delectus repudiandae eligendi maxime exercitationem iste dolorum temporibus.',
        //     'category_id' => 1, //1=Web Programming, 2=Personal
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, molestiae!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor provident exercitationem sunt quaerat, fuga repellendus, commodi doloribus ad cupiditate veritatis iure officia esse sapiente at! Tempore qui maxime consectetur dolore. Ratione dolores molestiae mollitia voluptate totam, dicta voluptatem recusandae esse dolore voluptates tempora, aspernatur tenetur qui perferendis eligendi, a quasi quia dolorem magni odio nam quo laborum quam ducimus. Dolorem officiis maiores nobis quas, unde odit dignissimos sit voluptatem, animi vel, debitis delectus repudiandae eligendi maxime exercitationem iste dolorum temporibus.',
        //     'category_id' => 1, //1=Web Programming, 2=Personal
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, molestiae!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor provident exercitationem sunt quaerat, fuga repellendus, commodi doloribus ad cupiditate veritatis iure officia esse sapiente at! Tempore qui maxime consectetur dolore. Ratione dolores molestiae mollitia voluptate totam, dicta voluptatem recusandae esse dolore voluptates tempora, aspernatur tenetur qui perferendis eligendi, a quasi quia dolorem magni odio nam quo laborum quam ducimus. Dolorem officiis maiores nobis quas, unde odit dignissimos sit voluptatem, animi vel, debitis delectus repudiandae eligendi maxime exercitationem iste dolorum temporibus.',
        //     'category_id' => 2, //1=Web Programming, 2=Personal
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, molestiae!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor provident exercitationem sunt quaerat, fuga repellendus, commodi doloribus ad cupiditate veritatis iure officia esse sapiente at! Tempore qui maxime consectetur dolore. Ratione dolores molestiae mollitia voluptate totam, dicta voluptatem recusandae esse dolore voluptates tempora, aspernatur tenetur qui perferendis eligendi, a quasi quia dolorem magni odio nam quo laborum quam ducimus. Dolorem officiis maiores nobis quas, unde odit dignissimos sit voluptatem, animi vel, debitis delectus repudiandae eligendi maxime exercitationem iste dolorum temporibus.',
        //     'category_id' => 2, //1=Web Programming, 2=Personal
        //     'user_id' => 2
        // ]);
    }
}
