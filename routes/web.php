<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rizky Priya",
        "email" => "rizky.213040097@mail.unpas.ac.id",
        "image" => "Me.jpg"
    ]);
});






Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky Priya",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit corrupti ut ducimus eligendi similique saepe harum in quisquam ullam officia. Ad laborum, consequuntur voluptates ullam dolorem blanditiis, sed tenetur id ea possimus voluptatem nisi fugiat itaque. Quod modi voluptas fugiat consequatur dolorum corrupti, sed est dolor eius distinctio quidem quo labore commodi necessitatibus. Quidem repudiandae, quam, doloremque commodi error dolorum qui molestias officiis ad, laborum animi beatae vero corrupti accusantium? Inventore nobis iste cupiditate laudantium et hic rerum. Vero, dolores?"
        ],
    
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "iki pm",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nemo ipsum, vitae, modi repellat dolor a eius quisquam asperiores impedit ducimus tenetur natus ea error maxime minima officia quo consectetur numquam, excepturi sequi perspiciatis harum? Pariatur sint quam quo illo alias laboriosam dolore beatae exercitationem maxime, vitae nobis reprehenderit culpa deleniti adipisci suscipit quaerat ab corrupti eaque, eos praesentium ipsa cum. Eligendi id dolor, distinctio magni maxime blanditiis. Fugiat aliquid nisi tempore quo sapiente libero aliquam expedita ea vel, excepturi similique autem repellendus adipisci? Voluptates illum reprehenderit dicta praesentium in veritatis. Officia eveniet facere eos minima ad ullam, veritatis reiciendis."
        ],
    ];
    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halamam single post
Route::get('posts/{slug}', function($slugx) {
    $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky Priya",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit corrupti ut ducimus eligendi similique saepe harum in quisquam ullam officia. Ad laborum, consequuntur voluptates ullam dolorem blanditiis, sed tenetur id ea possimus voluptatem nisi fugiat itaque. Quod modi voluptas fugiat consequatur dolorum corrupti, sed est dolor eius distinctio quidem quo labore commodi necessitatibus. Quidem repudiandae, quam, doloremque commodi error dolorum qui molestias officiis ad, laborum animi beatae vero corrupti accusantium? Inventore nobis iste cupiditate laudantium et hic rerum. Vero, dolores?"
        ],
    
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "iki pm",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nemo ipsum, vitae, modi repellat dolor a eius quisquam asperiores impedit ducimus tenetur natus ea error maxime minima officia quo consectetur numquam, excepturi sequi perspiciatis harum? Pariatur sint quam quo illo alias laboriosam dolore beatae exercitationem maxime, vitae nobis reprehenderit culpa deleniti adipisci suscipit quaerat ab corrupti eaque, eos praesentium ipsa cum. Eligendi id dolor, distinctio magni maxime blanditiis. Fugiat aliquid nisi tempore quo sapiente libero aliquam expedita ea vel, excepturi similique autem repellendus adipisci? Voluptates illum reprehenderit dicta praesentium in veritatis. Officia eveniet facere eos minima ad ullam, veritatis reiciendis."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $_POST) {
        if($post["slug"] == $slug) {
            $new_post = $post;
        }
    }
    return view ('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);

});