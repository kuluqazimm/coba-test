<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "First Postingan qodr hq",
            "slug" => "first-post",
            "author" => "Khuluqin Azim",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ex pariatur eius tenetur eaque ratione quisquam illum ut, rem minus, est velit vitae iusto nulla nesciunt maxime assumenda autem atque vero doloremque! Corrupti modi, quidem repellendus corporis ad sed obcaecati consectetur. Facilis debitis, voluptas culpa obcaecati temporibus eius animi praesentium ullam! Soluta dolores qui itaque necessitatibus delectus accusantium amet fugit deserunt id repellendus debitis commodi quidem, saepe nihil nemo in quis fuga recusandae nam dolor atque? Voluptatibus quibusdam voluptate sequi!"
        ], [
            "title" => "The Second Post",
            "slug" => "the-second-post",
            "author" => "Khuluqin ajah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ex pariatur eius tenetur eaque ratione quisquam illum ut, rem minus, est velit vitae iusto nulla nesciunt maxime assumenda autem atque vero doloremque! Corrupti modi, quidem repellendus corporis ad sed obcaecati consectetur. Facilis debitis, voluptas culpa obcaecati temporibus eius animi praesentium ullam! Soluta dolores qui itaque necessitatibus delectus accusantium amet fugit deserunt id repellendus debitis commodi quidem, saepe nihil nemo in quis fuga recusandae nam dolor atque? Voluptatibus quibusdam voluptate sequi!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}