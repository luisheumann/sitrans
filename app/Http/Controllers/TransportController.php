<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Redirect;
use Toastr;
use App\Models\Part;
use App\Models\BrandModeloTransport;



class TransportController extends Controller
{


    public function __construct()
{
    $this->middleware('sentry.member:Users');
}


   /** public function __construct()
{
    $this->middleware('auth');
}
**/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $transporte = Transport::all();
    


        return view('admin.transporte.index',compact('transporte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $busqueda = Transport::all();
       return view('admin.transporte.create',compact('busqueda'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transport::create([
            'nombre' => $request['nombre'],
            'user_id' => $request['user_id'],
            'transport_type_id' => $request['transport_type_id'],
            'brand_modelo_id' => $request['brand_modelo_id'],
        ]);


         $messages = "Transporte Creado";
        Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-bottom-right']);

        
        return redirect('/transporte')->with('message','store');
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
        $transporte = Transport::find($id);

        return view('admin.transporte.edit',['transporte'=>$transporte]);
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
        $transporte = Transport::find($id);
        $transporte->fill($request->all());
        $transporte->save();
         $messages = "Transporte Actualizado";
        Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-bottom-right']);
           
       /* Session::flash('message','Usuario Actualizado Correctamente');*/
        return Redirect::to('/transporte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transport::destroy($id);
         $messages = "Transporte Eliminado";
        Toastr::success($messages, $title = null, $options = ['positionClass'=>'toast-bottom-right']);
        return Redirect::to('/transporte');
    }
}
