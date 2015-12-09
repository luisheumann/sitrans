<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;
use Toastr;
use App\Http\Requests\LoginRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {

        
    if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
         $messages = "Contraseña Correcta";
        Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-top-center', 'progressBar'=>'true']);

            return Redirect::to('usuario');
        }


     Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-top-center', 'progressBar'=>'true']);

        return Redirect::to('/');
    }

    public function logout(){
        Auth::logout();
         $messages = "Deslogueo Satifactorio";
         Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-top-center', 'progressBar'=>'true']);

        return Redirect::to('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
