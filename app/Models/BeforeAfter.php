<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BeforeAfter extends Model
{
    use HasFactory;

    protected $table = 'before_afters';
    public $timestamps = true;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
