<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TurnoUsuario;
use App\TurnoAdmin;

use DB;

class TurnoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(TurnoUsuario::get());
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
    public function store($idTurnoAdmin, $date, $idUser)
    {
        return response()->json(TurnoUsuario::
            create([
                "fecha" => $date,
                "confirmado" => 0,
                "estado" => 0,
                "pagado" => 0,
                "id_usuario" => $idUser,
                "id_turnoAdmin" => $idTurnoAdmin
            ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(TurnoUsuario::find($id));
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
        return response()->json(TurnoUsuario::destroy($id));
    }

    /**
     * Display the specified resource by date.
     *
     * @param  int  $id
     * @param  string  $date
     * @return \Illuminate\Http\Response
     */
    public function getForDate($date, $idDia, $idCancha)
    {
        $result = array();

        $turnosAdmin = TurnoAdmin::
                            where('id_cancha', '=', $idCancha)
                            ->where('id_dia', '=', $idDia)
                            ->get();

        foreach ($turnosAdmin as $turnoAdmin) {
            
            $turnoUser = $turnoAdmin
                            ->turnoUsuario()
                            ->whereDate('fecha', '=', $date)
                            ->first();
            if(!is_null($turnoUser))
            {
                $result[] = $turnoUser;
            }
            else
            {
                $result[] = ['id' => null, 'id_turnoAdmin' => $turnoAdmin->id];
            }
        }
        return response()->json($result);
    }
}
