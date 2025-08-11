<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sex;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sex01 = new Sex();
        $sex01->code = "M";
        $sex01->description = "MACHO";
        $sex01->save();
        
        $sex02 = new Sex();
        $sex02->code = "H";
        $sex02->description = "HEMBRA";
        $sex02->save();
        
    }
}
