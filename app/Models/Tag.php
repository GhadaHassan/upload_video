<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function videos(){
        return $this->belongsToMany(Video::class, 'tags_videos');   // class, table between 2 relation m2m
    }
}
