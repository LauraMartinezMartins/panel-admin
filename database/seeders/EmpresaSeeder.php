<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empresas')->insert([
            'id'=> 1,
            'nombre' => 'Floristería Ramos',
            'cif_nif'=>'E80588825',
            'telefono'=>'000000000',
            'direccion'=>'Calle Flor, 1, Nicaragua',
            'codigo_postal'=>35246,
            'pais'=>'España',
        ]);
    }
}
