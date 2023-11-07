<?php

namespace App\Models;


class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit corrupti ut ducimus eligendi similique saepe harum in quisquam ullam officia. Ad laborum, consequuntur voluptates ullam dolorem blanditiis, sed tenetur id ea possimus voluptatem nisi fugiat itaque. Quod modi voluptas fugiat consequatur dolorum corrupti, sed est dolor eius distinctio quidem quo labore commodi necessitatibus. Quidem repudiandae, quam, doloremque commodi error dolorum qui molestias officiis ad, laborum animi beatae vero corrupti accusantium? Inventore nobis iste cupiditate laudantium et hic rerum. Vero, dolores?"
        ],
    
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nemo ipsum, vitae, modi repellat dolor a eius quisquam asperiores impedit ducimus tenetur natus ea error maxime minima officia quo consectetur numquam, excepturi sequi perspiciatis harum? Pariatur sint quam quo illo alias laboriosam dolore beatae exercitationem maxime, vitae nobis reprehenderit culpa deleniti adipisci suscipit quaerat ab corrupti eaque, eos praesentium ipsa cum. Eligendi id dolor, distinctio magni maxime blanditiis. Fugiat aliquid nisi tempore quo sapiente libero aliquam expedita ea vel, excepturi similique autem repellendus adipisci? Voluptates illum reprehenderit dicta praesentium in veritatis. Officia eveniet facere eos minima ad ullam, veritatis reiciendis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts= static::all();
        return $posts->firstWhere('slug', $slug);
    }
    
}
