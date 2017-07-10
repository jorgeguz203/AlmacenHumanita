<?php

use Illuminate\Database\Seeder;
use App\MaterialClinica;

class MaterialClinicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materialclinica = [
        	[
        		'nombre' => 'Prueba de embarazo',
        		'descripcion' => 'Prueba de embarazo royale',
        		'maximo' => '100',
        		'minimo' => '50',
        		'existencia' => '75',
        		'area' => 'pediatría',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '78976',
        		'presentacion' => 'Viene en paquetes de 10 piezas',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
        	],
            [
                'nombre' => 'Micoscopio',
        		'descripcion' => 'Microscopio de 100%',
        		'maximo' => '5',
        		'minimo' => '1',
        		'existencia' => '3',
        		'area' => 'biología',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '29304',
        		'presentacion' => 'Se compró individualmente',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'Microcentrífuga',
        		'descripcion' => 'Microcentrífuga especial',
        		'maximo' => '5',
        		'minimo' => '1',
        		'existencia' => '2',
        		'area' => 'Microbiología',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '84758',
        		'presentacion' => 'Se compró individualmente',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'Embudo de Separación',
        		'descripcion' => 'Empudo de Separación extendido',
        		'maximo' => '10',
        		'minimo' => '3',
        		'existencia' => '5',
        		'area' => '',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '85732',
        		'presentacion' => 'Vienen en paquetes de 5 piezas',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'Balón de Destilación',
        		'descripcion' => 'Balón de Destilación de 20ml',
        		'maximo' => '10',
        		'minimo' => '3',
        		'existencia' => '4',
        		'area' => 'Cardeología',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'piezas',
        		'numero_referencia' => '54893',
        		'presentacion' => 'Viene en paquetes de 3 piezas',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'Tubos de ensayo',
        		'descripcion' => 'Tubos de ensayo de 10 ml',
        		'maximo' => '50',
        		'minimo' => '10',
        		'existencia' => '20',
        		'area' => 'Microbiología',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '56432',
        		'presentacion' => 'Viene en cajas de 20 piezas',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'Agua Destilada',
        		'descripcion' => 'Agua Destilada de 5 litros',
        		'maximo' => '100',
        		'minimo' => '20',
        		'existencia' => '56',
        		'area' => 'Microbiología',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'litros',
        		'numero_referencia' => '21948',
        		'presentacion' => 'viene en garrafas de 1 litro',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'Termómetro',
        		'descripcion' => 'Termómetro de 10 cm',
        		'maximo' => '10',
        		'minimo' => '4',
        		'existencia' => '2',
        		'area' => 'Cardeología',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '475839',
        		'presentacion' => 'viene en paquetes de 5',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'Vaso de precipitados',
        		'descripcion' => 'Vaso de precipitados de 30 ml',
        		'maximo' => '20',
        		'minimo' => '10',
        		'existencia' => '17',
        		'area' => 'Microbiología',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'pieza',
        		'numero_referencia' => '64738',
        		'presentacion' => 'Viene en cajas de 5 piezas',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ],
            [
                'nombre' => 'Hieso',
        		'descripcion' => 'Hieso para soporte',
        		'maximo' => '20',
        		'minimo' => '10',
        		'existencia' => '28',
        		'area' => 'Laboratorios',
        		'fecha_caducidad' => '2017-07-06 00:00:00',
        		'unidad_medida' => 'kg',
        		'numero_referencia' => '489212',
        		'presentacion' => 'viene en bolsas de 5 kg',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
            ]
            
        ];

        foreach ($materialclinica as $key => $value) {
        	MaterialClinica::create($value);
        }
    }
}
