<?php

namespace App\Models;
Use Illuminate\Database\Eloquent;

class m_User extends Model
{
    protected $table = 'user';
    protected $fillable = ['username', 'password'];
}