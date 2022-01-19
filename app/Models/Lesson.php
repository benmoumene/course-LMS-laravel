<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title', 'slug', 'embed_id', 'short_text', 'full_text', 'position','free_lesson', 'published', 'course_id'];
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
