<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Process extends Model
{
    
    use HasFactory, SoftDeletes;
    protected $table = 'processes';
    protected $fillable = ['title', 'description', 'image'];

    public function processmeta()
    {
        return $this->hasMany(ProcessMeta::class, 'process_id', 'id');
    }
}
