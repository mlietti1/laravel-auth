<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');

        $original_slug = $slug;
        $c = 1;
        $project_exists = Project::where('slug',$slug)->first();
        while($project_exists){
            $slug = $original_slug . '-' . $c;
            $project_exists = Project::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }

}
