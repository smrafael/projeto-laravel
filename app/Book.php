<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'author', 'price', 'year'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'books';
}
