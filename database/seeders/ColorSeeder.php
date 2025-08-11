<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $color01 = new Color();
        $color01->code = "COL001";
        $color01->description = "TORDILLO";
        $color01->save();

        $color02 = new Color();
        $color02->code = "COL002";
        $color02->description = "TORDILLO DUN";
        $color02->save();

        $color03 = new Color();
        $color03->code = "COL003";
        $color03->description = "PARDO  CLARO";
        $color03->save();

        $color04 = new Color();
        $color04->code = "COL004";
        $color04->description = "PARDO OBSCURO";
        $color04->save();

        $color05 = new Color();
        $color05->code = "COL005";
        $color05->description = "PARDO CLARO DUN";
        $color05->save();

        $color06 = new Color();
        $color06->code = "COL006";
        $color06->description = "PARDO OBSCURO DUN";
        $color06->save();

        $color07 = new Color();
        $color07->code = "COL007";
        $color07->description = "PARDO DUN";
        $color07->save();

        $color08 = new Color();
        $color08->code = "COL008";
        $color08->description = "NEGRO";
        $color08->save();

        $color09 = new Color();
        $color09->code = "COL009";
        $color09->description = "NEGRO GOLONDRINO";
        $color09->save();

        $color10 = new Color();
        $color10->code = "COL010";
        $color10->description = "NEGRO MOJINO";
        $color10->save();

        $color11 = new Color();
        $color11->code = "COL011";
        $color11->description = "BLANCO";
        $color11->save();

        $color12 = new Color();
        $color12->code = "COL012";
        $color12->description = "PINTO DE PARDO";
        $color12->save();

        $color13 = new Color();
        $color13->code = "COL013";
        $color13->description = "PINTO DE NEGRO";
        $color13->save();

        $color14 = new Color();
        $color14->code = "COL014";
        $color14->description = "PINTO DE ALAZAN";
        $color14->save();

        $color15 = new Color();
        $color15->code = "COL015";
        $color15->description = "ALAZAN";
        $color15->save();

        $color16 = new Color();
        $color16->code = "COL016";
        $color16->description = "ALAZAN DUN";
        $color16->save();

    }
}
