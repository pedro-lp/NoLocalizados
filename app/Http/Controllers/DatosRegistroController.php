<?php

namespace App\Http\Controllers;

use App\DatosRegistro;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DatosRegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['DatosRegistro']=DatosRegistro::paginate(10);
        return view('DatosRegistro.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DatosRegistro.create');
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
        $DatosRegistro=request()->except('_token');
        $DatosRegistro['fechaActualizacion']=$fecha;
        DatosRegistro::insert($DatosRegistro);
        //return response()->json($datosDesaparecido);
        return redirect('DatosRegistro')->with('Mensaje','Datos de No Localizado Agregados con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function show(DatosRegistro $DatosRegistro)
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
        $DatosRegistro = DatosRegistro::findOrFail($id);
        return view('DatosRegistro.edit',compact('DatosRegistro'));
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
        $DatosRegistro=request()->except('_token','_method');
        $DatosRegistro['fechaActualizacion']=$fecha;
        DatosRegistro::where('id','=',$id)->update($DatosRegistro);
        //$datosDesaparecido = DatosDesaparecido::findOrFail($id);
        //return view('DatosDesaparecidos.edit',compact('datosDesaparecido'));
        return redirect('DatosRegistro')->with('Mensaje','Datos de No Localizado Modificados con Exito');
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
        DatosRegistro::destroy($id);
        //return redirect('datosdesaparecidos');
        return redirect('DatosRegistro')->with('Mensaje','Datos de No Localizado Eliminados con Exito');
    }
}
