<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskState extends Model
{
    public function getID(){
    	return $this->attributes['id'];
    }
}
