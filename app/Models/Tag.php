<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'tags_content'
    ];

    public function courses()
    {
        return $this->belongsToMany(course::class, 'course_tags', 'tag_id', 'course_id');
    }
}
