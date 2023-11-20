<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Rizky Priya',
            'email' => 'rizky.213040097@mail.unpas.ac.id',
            'password' => bcrypt('12345')

        ]);

        User::create([
            'name' => 'Angga',
            'email' => 'Angga.213040010@mail.unpas.ac.id',
            'password' => bcrypt('12345')

        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt'=> 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem debitis, sint blanditiis at, iusto vel quidem qui corporis maiores praesentium voluptas molestiae tenetur veritatis? Aut doloremque saepe non perferendis earum.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, perferendis! Quasi numquam culpa commodi vitae aperiam. Iusto explicabo ipsum commodi quo. Nemo commodi nostrum reiciendis amet, ullam dolores accusamus veniam omnis hic, exercitationem eaque quis voluptate iusto sapiente. Quibusdam voluptates ratione, commodi impedit molestias aperiam pariatur aliquam vitae quas tempore placeat officiis sed ipsum? Animi eligendi vero ea nobis temporibus atque ducimus corporis laborum provident consequatur omnis ipsam dolorem ullam distinctio, eos debitis reiciendis eaque incidunt numquam molestias, at accusamus optio, quas illum? Iusto commodi, veritatis animi perspiciatis nulla expedita. Corrupti molestias culpa voluptas labore recusandae eveniet non inventore doloribus.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-ke-dua',
            'excerpt'=> 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem debitis, sint blanditiis at, iusto vel quidem qui corporis maiores praesentium voluptas molestiae tenetur veritatis? Aut doloremque saepe non perferendis earum.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, perferendis! Quasi numquam culpa commodi vitae aperiam. Iusto explicabo ipsum commodi quo. Nemo commodi nostrum reiciendis amet, ullam dolores accusamus veniam omnis hic, exercitationem eaque quis voluptate iusto sapiente. Quibusdam voluptates ratione, commodi impedit molestias aperiam pariatur aliquam vitae quas tempore placeat officiis sed ipsum? Animi eligendi vero ea nobis temporibus atque ducimus corporis laborum provident consequatur omnis ipsam dolorem ullam distinctio, eos debitis reiciendis eaque incidunt numquam molestias, at accusamus optio, quas illum? Iusto commodi, veritatis animi perspiciatis nulla expedita. Corrupti molestias culpa voluptas labore recusandae eveniet non inventore doloribus.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ketiga',
            'slug' => 'judul-ke-tiga',
            'excerpt'=> 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem debitis, sint blanditiis at, iusto vel quidem qui corporis maiores praesentium voluptas molestiae tenetur veritatis? Aut doloremque saepe non perferendis earum.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, perferendis! Quasi numquam culpa commodi vitae aperiam. Iusto explicabo ipsum commodi quo. Nemo commodi nostrum reiciendis amet, ullam dolores accusamus veniam omnis hic, exercitationem eaque quis voluptate iusto sapiente. Quibusdam voluptates ratione, commodi impedit molestias aperiam pariatur aliquam vitae quas tempore placeat officiis sed ipsum? Animi eligendi vero ea nobis temporibus atque ducimus corporis laborum provident consequatur omnis ipsam dolorem ullam distinctio, eos debitis reiciendis eaque incidunt numquam molestias, at accusamus optio, quas illum? Iusto commodi, veritatis animi perspiciatis nulla expedita. Corrupti molestias culpa voluptas labore recusandae eveniet non inventore doloribus.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-ke-empat',
            'excerpt'=> 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem debitis, sint blanditiis at, iusto vel quidem qui corporis maiores praesentium voluptas molestiae tenetur veritatis? Aut doloremque saepe non perferendis earum.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, perferendis! Quasi numquam culpa commodi vitae aperiam. Iusto explicabo ipsum commodi quo. Nemo commodi nostrum reiciendis amet, ullam dolores accusamus veniam omnis hic, exercitationem eaque quis voluptate iusto sapiente. Quibusdam voluptates ratione, commodi impedit molestias aperiam pariatur aliquam vitae quas tempore placeat officiis sed ipsum? Animi eligendi vero ea nobis temporibus atque ducimus corporis laborum provident consequatur omnis ipsam dolorem ullam distinctio, eos debitis reiciendis eaque incidunt numquam molestias, at accusamus optio, quas illum? Iusto commodi, veritatis animi perspiciatis nulla expedita. Corrupti molestias culpa voluptas labore recusandae eveniet non inventore doloribus.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}

