<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Transport extends Model {

	protected $fillable = ['id','nombre','user_id', 'transport_type_id', 'brand_modelo_id'];
	

	public function marca()
	{
		return $this->belongsTo('App\Models\BrandModelo', 'brand_modelo_id');
	}

	public function tipotrasporte() {
		return $this->belongsTo('App\Models\TransportType', 'transport_type_id');
	}


	public function usuario(){
		return $this->belongsTo('App\User', 'user_id');
	}



}
