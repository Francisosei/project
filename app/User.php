<?php

namespace project;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     */
     public function post()
    {
        return $this->hasMany('project\PostModel');
       // return $this->belongsToMany('project\PostModel', 'company_id','post_id');
    }
    protected $table = 'users';
    protected $fillable = [
        'name','email','role','date_of_birth','industry','website','contact','address','photo','password',
    ];

    
    public function getDeadlineAttribute($value){
        return Carbon::parse($value)->format('m/d/Y');
    }
      /**
     * Get the user's first name for forms.
     *
     * @param  string  $value
     * @return string
     */
    public function getFormDeadline($value){
        return Carbon::parse($value)->format('Y-m-d');
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
