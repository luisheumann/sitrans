<?php namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Transport;
use App\User;
use Illuminate\Http\Request;

class TransportController extends \App\Http\Controllers\Controller {
	


	public function index()
	{

		$Transports = Transport::first();
	 	return view('transporte.default', ['Transports' => $Transports]);
	}







}