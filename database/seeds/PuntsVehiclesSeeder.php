<?php

use Illuminate\Database\Seeder;
use App\Punts;

class PuntsVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = 1;
		if (($handle = fopen("puntsVehiclesElectrics.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $row++;
		        $punts = new Punts();
		        $punts->codigoIdentificador = $data[0];
		        $punts->codigoConector = $data[1];
		        $punts->tipoConector = $data[2];
		        $punts->potenciaMaxCarga = $data[3];
		        $punts->tipoCarga = $data[4];
		        $punts->coordenadaX = $data[5];
		        $punts->coordenadaY = $data[6];
		        $punts->direccion = $data[7];
		        $punts->distrito = $data[8];
		        $punts->barrio = $data[9];
		        $punts->codigoPostal = $data[10];
		        $punts->tipoAcceso = $data[11];
		        $punts->operador = $data[12];
		        $punts->telf = $data[13];
		        $punts->controlAcceso = $data[14];
		        $punts->restriccionUso = $data[15];
		        $punts->save();
		    }
		    fclose($handle);
		}
    }
}
