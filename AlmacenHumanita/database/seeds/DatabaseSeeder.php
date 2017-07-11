<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$this->call(PermissionTableSeeder::class);
        $this->call(MaterialPapeleraTableSeeder::class);
        $this->call(MaterialClinicaTableSeeder::class);
        $this->call(ProveedorTableSeeder::class);

    }
}
