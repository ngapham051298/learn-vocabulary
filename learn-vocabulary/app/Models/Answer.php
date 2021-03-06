<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at', 'word_id'];

    public function lesson_results()
    {
        return $this->hasMany(LessonResult::class);
    }

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
