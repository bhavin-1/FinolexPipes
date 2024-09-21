<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProcessMeta extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'process_metas';
    protected $fillable = ['process_id','meta_title','meta_description','meta_image'];
}
