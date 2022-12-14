<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'name', 'comment', 'image',
    ];
    
    public function lesson_schedules()
    {
        return $this->hasMany(LessonSchedule::class);
    }
}
