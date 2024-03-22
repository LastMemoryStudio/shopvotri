<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AliasModel extends Model
{
    protected $table = 'tbl_alias';
    protected $fillable = [
        'id',
        'type',
        'alias',
        'created_at',
        'updated_at'
    ];
}
