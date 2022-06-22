<?php

namespace App\Models;
use App\Models\Post;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePost extends Model
{
    use HasFactory;


    protected $table = 'image_posts';
    public $timestamps = true;
    protected $guarded = [];


    public function post()
    {
        return $this->belongsTo(Post::class);
    }


}
