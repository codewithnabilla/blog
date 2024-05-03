<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Nabilla',
        //     'email' => 'nabilla@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Maharani',
        //     'email' => 'maharani@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam aut et neque atque assumellendus similique, libero at nobis enim quibusdam',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt minus adipisci mollitia alias vitae delectus nobis architecto voluptatum et accusamus libero aperiam molestiae facere excepturi tenetur veritatis id, nostrum sint quis tempore commodi sed nesciunt. Minima corporis totam aliquam in! Pariatur sunt eos excepturi voluptatem nihil. Porro perferendis facilis odit commodi blanditiis autem dolorum provident tempore vel quod aliquam corporis veniam eaque dignissimos ducimus repellendus dolores saepe quis nemo distinctio, similique natus explicabo alias eius. Excepturi error inventore repellat labore accusantium quisquam a ipsa.</p><p> Autem corrupti reprehenderit ea quam, quis fugit dolor blanditiis possimus. Enim, officia? Illo voluptas a eos voluptate corporis sunt omnis? Mollitia officiis, assumenda voluptatibus pariatur accusamus dignissimos omnis. Voluptas, impedit! Deleniti impedit facilis fugiat voluptatem nobis animi eveniet dolores maxime odio? Voluptates, doloremque? Tempore eum enim laboriosam fugiat quae omnis commodi reiciendis minus, harum nam voluptatibus quibusdam quis vel, debitis rem sed sequi, alias aut eaque.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam aut et neque atque assumellendus similique, libero at nobis enim quibusdam',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt minus adipisci mollitia alias vitae delectus nobis architecto voluptatum et accusamus libero aperiam molestiae facere excepturi tenetur veritatis id, nostrum sint quis tempore commodi sed nesciunt. Minima corporis totam aliquam in! Pariatur sunt eos excepturi voluptatem nihil. Porro perferendis facilis odit commodi blanditiis autem dolorum provident tempore vel quod aliquam corporis veniam eaque dignissimos ducimus repellendus dolores saepe quis nemo distinctio, similique natus explicabo alias eius. Excepturi error inventore repellat labore accusantium quisquam a ipsa.</p><p> Autem corrupti reprehenderit ea quam, quis fugit dolor blanditiis possimus. Enim, officia? Illo voluptas a eos voluptate corporis sunt omnis? Mollitia officiis, assumenda voluptatibus pariatur accusamus dignissimos omnis. Voluptas, impedit! Deleniti impedit facilis fugiat voluptatem nobis animi eveniet dolores maxime odio? Voluptates, doloremque? Tempore eum enim laboriosam fugiat quae omnis commodi reiciendis minus, harum nam voluptatibus quibusdam quis vel, debitis rem sed sequi, alias aut eaque.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam aut et neque atque assumellendus similique, libero at nobis enim quibusdam',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt minus adipisci mollitia alias vitae delectus nobis architecto voluptatum et accusamus libero aperiam molestiae facere excepturi tenetur veritatis id, nostrum sint quis tempore commodi sed nesciunt. Minima corporis totam aliquam in! Pariatur sunt eos excepturi voluptatem nihil. Porro perferendis facilis odit commodi blanditiis autem dolorum provident tempore vel quod aliquam corporis veniam eaque dignissimos ducimus repellendus dolores saepe quis nemo distinctio, similique natus explicabo alias eius. Excepturi error inventore repellat labore accusantium quisquam a ipsa.</p><p> Autem corrupti reprehenderit ea quam, quis fugit dolor blanditiis possimus. Enim, officia? Illo voluptas a eos voluptate corporis sunt omnis? Mollitia officiis, assumenda voluptatibus pariatur accusamus dignissimos omnis. Voluptas, impedit! Deleniti impedit facilis fugiat voluptatem nobis animi eveniet dolores maxime odio? Voluptates, doloremque? Tempore eum enim laboriosam fugiat quae omnis commodi reiciendis minus, harum nam voluptatibus quibusdam quis vel, debitis rem sed sequi, alias aut eaque.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
