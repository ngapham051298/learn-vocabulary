<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $hidden = ['pivot', 'created_at', 'updated_at', 'deleted_at'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function words()
    {
        return $this->belongsToMany(Word::class);
    }

    public function log()
    {
        return $this->morphMany(Log::class, 'logable');
    }
}
