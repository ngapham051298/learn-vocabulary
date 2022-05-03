<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $hidden = ['pivot', 'created_at', 'updated_at', 'deleted_at'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function lesson_results()
    {
        return $this->hasMany(LessonResult::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
