<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Owner;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner01 = new Owner();
        $owner01->code = "PRP001";
        $owner01->name = "PROPIETARIO_01";
        $owner01->tel_01 = "TELEFONO_LOCAL_01";
        $owner01->tel_02 = "TELEFONO_CELULAR_01";
        $owner01->mail = "email01@dominio01.com";
        $owner01->address_id = 6;
        $owner01->save();

        $owner02 = new Owner();
        $owner02->code = "PRP002";
        $owner02->name = "PROPIETARIO_02";
        $owner02->tel_01 = "TELEFONO_LOCAL_02";
        $owner02->tel_02 = "TELEFONO_CELULAR_02";
        $owner02->mail = "email02@dominio02.com";
        $owner02->address_id = 7;
        $owner02->save();

        $owner03 = new Owner();
        $owner03->code = "PRP003";
        $owner03->name = "PROPIETARIO_03";
        $owner03->tel_01 = "TELEFONO_LOCAL_03";
        $owner03->tel_02 = "TELEFONO_CELULAR_03";
        $owner03->mail = "email03@dominio03.com";
        $owner03->address_id = 8;
        $owner03->save();

        $owner04 = new Owner();
        $owner04->code = "PRP004";
        $owner04->name = "PROPIETARIO_04";
        $owner04->tel_01 = "TELEFONO_LOCAL_04";
        $owner04->tel_02 = "TELEFONO_CELULAR_04";
        $owner04->mail = "email04@dominio04.com";
        $owner04->address_id = 9;
        $owner04->save();

        $owner05 = new Owner();
        $owner05->code = "PRP005";
        $owner05->name = "PROPIETARIO_05";
        $owner05->tel_01 = "TELEFONO_LOCAL_05";
        $owner05->tel_02 = "TELEFONO_CELULAR_05";
        $owner05->mail = "email05@dominio05.com";
        $owner05->address_id = 10;
        $owner05->save();
    }
}
