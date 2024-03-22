<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_admin';
    protected $fillable = ['name', 'email', 'active'];
    protected $hidden = ['password', 'text_pas', 'refresh_token', 'reset_password_token'];
}
