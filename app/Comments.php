<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
     // Table Name   
     protected $table = 'comments';
     protected $fillable = ['username', 'comment','page_id'];
     // Primary Key
     public $primaryKey = 'id';
 }
