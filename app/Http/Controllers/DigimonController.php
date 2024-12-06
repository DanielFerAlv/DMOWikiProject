<?php

namespace App\Http\Controllers;

use App\Models\Digimon;
use App\Models\Familia;
use App\Models\ProsContras;
use Illuminate\Http\Request;
use App\Models\DigimonFamilia;
use App\Http\Requests\StoreDigimon;
use App\Models\DigimonProsContras;
use Illuminate\Support\Facades\Session;

class DigimonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $digimon = Digimon::paginate(10);

        return view("digimon.listadodigi")->with('digimon', $digimon);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('digimon.createdigi')->with('digimon', new Digimon());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDigimon $request)
    {
        $validateddata = $request->validated();
        
        if($request->file('foto')) {
            $file = $request->file('foto');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->foto->store('digimon', 'public');
            $validateddata['foto'] = $ruta;
        }

        if($request->file('icono')) {
            $file = $request->file('icono');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->icono->store('iconos/digimon', 'public');
            $validateddata['icono'] = $ruta;
        }

        $digimon = Digimon::create($validateddata);

        return redirect()->route('digimon.create2', $digimon['id']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Digimon $digimon)
    {
        $familias = Familia::all();
        $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
        $proscontras = ProsContras::all();
        $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

        return view('digimon.showdatosdigi')->with('digimon', $digimon)->with('familiasdigi', $familiasdigi)->with('proscontrasdigi', $proscontrasdigi)->with('familias', $familias)->with('proscontras', $proscontras);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Digimon $digimon)
    {
        //$id = $digimon['id'];

        return view('digimon.editdigi')->with('digimon', $digimon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDigimon $request, Digimon $digimon)
    {
        $validateddata = $request->validated();

        if($request->file('foto')) {
            if ($digimon['foto'] != null) {
                unlink('storage/' . $digimon['foto']);
            }
            $file = $request->file('foto');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->foto->store('digimon', 'public');
            $validateddata['foto'] = $ruta;
        }

        if($request->file('icono')) {
            if ($digimon['icono'] != null) {
                unlink('storage/' . $digimon['icono']);
            }
            $file = $request->file('icono');
            $newname = time() . '_' . $file->getClientOriginalName();
            $ruta = $request->icono->store('iconos/digimon', 'public');
            $validateddata['icono'] = $ruta;
        }

        $digimon->update($validateddata);


        return redirect()->route('digimon.edit2', $digimon['id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Digimon $digimon)
    {
        
        if ($digimon['foto'] != null) {
            unlink('storage/' . $digimon['foto']);
        }

        if ($digimon['icono'] != null) {
            unlink('storage/' . $digimon['icono']);
        }
        
        DigimonFamilia::where('digimon_id', '=', $digimon->id)->delete();

        DigimonProsContras::where('digimon_id', '=', $digimon->id)->delete();

        $digimon->delete();

        Session::flash('mensaje', "Datos del Digimon borrados correctamente.");
        Session::flash("alert-class", "alert-success");

        return redirect()->route("digimon.index");
    }

    public function create2(Digimon $digimon) {
        $familias = Familia::all();
        $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
        $proscontras = ProsContras::all();
        $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

        return view('digimon.createdigi2')->with('digimon', $digimon)->with('familias', $familias)->with('proscontras', $proscontras)->with('digifamilias', $familiasdigi)->with('digiproscontras', $proscontrasdigi);
    }

    public function store2(Digimon $digimon) {
        if (!isset($_POST['familia']) || empty($_POST['familia'])){
            Session::flash('mensaje', "Todos los digimon tienen como mínimo una familia. Por favor, especifique una como mínimo.");
            Session::flash("alert-class", "alert-danger");

            $familias = Familia::all();
            $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
            $proscontras = ProsContras::all();
            $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

            return view('digimon.createdigi2')->with('digimon', $digimon)->with('familias', $familias)->with('proscontras', $proscontras)->with('digifamilias', $familiasdigi)->with('digiproscontras', $proscontrasdigi);
        } else {
            $erroresfamilia = array();
            $familias = Familia::all();
            for ($i = 0; $i < count($_POST['familia']); $i++){
                if ($_POST['familia'][$i] > count($familias) || $_POST['familia'][$i] <= 0 || !is_numeric($_POST['familia'][$i])){
                    array_push($erroresfamilia, "Registro inválido");
                }
                $digifamilias[] = [
                    'digimon_id' => $digimon->id,
                    'familia_id' => $_POST['familia'][$i],
                ];
            };
            if (count($erroresfamilia) > 0) {
                Session::flash('mensaje', "Error en la recepcion de uno de los valores referente a las familias. Pruebe de nuevo o inténtelo más tarde.");
                Session::flash("alert-class", "alert-danger");

                $familias = Familia::all();
                $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
                $proscontras = ProsContras::all();
                $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

                return view('digimon.createdigi2')->with('digimon', $digimon)->with('familias', $familias)->with('proscontras', $proscontras)->with('digifamilias', $familiasdigi)->with('digiproscontras', $proscontrasdigi);
            } else {
                DigimonFamilia::insert($digifamilias);
            }
            if (isset($_POST['procontra']) || !empty($_POST['procontra'])){
                $erroresproscontras = array();
                $proscontras = ProsContras::all();
                for ($i = 0; $i < count($_POST['procontra']); $i++){
                    if ($_POST['procontra'][$i] > count($proscontras) || $_POST['procontra'][$i] <= 0 || !is_numeric($_POST['procontra'][$i])){
                        array_push($erroresproscontras, "Registro inválido");
                    }
                    $digiprocontras[] = [
                        'digimon_id' => $digimon->id,
                        'procontra_id' => $_POST['procontra'][$i],
                    ];
                };
                if (count($erroresproscontras) > 0){
                    Session::flash('mensaje', "Error en la recepcion de uno de los valores referente a los pros y los contras. Pruebe de nuevo o inténtelo más tarde.");
                    Session::flash("alert-class", "alert-danger");

                    $familias = Familia::all();
                    $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
                    $proscontras = ProsContras::all();
                    $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

                    return view('digimon.createdigi2')->with('digimon', $digimon)->with('familias', $familias)->with('proscontras', $proscontras)->with('digifamilias', $familiasdigi)->with('digiproscontras', $proscontrasdigi);
                } else {
                    DigimonProsContras::insert($digiprocontras);
                }
            }

            Session::flash('mensaje', 'Datos del digimon introducidos correctamente.');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('digimon.index');
            
        }
    }

    public function edit2(Digimon $digimon)
    {
        $familias = Familia::all();
        $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
        $proscontras = ProsContras::all();
        $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

        return view('digimon.editdigi2')->with('digimon', $digimon)->with('familias', $familias)->with('proscontras', $proscontras)->with('digifamilias', $familiasdigi)->with('digiproscontras', $proscontrasdigi);
    }

    public function update2(Digimon $digimon)
    {
        if (!isset($_POST['familia']) || empty($_POST['familia'])){
            Session::flash('mensaje', "Todos los digimon tienen como mínimo una familia. Por favor, especifique una como mínimo.");
            Session::flash("alert-class", "alert-danger");

            $familias = Familia::all();
            $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
            $proscontras = ProsContras::all();
            $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

            return view('digimon.editdigi2')->with('digimon', $digimon)->with('familias', $familias)->with('proscontras', $proscontras)->with('digifamilias', $familiasdigi)->with('digiproscontras', $proscontrasdigi);
        } else {
            $erroresfamilia = array();
            $familias = Familia::all();
            for ($i = 0; $i < count($_POST['familia']); $i++){
                if ($_POST['familia'][$i] > count($familias) || $_POST['familia'][$i] <= 0 || !is_numeric($_POST['familia'][$i])){
                    array_push($erroresfamilia, "Registro inválido");
                }
                $digifamilias[] = [
                    'digimon_id' => $digimon->id,
                    'familia_id' => $_POST['familia'][$i],
                ];
            };
            if (count($erroresfamilia) > 0) {
                Session::flash('mensaje', "Error en la recepcion de uno de los valores referente a las familias. Pruebe de nuevo o inténtelo más tarde.");
                Session::flash("alert-class", "alert-danger");

                $familias = Familia::all();
                $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
                $proscontras = ProsContras::all();
                $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

                return view('digimon.editdigi2')->with('digimon', $digimon)->with('familias', $familias)->with('proscontras', $proscontras)->with('digifamilias', $familiasdigi)->with('digiproscontras', $proscontrasdigi);
            } else {
                DigimonFamilia::where('digimon_id', '=', $digimon->id)->delete();
                DigimonFamilia::insert($digifamilias);
            }
            DigimonProsContras::where('digimon_id', '=', $digimon->id)->delete();
            if (isset($_POST['procontra']) || !empty($_POST['procontra'])){
                $erroresproscontras = array();
                $proscontras = ProsContras::all();
                for ($i = 0; $i < count($_POST['procontra']); $i++){
                    if ($_POST['procontra'][$i] > count($proscontras) || $_POST['procontra'][$i] <= 0 || !is_numeric($_POST['procontra'][$i])){
                        array_push($erroresproscontras, "Registro inválido");
                    }
                    $digiprocontras[] = [
                        'digimon_id' => $digimon->id,
                        'procontra_id' => $_POST['procontra'][$i],
                    ];
                };
                if (count($erroresproscontras) > 0){
                    Session::flash('mensaje', "Error en la recepcion de uno de los valores referente a los pros y los contras. Pruebe de nuevo o inténtelo más tarde.");
                    Session::flash("alert-class", "alert-danger");

                    $familias = Familia::all();
                    $familiasdigi = DigimonFamilia::where('digimon_id', '=', $digimon->id)->get();
                    $proscontras = ProsContras::all();
                    $proscontrasdigi = DigimonProsContras::where('digimon_id', '=', $digimon->id)->get();

                    return view('digimon.editdigi2')->with('digimon', $digimon)->with('familias', $familias)->with('proscontras', $proscontras)->with('digifamilias', $familiasdigi)->with('digiproscontras', $proscontrasdigi);
                } else {
                    DigimonProsContras::where('digimon_id', '=', $digimon->id)->delete();
                    DigimonProsContras::insert($digiprocontras);
                }
            } else {
                DigimonProsContras::where('digimon_id', '=', $digimon->id)->delete();
            }

            Session::flash('mensaje', 'Datos del digimon actualizados correctamente.');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('digimon.index');
            
        }
    }

    public function getdigis() {
        $digimon = Digimon::all();
        if (count($digimon) != 0) {
            return response(json_encode($digimon), 200)->header('Content-Type', 'application/json');
        } else {
            $data = array('status' => "error", "data" => "No se han encontrado Digimon a mostrar. Si no debería ser así, contacte con un administrador del sitio.");
            return response(json_encode($data), 404)->header('Content-Type', 'application/json');
        }
    }

    public function getonedigi($id) {
        if ($id > 0 && $id <= count(Digimon::all())) {
            return response(json_encode(Digimon::find($id)), 200)->header('Content-Type', 'application/json');
        } else {
            $data = array('status' => "error", "data" => "No se ha encontrado Digimon a mostrar con el número facilitado. Revise si lo que ha introducido es correcto. Si no debería ser así, contacte con un administrador del sitio.");
            return response(json_encode($data), 404)->header('Content-Type', 'application/json');
        }
    }

    public function __construct()
    {
        $this->middleware(['auth', 'isadmin'])->except(['index', 'show', 'getdigis', 'getonedigi']);
    }

}


