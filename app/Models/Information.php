<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Information extends Model
{
    use HasFactory;
    protected $table = 'informations';
    protected $primarykey = 'id';
    protected $fillable = ['user_name', 'user_id', 'app_name', 'app_url', 'app_password'];
}
