<?php

use Illuminate\Http\Request;
use App\Punts;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
#http://localhost:8000/api/codigoPostal/8005
Route::get('/codigoPostal/{codigoPostal}', function(Request $request, $codigoPostal) {
	$puntosVehicles = Punts::select("id","codigoIdentificador","tipoConector","potenciaMaxCarga","tipoCarga","coordenadaX","coordenadaY","direccion","barrio","codigoPostal","tipoAcceso","operador","telf","controlAcceso","restriccionUso")->where('codigoPostal','like',"%".$codigoPostal."%")->get();
    return response()->json( $puntosVehicles );
});
#http://localhost:8000/api/barrio/Sants
Route::get('/barrio/{barrio}', function(Request $request, $barrio) {
	$puntosVehicles = Punts::select("id","codigoIdentificador","tipoConector","potenciaMaxCarga","tipoCarga","coordenadaX","coordenadaY","direccion","barrio","codigoPostal","tipoAcceso","operador","telf","controlAcceso","restriccionUso")->where('barrio','like',"%".$barrio."%")->get();
    return response()->json( $puntosVehicles );
});