<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use PDF;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate();

        return view('alumno.index', compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }

    public function pdf()
    {
        $alumnos = Alumno::paginate();

        $pdf = PDF::loadview('alumno.pdf',['alumnos'=>$alumnos]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

        //return view('alumno.pdf', compact('alumnos'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();
        return view('alumno.create', compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alumno::$rules);

        $alumno = Alumno::create($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);

        return view('alumno.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);

        return view('alumno.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id)->delete();

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno deleted successfully');
    }
}
