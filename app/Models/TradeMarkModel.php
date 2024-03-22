<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeMarkModel extends Model
{
    protected $table = 'tbl_trademarks';

    protected $fillable = [
        'alias',
        'name',
        'image',
        'des',
        'sort',
        'publish',
        'created_at',
        'updated_at',
    ];
}
