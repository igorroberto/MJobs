<?php

use Illuminate\Database\Seeder;

class carrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carros = [0 => ["nome" => "lixo"], 1 => ["nome" => "bom"] ];
        
        DB::table("Carros")->insert($carros);
    }
}
