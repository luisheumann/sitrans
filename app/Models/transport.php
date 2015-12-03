<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transport extends Model
{

	protected $fillable = ['user_id', 'transport_type_id', 'model_id'];


    public function brand()
	{
		return $this->belongsTo('App\Models\brand');
	}

	public function model()
	{
		return $this->belongsTo('App\Models\model');
	}

}
