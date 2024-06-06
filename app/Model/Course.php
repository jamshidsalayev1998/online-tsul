<?php

namespace Test\Model;

use App;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";

    public function course_lang (){
        return $this->hasMany(CourseLang::class , 'course_id' , 'id');
    }

}
