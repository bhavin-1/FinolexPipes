<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chooseus extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'chooseuses';
    protected $fillable = ['title','short_description', 'description', 'image'];
}
