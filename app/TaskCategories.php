<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCategories extends Model
{
    public function getID(){
    	return $this->attributes['id'];
    }
}
