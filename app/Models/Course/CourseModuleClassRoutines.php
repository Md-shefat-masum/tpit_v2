<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModuleClassRoutines extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
    //    'date' => "date"  
    ];
    protected static function booted()
    {
        static::created(function ($data) {
            $data->slug = random_int(100,999).$data->id.random_int(1000,9999);
            $data->save();
        });
    }

    public function class()
    {
        return $this->hasOne(CourseModuleClasses::class,'id', 'class_id');
    }
}
