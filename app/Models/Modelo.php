<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Modelo extends Model {


	protected $fillable = ['id', 'tipo'];


public function marca()
	{
		return $this->belongsTo('App\Models\Brand', 'brand_id');
	}

}

