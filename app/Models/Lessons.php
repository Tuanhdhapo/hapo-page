<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lessons extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title_lessons', 
        'requirement', 
        'content',
        'course_id', 
        'lessons_id',
    ];

    public function course()
    {
        return $this->belongsTo(course::class, 'course_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany(review::class, 'lessons_id', 'id')->where('course_id', null);
    }

    public function users()
    {
        return $this->belongsToMany(user::class, 'lessons_user', 'lessons_id', 'user_id');
    }
}
