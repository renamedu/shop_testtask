<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodUser extends Model
{
    use HasFactory;
    protected $table = 'good_users';
    protected $guarded = false;
}
