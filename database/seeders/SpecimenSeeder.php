<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specimen;

class SpecimenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specimen01 = new Specimen();
        $specimen01->code = "EJE0001";
        $specimen01->registry = "REGISTRO_01";
        $specimen01->name = "EJEMPLAR_001";
        $specimen01->chip = "CHIP_01";
        $specimen01->birthdate = "2023-01-01";
        $specimen01->sex_id = 1;
        $specimen01->color_id = 1;
        $specimen01->category_id = 1;
        $specimen01->breeder_id = 1;
        $specimen01->owner_id = 1;
        $specimen01->father_code = NULL;
        $specimen01->mother_code = NULL;
        $specimen01->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen01->save();

        $specimen02 = new Specimen();
        $specimen02->code = "EJE0002";
        $specimen02->registry = "REGISTRO_02";
        $specimen02->name = "EJEMPLAR_002";
        $specimen02->chip = "CHIP_02";
        $specimen02->birthdate = "2023-01-02";
        $specimen02->sex_id = 2;
        $specimen02->color_id = 2;
        $specimen02->category_id = 1;
        $specimen02->breeder_id = 2;
        $specimen02->owner_id = 2;
        $specimen02->father_code = NULL;
        $specimen02->mother_code = NULL;
        $specimen02->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen02->save();

        $specimen03 = new Specimen();
        $specimen03->code = "EJE0003";
        $specimen03->registry = "REGISTRO_03";
        $specimen03->name = "EJEMPLAR_003";
        $specimen03->chip = "CHIP_03";
        $specimen03->birthdate = "2023-01-03";
        $specimen03->sex_id = 1;
        $specimen03->color_id = 3;
        $specimen03->category_id = 1;
        $specimen03->breeder_id = 3;
        $specimen03->owner_id = 3;
        $specimen03->father_code = NULL;
        $specimen03->mother_code = NULL;
        $specimen03->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen03->save();

        $specimen04 = new Specimen();
        $specimen04->code = "EJE0004";
        $specimen04->registry = "REGISTRO_04";
        $specimen04->name = "EJEMPLAR_004";
        $specimen04->chip = "CHIP_04";
        $specimen04->birthdate = "2023-01-04";
        $specimen04->sex_id = 2;
        $specimen04->color_id = 4;
        $specimen04->category_id = 1;
        $specimen04->breeder_id = 1;
        $specimen04->owner_id = 1;
        $specimen04->father_code = NULL;
        $specimen04->mother_code = NULL;
        $specimen04->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen04->save();

        $specimen05 = new Specimen();
        $specimen05->code = "EJE0005";
        $specimen05->registry = "REGISTRO_05";
        $specimen05->name = "EJEMPLAR_005";
        $specimen05->chip = "CHIP_05";
        $specimen05->birthdate = "2023-01-05";
        $specimen05->sex_id = 1;
        $specimen05->color_id = 5;
        $specimen05->category_id = 1;
        $specimen05->breeder_id = 2;
        $specimen05->owner_id = 2;
        $specimen05->father_code = NULL;
        $specimen05->mother_code = NULL;
        $specimen05->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen05->save();

        $specimen06 = new Specimen();
        $specimen06->code = "EJE0006";
        $specimen06->registry = "REGISTRO_06";
        $specimen06->name = "EJEMPLAR_006";
        $specimen06->chip = "CHIP_06";
        $specimen06->birthdate = "2023-01-06";
        $specimen06->sex_id = 2;
        $specimen06->color_id = 6;
        $specimen06->category_id = 1;
        $specimen06->breeder_id = 3;
        $specimen06->owner_id = 3;
        $specimen06->father_code = NULL;
        $specimen06->mother_code = NULL;
        $specimen06->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen06->save();

        $specimen07 = new Specimen();
        $specimen07->code = "EJE0007";
        $specimen07->registry = "REGISTRO_07";
        $specimen07->name = "EJEMPLAR_007";
        $specimen07->chip = "CHIP_07";
        $specimen07->birthdate = "2023-01-07";
        $specimen07->sex_id = 1;
        $specimen07->color_id = 7;
        $specimen07->category_id = 1;
        $specimen07->breeder_id = 1;
        $specimen07->owner_id = 1;
        $specimen07->father_code = NULL;
        $specimen07->mother_code = NULL;
        $specimen07->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen07->save();

        $specimen08 = new Specimen();
        $specimen08->code = "EJE0008";
        $specimen08->registry = "REGISTRO_08";
        $specimen08->name = "EJEMPLAR_008";
        $specimen08->chip = "CHIP_08";
        $specimen08->birthdate = "2023-01-08";
        $specimen08->sex_id = 2;
        $specimen08->color_id = 8;
        $specimen08->category_id = 1;
        $specimen08->breeder_id = 2;
        $specimen08->owner_id = 2;
        $specimen08->father_code = NULL;
        $specimen08->mother_code = NULL;
        $specimen08->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen08->save();

        $specimen09 = new Specimen();
        $specimen09->code = "EJE0009";
        $specimen09->registry = "REGISTRO_09";
        $specimen09->name = "EJEMPLAR_009";
        $specimen09->chip = "CHIP_09";
        $specimen09->birthdate = "2023-01-09";
        $specimen09->sex_id = 1;
        $specimen09->color_id = 9;
        $specimen09->category_id = 1;
        $specimen09->breeder_id = 3;
        $specimen09->owner_id = 3;
        $specimen09->father_code = "EJE0001";
        $specimen09->mother_code = "EJE0002";
        $specimen09->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen09->save();

        $specimen10 = new Specimen();
        $specimen10->code = "EJE0010";
        $specimen10->registry = "REGISTRO_10";
        $specimen10->name = "EJEMPLAR_010";
        $specimen10->chip = "CHIP_10";
        $specimen10->birthdate = "2023-01-10";
        $specimen10->sex_id = 2;
        $specimen10->color_id = 10;
        $specimen10->category_id = 1;
        $specimen10->breeder_id = 1;
        $specimen10->owner_id = 1;
        $specimen10->father_code = "EJE0003";
        $specimen10->mother_code = "EJE0004";
        $specimen10->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen10->save();

        $specimen11 = new Specimen();
        $specimen11->code = "EJE0011";
        $specimen11->registry = "REGISTRO_11";
        $specimen11->name = "EJEMPLAR_011";
        $specimen11->chip = "CHIP_11";
        $specimen11->birthdate = "2023-01-11";
        $specimen11->sex_id = 1;
        $specimen11->color_id = 11;
        $specimen11->category_id = 1;
        $specimen11->breeder_id = 2;
        $specimen11->owner_id = 2;
        $specimen11->father_code = "EJE0005";
        $specimen11->mother_code = "EJE0006";
        $specimen11->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen11->save();

        $specimen12 = new Specimen();
        $specimen12->code = "EJE0012";
        $specimen12->registry = "REGISTRO_12";
        $specimen12->name = "EJEMPLAR_012";
        $specimen12->chip = "CHIP_12";
        $specimen12->birthdate = "2023-01-12";
        $specimen12->sex_id = 2;
        $specimen12->color_id = 12;
        $specimen12->category_id = 1;
        $specimen12->breeder_id = 3;
        $specimen12->owner_id = 3;
        $specimen12->father_code = "EJE0007";
        $specimen12->mother_code = "EJE0008";
        $specimen12->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen12->save();

        $specimen13 = new Specimen();
        $specimen13->code = "EJE0013";
        $specimen13->registry = "REGISTRO_13";
        $specimen13->name = "EJEMPLAR_013";
        $specimen13->chip = "CHIP_13";
        $specimen13->birthdate = "2023-01-13";
        $specimen13->sex_id = 1;
        $specimen13->color_id = 13;
        $specimen13->category_id = 1;
        $specimen13->breeder_id = 1;
        $specimen13->owner_id = 1;
        $specimen13->father_code = "EJE0009";
        $specimen13->mother_code = "EJE0010";
        $specimen13->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen13->save();

        $specimen14 = new Specimen();
        $specimen14->code = "EJE0014";
        $specimen14->registry = "REGISTRO_14";
        $specimen14->name = "EJEMPLAR_014";
        $specimen14->chip = "CHIP_14";
        $specimen14->birthdate = "2023-01-14";
        $specimen14->sex_id = 2;
        $specimen14->color_id = 14;
        $specimen14->category_id = 1;
        $specimen14->breeder_id = 2;
        $specimen14->owner_id = 2;
        $specimen14->father_code = "EJE0011";
        $specimen14->mother_code = "EJE0012";
        $specimen14->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen14->save();

        $specimen15 = new Specimen();
        $specimen15->code = "EJE0015";
        $specimen15->registry = "REGISTRO_15";
        $specimen15->name = "EJEMPLAR_015";
        $specimen15->chip = "CHIP_15";
        $specimen15->birthdate = "2023-01-15";
        $specimen15->sex_id = 1;
        $specimen15->color_id = 15;
        $specimen15->category_id = 1;
        $specimen15->breeder_id = 3;
        $specimen15->owner_id = 3;
        $specimen15->father_code = "EJE0013";
        $specimen15->mother_code = "EJE0014";
        $specimen15->notes = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
        $specimen15->save();





    }
}
