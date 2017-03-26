<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description','initial_date','end_date','days_estimated','priority','category_id','state_id','user_id'];


    public function category(){
    	return $this->hasOne('App\TaskCategories','id','category_id');
    }

    public function state(){
    	return $this->hasOne('App\TaskState','id','state_id');
    }
}
