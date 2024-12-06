<?php

namespace App\Http\Controllers;

use App\Models\Tamer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTamer;
use Illuminate\Support\Facades\Session;

class TamerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamers = Tamer::all();

        return view("tamers.listadotamers")->with("tamers", $tamers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tamers.createtamer")->with("tamer", new Tamer());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTamer $request)
    {
        $validateddata = $request->validated();

        if($request->file('active_skill_icon')) {
            $file = $request->file('active_skill_icon');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->active_skill_icon->store('tamers/active_icon', 'public');
            $validateddata['active_skill_icon'] = $ruta;
        }

        if($request->file('passive_skill_icon')) {
            $file = $request->file('passive_skill_icon');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->passive_skill_icon->store('tamers/passive_icon', 'public');
            $validateddata['passive_skill_icon'] = $ruta;
        }

        if($request->file('tamer_icon')) {
            $file = $request->file('tamer_icon');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->tamer_icon->store('tamers/tamer_icon', 'public');
            $validateddata['tamer_icon'] = $ruta;
        }

        if($request->file('tamer_model')) {
            $file = $request->file('tamer_model');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->tamer_model->store('tamers/tamer_model', 'public');
            $validateddata['tamer_model'] = $ruta;
        }

        Tamer::create($validateddata);

        Session::flash('mensaje', 'Datos del tamer introducidos correctamente.');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route("tamer.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tamer $tamer)
    {
        return view('tamers.showtamer')->with("tamer", $tamer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamer $tamer)
    {
        return view('tamers.edittamer')->with("tamer", $tamer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTamer $request, Tamer $tamer)
    {
        $validateddata = $request->validated();
        $pathpublico = public_path();
        $aux = substr($pathpublico, 0, strlen($pathpublico) - 6);
        if($request->file('active_skill_icon')) {
            if ($tamer['active_skill_icon'] != null) {
                unlink('storage/' . $tamer['active_skill_icon']);
            }
            $file = $request->file('active_skill_icon');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->active_skill_icon->store('tamers/active_icon', 'public');
            $validateddata['active_skill_icon'] = $ruta;
        }

        if($request->file('passive_skill_icon')) {
            if ($tamer['passive_skill_icon'] != null) {
                unlink('storage/' . $tamer['passive_skill_icon']);
            }
            $file = $request->file('passive_skill_icon');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->passive_skill_icon->store('tamers/passive_icon', 'public');
            $validateddata['passive_skill_icon'] = $ruta;
        }

        if($request->file('tamer_icon')) {
            if ($tamer['tamer_icon'] != null) {
                unlink('storage/' . $tamer['tamer_icon']);
            }
            $file = $request->file('tamer_icon');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->tamer_icon->store('tamers/tamer_icon', 'public');
            $validateddata['tamer_icon'] = $ruta;
        }

        if($request->file('tamer_model')) {
            if ($tamer['tamer_model'] != null) {
                unlink('storage/' . $tamer['tamer_model']);
            }
            $file = $request->file('tamer_model');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->tamer_model->store('tamers/tamer_model', 'public');
            $validateddata['tamer_model'] = $ruta;
        }

        $tamer->update($validateddata);

        Session::flash('mensaje', 'Datos del tamer actualizados correctamente.');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('tamer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamer $tamer)
    {

        if ($tamer['active_skill_icon'] != null) {
            unlink('storage/' . $tamer['active_skill_icon']);
        }

        if ($tamer['passive_skill_icon'] != null) {
            unlink('storage/' . $tamer['passive_skill_icon']);
        }

        if ($tamer['tamer_icon'] != null) {
            unlink('storage/' . $tamer['tamer_icon']);
        }

        if ($tamer['tamer_model'] != null) {
            unlink('storage/' . $tamer['tamer_model']);
        }

        $tamer->delete();

        Session::flash('mensaje', "Datos del tamer borrados correctamente.");
        Session::flash("alert-class", "alert-success");

        return redirect()->route("tamer.index");
    }

    public function gettamers() {
        $tamers = Tamer::all();
        if (count($tamers) != 0) {
            return response(json_encode($tamers), 200)->header('Content-Type', 'application/json');
        } else {
            $data = array('status' => "error", "data" => "No se han encontrado Tamers a mostrar. Si no debería ser así, contacte con un administrador del sitio.");
            return response(json_encode($data), 404)->header('Content-Type', 'application/json');
        }
    }

    public function getonetamer($id) {
        if ($id > 0 && $id <= count(Tamer::all())) {
            return response(json_encode(Tamer::find($id)), 200)->header('Content-Type', 'application/json');
        } else {
            $data = array('status' => "error", "data" => "No se ha encontrado Tamers a mostrar con el número facilitado. Revise si lo que ha introducido es correcto. Si no debería ser así, contacte con un administrador del sitio.");
            return response(json_encode($data), 404)->header('Content-Type', 'application/json');
        }
    }

    public function __construct()
    {
        $this->middleware(['auth', 'isadmin'])->except(['index', 'show', 'gettamers', 'getonetamer']);
    }
}
