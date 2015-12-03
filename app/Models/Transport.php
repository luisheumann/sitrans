<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Transport extends Model {

	protected $fillable = ['user_id', 'transport_type_id', 'model_id'];
	

	public function brands()
	{
		return $this->belongsTo('App\Models\Brand');
	}

}
