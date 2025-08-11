<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $address01 = new Address();
        $address01->code = "DIR001";
        $address01->street = "CALLE_01";
        $address01->ext_number = "EXT_01";
        $address01->int_number = "INT_01";
        $address01->col = "COLONIA_01";
        $address01->city = "CIUDAD_01";
        $address01->mun = "MUNICIPIO_01";
        $address01->state = "ESTADO_01";
        $address01->country = "PAIS_01";
        $address01->zip_code = 10001;
        $address01->save();

        $address02 = new Address();
        $address02->code = "DIR002";
        $address02->street = "CALLE_02";
        $address02->ext_number = "EXT_02";
        $address02->int_number = "INT_02";
        $address02->col = "COLONIA_02";
        $address02->city = "CIUDAD_02";
        $address02->mun = "MUNICIPIO_02";
        $address02->state = "ESTADO_02";
        $address02->country = "PAIS_02";
        $address02->zip_code = 10002;
        $address02->save();

        $address03 = new Address();
        $address03->code = "DIR003";
        $address03->street = "CALLE_03";
        $address03->ext_number = "EXT_03";
        $address03->int_number = "INT_03";
        $address03->col = "COLONIA_03";
        $address03->city = "CIUDAD_03";
        $address03->mun = "MUNICIPIO_03";
        $address03->state = "ESTADO_03";
        $address03->country = "PAIS_03";
        $address03->zip_code = 10003;
        $address03->save();

        $address04 = new Address();
        $address04->code = "DIR004";
        $address04->street = "CALLE_04";
        $address04->ext_number = "EXT_04";
        $address04->int_number = "INT_04";
        $address04->col = "COLONIA_04";
        $address04->city = "CIUDAD_04";
        $address04->mun = "MUNICIPIO_04";
        $address04->state = "ESTADO_04";
        $address04->country = "PAIS_04";
        $address04->zip_code = 10004;
        $address04->save();

        $address05 = new Address();
        $address05->code = "DIR005";
        $address05->street = "CALLE_05";
        $address05->ext_number = "EXT_05";
        $address05->int_number = "INT_05";
        $address05->col = "COLONIA_05";
        $address05->city = "CIUDAD_05";
        $address05->mun = "MUNICIPIO_05";
        $address05->state = "ESTADO_05";
        $address05->country = "PAIS_05";
        $address05->zip_code = 10005;
        $address05->save();

        $address06 = new Address();
        $address06->code = "DIR006";
        $address06->street = "CALLE_06";
        $address06->ext_number = "EXT_06";
        $address06->int_number = "INT_06";
        $address06->col = "COLONIA_06";
        $address06->city = "CIUDAD_06";
        $address06->mun = "MUNICIPIO_06";
        $address06->state = "ESTADO_06";
        $address06->country = "PAIS_06";
        $address06->zip_code = 10006;
        $address06->save();

        $address07 = new Address();
        $address07->code = "DIR007";
        $address07->street = "CALLE_07";
        $address07->ext_number = "EXT_07";
        $address07->int_number = "INT_07";
        $address07->col = "COLONIA_07";
        $address07->city = "CIUDAD_07";
        $address07->mun = "MUNICIPIO_07";
        $address07->state = "ESTADO_07";
        $address07->country = "PAIS_07";
        $address07->zip_code = 10007;
        $address07->save();

        $address08 = new Address();
        $address08->code = "DIR008";
        $address08->street = "CALLE_08";
        $address08->ext_number = "EXT_08";
        $address08->int_number = "INT_08";
        $address08->col = "COLONIA_08";
        $address08->city = "CIUDAD_08";
        $address08->mun = "MUNICIPIO_08";
        $address08->state = "ESTADO_08";
        $address08->country = "PAIS_08";
        $address08->zip_code = 10008;
        $address08->save();

        $address09 = new Address();
        $address09->code = "DIR009";
        $address09->street = "CALLE_09";
        $address09->ext_number = "EXT_09";
        $address09->int_number = "INT_09";
        $address09->col = "COLONIA_09";
        $address09->city = "CIUDAD_09";
        $address09->mun = "MUNICIPIO_09";
        $address09->state = "ESTADO_09";
        $address09->country = "PAIS_09";
        $address09->zip_code = 10009;
        $address09->save();

        $address10 = new Address();
        $address10->code = "DIR010";
        $address10->street = "CALLE_10";
        $address10->ext_number = "EXT_10";
        $address10->int_number = "INT_10";
        $address10->col = "COLONIA_10";
        $address10->city = "CIUDAD_10";
        $address10->mun = "MUNICIPIO_10";
        $address10->state = "ESTADO_10";
        $address10->country = "PAIS_10";
        $address10->zip_code = 10010;
        $address10->save();
        
    }
}
