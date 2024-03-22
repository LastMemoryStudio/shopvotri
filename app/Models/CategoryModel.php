<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'tbl_category';
    protected $fillable = [
        'id',
        'parentid',
        'name',
        'des',
        'home',
        'publish',
        'sort',
        'alias',
        'image',
        'thumb',
        'webp',
        'webp_thumb',
        'created_at',
        'updated_at'
    ];
}
