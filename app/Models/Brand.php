<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	public function species()
	{
		return $this->belongsTo('App\Models\Species');
	}
}
