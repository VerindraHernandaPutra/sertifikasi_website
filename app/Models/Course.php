<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $fillable = [
        'course_name',
        'course_hour',
        'course_price',
        'course_type',
        'description',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            if ($course->course_price > 0) {
                $course->course_type = 'premium';
            } else {
                $course->course_type = 'free';
            }
        });

        static::updating(function ($course) {
            if ($course->course_price > 0) {
                $course->course_type = 'premium';
            } else {
                $course->course_type = 'free';
            }
        });
    }
}
