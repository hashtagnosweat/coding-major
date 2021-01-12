<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseGallery extends Model
{
     protected $fillable = [
        'photos', 'courses_id'
    ];

    protected $hidden = [
        
    ];

     public function course()
    {
        return $this->belongsTo(Course::class, 'courses_id', 'id');
    }
}
