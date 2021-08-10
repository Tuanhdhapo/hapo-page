<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'content_reviews',
         'rate', 
         'user_id', 
         'course_id', 
         'lessons_id', 
         'reviews_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function lesson()
    {
        return $this->belongsTo(lesson::class, 'lessons_id', 'id')->where('course_id', null);
    }

    public function course()
    {
        return $this->belongsTo(course::class, 'course_id', 'id')->where('lessons_id', null);
    }
}
