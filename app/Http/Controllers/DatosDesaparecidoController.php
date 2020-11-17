<?php

namespace App\Http\Controllers;

use App\DatosDesaparecido;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DatosDesaparecidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['DatosDesaparecido']=DatosDesaparecido::paginate(10);
        return view('DatosDesaparecidos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DatosDesaparecidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre' => 'required|string|max:100',
            'apellidoPat' => 'required|string|max:100',
            'apellidoMat' => 'required|string|max:100',
            'sexo' => 'required|string|max:100',
            'nacionalidad' => 'required|string|max:100',
            'curp' => 'required|string|max:100',
            'rfc' => 'required|string|max:100',
            'edoCivil' => 'required|string|max:100',
            'edoNacimiento' => 'required|string|max:100',
            'fechaNacimiento' => 'required|string|max:100',
            'edad' => 'required|string|max:100',
            'escolaridad' => 'required|string|max:100'
        ];
        $Mensaje =["required"=>'El atributo :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $fecha = Carbon::now();
        //
        $datosDesaparecido=request()->except('_token');
        $datosDesaparecido['fechaActualizacion']=$fecha;
        DatosDesaparecido::insert($datosDesaparecido);
        //return response()->json($datosDesaparecido);
        return redirect('datosdesaparecido')->with('Mensaje','Datos de No Localizado Agregados con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function show(DatosDesaparecido $datosDesaparecido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datosDesaparecido = DatosDesaparecido::findOrFail($id);
        return view('DatosDesaparecidos.edit',compact('datosDesaparecido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombre' => 'required|string|max:100',
            'apellidoPat' => 'required|string|max:100',
            'apellidoMat' => 'required|string|max:100',
            'sexo' => 'required|string|max:100',
            'nacionalidad' => 'required|string|max:100',
            'curp' => 'required|string|max:100',
            'rfc' => 'required|string|max:100',
            'edoCivil' => 'required|string|max:100',
            'edoNacimiento' => 'required|string|max:100',
            'fechaNacimiento' => 'required|string|max:100',
            'edad' => 'required|string|max:100',
            'escolaridad' => 'required|string|max:100'
        ];
        $Mensaje =["required"=>'El atributo :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        //
        $fecha = Carbon::now();
        //
        $datosDesaparecido=request()->except('_token','_method');
        $datosDesaparecido['fechaActualizacion']=$fecha;
        DatosDesaparecido::where('id','=',$id)->update($datosDesaparecido);
        //$datosDesaparecido = DatosDesaparecido::findOrFail($id);
        //return view('DatosDesaparecidos.edit',compact('datosDesaparecido'));
        return redirect('datosdesaparecido')->with('Mensaje','Datos de No Localizado Modificados con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DatosDesaparecido::destroy($id);
        //return redirect('datosdesaparecidos');
        return redirect('datosdesaparecido')->with('Mensaje','Datos de No Localizado Eliminados con Exito');
    }
}
