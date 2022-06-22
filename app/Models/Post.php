<?php

namespace App\Models;

use App\Models\User;
use App\Models\ImagePost;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['title','body'];

    protected $table = 'posts';
    public $timestamps = true;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }



    public function category()
    {
        return $this->belongsTo(ServiceCategory::class,'category_id');
    }


    public function scopeRemove($query)
    {
        return $query->where('remove',0);
    }

    public function scopeRestore($query)
    {
        return $query->where('remove',1);
    }

    public function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function images_post()
    {
        return $this->hasMany(ImagePost::class,'post_id');
    }
}
