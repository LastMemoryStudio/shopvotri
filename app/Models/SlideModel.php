<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_slide';

    protected $fillable = [
        'name',
        'alias',
        'type',
        'image',
        'webp',
        'hot',
        'home',
        'sort',
        'type',
        'publish',
        'created_at',
        'updated_at',
    ];
}
