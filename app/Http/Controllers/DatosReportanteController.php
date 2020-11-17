<?php

namespace App\Http\Controllers;

use App\DatosReportante;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DatosReportanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['DatosReportante']=DatosReportante::paginate(10);
        return view('DatosReportante.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DatosReportante.create');
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
        $DatosReportante=request()->except('_token');
        $DatosReportante['fechaActualizacion']=$fecha;
        DatosReportante::insert($DatosReportante);
        //return response()->json($datosDesaparecido);
        return redirect('DatosReportante')->with('Mensaje','Datos de No Localizado Agregados con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosDesaparecido  $datosDesaparecido
     * @return \Illuminate\Http\Response
     */
    public function show(DatosReportante $DatosReportante)
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
        $DatosReportante = DatosReportante::findOrFail($id);
        return view('DatosReportante.edit',compact('DatosReportante'));
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
        $DatosReportante=request()->except('_token','_method');
        $DatosReportante['fechaActualizacion']=$fecha;
        DatosReportante::where('id','=',$id)->update($DatosReportante);
        //$datosDesaparecido = DatosDesaparecido::findOrFail($id);
        //return view('DatosDesaparecidos.edit',compact('datosDesaparecido'));
        return redirect('DatosReportante')->with('Mensaje','Datos de No Localizado Modificados con Exito');
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
        DatosReportante::destroy($id);
        //return redirect('datosdesaparecidos');
        return redirect('DatosReportante')->with('Mensaje','Datos de No Localizado Eliminados con Exito');
    }
}
