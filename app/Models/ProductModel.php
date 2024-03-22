<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'tbl_products';

    protected $fillable = [
        'name',
        'cateid',
        'trademarkid',
        'type',
        'alias',
        'image',
        'des',
        'content',
        'properity',
        'qty',
        'price',
        'price_sale',
        'status',
        'hot',
        'sort',
        'publish',
        'created_at',
        'updated_at',
    ];

}