<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Spatie\Translatable\HasTranslations;


class Doctor extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['name','position'];

    protected $table = 'doctors';
    public $timestamps = true;

    protected $guarded = [];

    // protected $dateFormat = 'Y/m/d H:i:s';


    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }


    protected $except = [
        'created_at'
    ];

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
}
