<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleModel extends Model
{
    protected $table = 'tbl_module';
    protected $fillable = [
        'id',
        'parentid',
        'icon',
        'name',
        'sort',
        'alias',
        'created_at',
        'updated_at'
    ];
}
