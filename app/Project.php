<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Project object owns multiple tasks
    public function tasks()
    {
      return $this->hasMany('App\Task');
    }
}
