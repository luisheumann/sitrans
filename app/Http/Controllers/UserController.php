<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Redirect;
use Toastr;



class UserController extends Controller
{

    public function __construct()
{
    $this->middleware('auth');
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    
    
        $users = User::all();


        return view('admin.usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);


         $messages = "Usuario Creado";
        Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-bottom-right']);

        
        return redirect('/usuario')->with('message','store');
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
        $user = User::find($id);

        return view('admin.usuario.edit',['user'=>$user]);
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
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
         $messages = "Usuario Modificado";
        Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-bottom-right']);
           
       /* Session::flash('message','Usuario Actualizado Correctamente');*/
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
         $messages = "Usuario Eliminado";
        Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-bottom-right']);
        return Redirect::to('/usuario');
    }
}
