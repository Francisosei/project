<?php

namespace project;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    //relationship between post and company
   public function user()
           {
       return $this->belongsTo('project\User');
        //return $this->belongsToMany('project\Company', 'post_id','company_id');
    }

   protected $table ='post';
    protected $fillable = ['Post_title','Job_type','Description','Role','Qualification','Location','Salary_range','Deadline'];
    
    
     
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
}
