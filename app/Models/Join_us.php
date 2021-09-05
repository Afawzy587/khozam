<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join_us extends Model
{
    use HasFactory;
    protected $table ="join_us";
    protected $fillable = [
        'name', 'email', 'phone','message'
    ];
}
