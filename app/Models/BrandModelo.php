<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BrandModelo extends Model {


	protected $fillable = ['id', 'brand_id', 'modelo_id'];


public function marcatipo()
	{
		return $this->belongsTo('App\Models\brand', 'brand_id');
	}


	public function modelotipo()
	{
		return $this->belongsTo('App\Models\modelo', 'modelo_id');
	}
}
