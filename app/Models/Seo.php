<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seo extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'seos';
    protected $fillable = ['title','keyword','description', 'link'];
}
