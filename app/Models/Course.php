<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'course_img', 
        'course_title', 
        'coursecontent_', 
        'descriptions', 
        'learnes', 
        'price', 
        'lessons',
        'quizzes',
        'times', 
        'tag', 
        'course_id',
    ];

    public function lessons()
    {
        return $this->hasMany(lesson::class, 'course_id', 'id');
    }

    public function tag()
    {
        return $this->belongsToMany(tag::class, 'course_tag', 'course_id', 'tag_id');
    }

    public function users()
    {
        return $this->belongsToMany(user::class, 'course_users', 'course_id', 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(review::class, 'course_id', 'reviews_id')->where('lessons_id', null);
    }
}
