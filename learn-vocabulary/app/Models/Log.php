<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $hidden = ['updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function logable()
    {
        return $this->morphTo();
    }
}
