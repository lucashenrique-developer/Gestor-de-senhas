<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Information extends Model
{
    use HasFactory;
    protected $table = 'passwords';
    protected $primarykey = 'id';
    protected $fillable = ['user_name', 'id_user', 'app_name','app_url', 'app_password'];
}
