<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Each task belongs to one project
    public function project()
    {
      return $this->belongsTo('App\Project');
    }
}
