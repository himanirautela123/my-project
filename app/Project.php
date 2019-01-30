<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected   $fillable =['Project_name'];

public function tasks()
{
	return $this->hasMany(Task::class);
}
}
