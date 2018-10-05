<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    // Table Name   
    protected $table = 'posts';
    protected $fillable = ['title', 'short', 'story','image'];
    // Primary Key
    public $primaryKey = 'id';
}
