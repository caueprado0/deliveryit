<?php

use Illuminate\Database\Seeder;

class CorredoresProvasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            \CPrado\Models\Corredor::all()->random(5)->each(function ($corredor) {
                $prova = \CPrado\Models\ProvaCorrida::all()->random(1)->first();

                $corredorInscritoProva = \CPrado\Models\CorredorProva::where('corredor_id', $corredor->id)
                    ->where('prova_id', $prova->id)
                    ->first();

                if ($corredorInscritoProva === null) {
                    DB::table('corredores_provas')
                    ->insert([
                        'corredor_id' => $corredor->id,
                        'prova_id' => $prova->id,
                        'created_at' => \Carbon\Carbon::now(),
                        'updated_at' => \Carbon\Carbon::now(),
                    ]);
                }
            });
        }

    }
}
