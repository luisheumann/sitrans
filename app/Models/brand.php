<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
  public function model()
	{
		return $this->belongsTo('App\Models\model');
	}
}
