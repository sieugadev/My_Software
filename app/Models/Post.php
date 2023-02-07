<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  protected $table='post';
    protected $fillable=
    ([
        'id',
        'ma_post',
        'title_post',
        'content_post',
        'danhmuc_post',
    
    ]);
    use HasFactory;
}
