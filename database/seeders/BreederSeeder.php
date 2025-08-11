<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Breeder;

class BreederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $breeder01 = new Breeder();
        $breeder01->code = "CRI001";
        $breeder01->membership = "SOCIO_01";
        $breeder01->name = "CRIADOR_01";
        $breeder01->tel_01 = "TELEFONO_LOCAL_01";
        $breeder01->tel_02 = "TELEFONO_CELULAR_01";
        $breeder01->mail = "email01@dominio01.com";
        $breeder01->address_id = 1;
        $breeder01->save();

        $breeder02 = new Breeder();
        $breeder02->code = "CRI002";
        $breeder02->membership = "SOCIO_02";
        $breeder02->name = "CRIADOR_02";
        $breeder02->tel_01 = "TELEFONO_LOCAL_02";
        $breeder02->tel_02 = "TELEFONO_CELULAR_02";
        $breeder02->mail = "email02@dominio02.com";
        $breeder02->address_id = 2;
        $breeder02->save();

        $breeder03 = new Breeder();
        $breeder03->code = "CRI003";
        $breeder03->membership = "SOCIO_03";
        $breeder03->name = "CRIADOR_03";
        $breeder03->tel_01 = "TELEFONO_LOCAL_03";
        $breeder03->tel_02 = "TELEFONO_CELULAR_03";
        $breeder03->mail = "email03@dominio03.com";
        $breeder03->address_id = 3;
        $breeder03->save();

        $breeder04 = new Breeder();
        $breeder04->code = "CRI004";
        $breeder04->membership = "SOCIO_04";
        $breeder04->name = "CRIADOR_04";
        $breeder04->tel_01 = "TELEFONO_LOCAL_04";
        $breeder04->tel_02 = "TELEFONO_CELULAR_04";
        $breeder04->mail = "email04@dominio04.com";
        $breeder04->address_id = 4;
        $breeder04->save();

        $breeder05 = new Breeder();
        $breeder05->code = "CRI005";
        $breeder05->membership = "SOCIO_05";
        $breeder05->name = "CRIADOR_05";
        $breeder05->tel_01 = "TELEFONO_LOCAL_05";
        $breeder05->tel_02 = "TELEFONO_CELULAR_05";
        $breeder05->mail = "email05@dominio05.com";
        $breeder05->address_id = 5;
        $breeder05->save();
        
    }
}
