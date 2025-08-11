<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category01 = new Category();
        $category01->code = "CAT001";
        $category01->description = "ASNALES";
        $category01->save();

        $category02 = new Category();
        $category02->code = "CAT002";
        $category02->description = "MULARES";
        $category02->save();

        $category03 = new Category();
        $category03->code = "CAT003";
        $category03->description = "EQUINOS";
        $category03->save();

        $category04 = new Category();
        $category04->code = "CAT004";
        $category04->description = "MULAR ROMA";
        $category04->save();

        $category05 = new Category();
        $category05->code = "CAT005";
        $category05->description = "MULAR BURDEGANO";
        $category05->save();

    }
}
