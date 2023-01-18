<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');

        $original_slug = $slug;
        $c = 1;
        $post_exists = Post::where('slug',$slug)->first();
        while($post_exists){
            $slug = $original_slug . '-' . $c;
            $post_exists = Post::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }

}
