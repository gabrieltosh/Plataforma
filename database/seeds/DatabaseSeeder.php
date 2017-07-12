<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CarrerasSeed::class);
    	$this->call(SeedUsuario::class);
        $this->call(SeedSemestre::class);
    	$this->call(SeedMateria::class);
    }
}
