<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  use HasFactory;

  protected $guarded = [];
  protected static function booted()
  {
    static::created(function ($data) {
      $data->slug = random_int(100, 999) . $data->id . random_int(1000, 9999);
      $data->save();
    });
  }

  public function scopeActive($q)
  {
    return $q->where('status','active');
  }

  public function course_batch()
  {
    return $this->hasMany(CourseBatches::class, 'course_id');
  }

  public function course_job_works()
  {

    return $this->hasMany(CourseJobWorks::class, 'course_id');
  }

  public function course_modules()
  {

    return $this->hasMany(CourseModul::class, 'course_id');
  }

  public function course_module_task_complite_by_user()
  {

    return $this->hasMany(CourseModulTaskCompleteByUsers::class, 'course_id');
  }

  public function course_instactor()
  {

    return $this->hasMany(CourseInstructors::class, 'course_id');
  }

  public function course_job_position()
  {
    return $this->hasMany(CourseJobPositions::class, 'course_id');
  }

  public function course_module_at_a_glance()
  {
    return $this->hasMany(CourseModulAtAGlances::class, 'course_id');
  }

  public function course_what_you_will_get()
  {
    return $this->hasMany(CourseWhatYouWillGets::class, 'course_id');
  }


  public function course_for_whomes()
  {
    return $this->hasMany(CourseForWhoms::class, 'course_id');
  }

  public function course_faqs()
  {
    return $this->hasMany(CourseFaqs::class, 'course_id');
  }


  public function course_essential_requirements()
  {
    return $this->hasMany(CourseEssentialRequirements::class, 'course_id');
  }

  public function course_you_will_learns()
  {
    return $this->hasMany(CourseWillLearns::class, 'course_id');
  }

  public function course_you_will_learn_for_us()
  {
    return $this->hasMany(CourseWhyYouLearnFromUs::class, 'course_id');
  }
}
