<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "Author" => "Mutia Cendiakiawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam cum rem explicabo dolor dolore sit harum molestiae fugit, temporibus facilis, reiciendis corrupti labore itaque suscipit quasi ducimus, ipsam architecto. Id qui est laboriosam incidunt praesentium harum vitae rem soluta, odit perferendis, ducimus aperiam voluptatem ad animi doloremque eius! Amet, cum ad sint eveniet eaque ea consequatur architecto aspernatur a, odit quisquam maiores id, libero ut! Ab beatae optio, amet doloremque earum, repudiandae odit suscipit repellendus, porro atque deserunt voluptates inventore."
        ],
        [
            "title" => "Judul Tulisan Mutia",
            "slug" => "judul-post-kedua",
            "Author" => "Dodi Mulyano",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam cum rem explicabo dolor dolore sit harum molestiae fugit, temporibus facilis, reiciendis corrupti labore itaque suscipit quasi ducimus, ipsam architecto. Id qui est laboriosam incidunt praesentium harum vitae rem soluta, odit perferendis, ducimus aperiam."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
