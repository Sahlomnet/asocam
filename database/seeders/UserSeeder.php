<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user01 = new User();
        $user01->name = "Benjamín Sahagún Lomelí";
        $user01->email = "benjamin@sahlom.com";
        $user01->password = bcrypt("Sahlom*2014.");
        $user01->save();

        $user02 = new User();
        $user02->name = "Salvador Morales Lomelí";
        $user02->email = "moraleslomeli@hotmail.com";
        $user02->password = bcrypt("Asocam");
        $user02->save();
    }
}
