<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonResult extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function word()
    {
        return $this->belongsTo(Word::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
