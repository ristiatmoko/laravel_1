<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post
{
    private static $blog_posts = [
        [
            'title' => 'first title',
            'slug' => 'first-title',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime amet maiores blanditiis, soluta totam sequi commodi dolor modi beatae nihil adipisci fugiat aut veritatis pariatur, iste molestiae! Labore, dolore alias?'
        ],
        [
            'title' => 'second title',
            'slug' => 'second-title',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime amet maiores blanditiis, soluta totam sequi commodi dolor modi beatae nihil adipisci fugiat aut veritatis pariatur, iste molestiae! Labore, dolore alias?'
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
