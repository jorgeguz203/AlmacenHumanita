<?php

use Illuminate\Database\Seeder;
use App\MaterialPapelera;

class MaterialPapeleraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $materialpapelera = [
        	[
        		'nombre' => 'papel',
        		'descripcion' => 'hojas blancas tamaño carta',
        		'maximo' => '1000',
        		'minimo' => '300',
        		'existencia' => '0',
        		'area' => 'impresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '12345',
        		'presentacion' => 'paquetes de 100',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
        	],
            [
                'nombre' => 'lápiz',
        		'descripcion' => 'lapices',
        		'maximo' => '100',
        		'minimo' => '30',
        		'existencia' => '50',
        		'area' => 'impresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '5783',
        		'presentacion' => 'paquetes de 10',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'pluma negra',
        		'descripcion' => '',
        		'maximo' => '500',
        		'minimo' => '100',
        		'existencia' => '300',
        		'area' => 'impresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '45574',
        		'presentacion' => 'paquetes de 5',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'trapeadores',
        		'descripcion' => '',
        		'maximo' => '20',
        		'minimo' => '5',
        		'existencia' => '8',
        		'area' => 'limpieza',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '85475',
        		'presentacion' => 'Viene en paquetes de 10',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'plumón',
        		'descripcion' => 'pulón negro',
        		'maximo' => '10',
        		'minimo' => '2',
        		'existencia' => '5',
        		'area' => 'impresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '849375',
        		'presentacion' => 'viene en paquetes de 5',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'computadora',
        		'descripcion' => 'computadora de escritorio',
        		'maximo' => '5',
        		'minimo' => '1',
        		'existencia' => '2',
        		'area' => 'impresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '734223',
        		'presentacion' => 'Venta individual',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'engrapadora',
        		'descripcion' => '',
        		'maximo' => '10',
        		'minimo' => '3',
        		'existencia' => '6',
        		'area' => 'impresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '77455',
        		'presentacion' => 'paquetes de 2',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'fomi',
        		'descripcion' => '',
        		'maximo' => '100',
        		'minimo' => '200',
        		'existencia' => '0',
        		'area' => 'impresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '156455',
        		'presentacion' => 'paquetes de 5',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'silicón',
        		'descripcion' => 'Barras de silicón',
        		'maximo' => '200',
        		'minimo' => '50',
        		'existencia' => '120',
        		'area' => 'immpresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '1548665',
        		'presentacion' => 'paquetes de 10',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'sobres',
        		'descripcion' => 'sobres tamaño carta',
        		'maximo' => '500',
        		'minimo' => '10',
        		'existencia' => '300',
        		'area' => 'impresos',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '415264',
        		'presentacion' => 'paquetes de 50',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ]
            
        ];

        foreach ($materialpapelera as $key => $value) {
        	MaterialPapelera::create($value);
        }
    }

}

