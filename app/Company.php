<?php

namespace project;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
    //company model
    protected $table = 'company';
    protected $fillable = ['Organization_name','Description','Website','Industry','Contact_Info','Title','Full_name','Position','Division','Email','Phone','Address','logo'];
    
}