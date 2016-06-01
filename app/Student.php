<?php

namespace project;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $table = 'student';
    protected $fillable = ['Full_name','Index_number','Email','Current_Address','Graduation_date','Level','Programme','Basic_skills','Major','Application_Type','Job_Search_Status','Resume'];
}
