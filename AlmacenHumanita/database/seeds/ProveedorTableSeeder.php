<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $proveedor = [
        	[
        		'nombre' => 'ITES',
        		'nombre_contacto' => 'Juan Peres',
        		'email' => 'juan@eje.com',
        		'telefono' => '44213454875',
        		'RFC' => 'jafsu4353',
        		'direccion' => 'Colinas',
                'horario' => 'De 8 AM a 6 PM',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
        	],
        	        	[
        		'nombre' => 'SKAL',
        		'nombre_contacto' => 'Arturo Gonzáles',
        		'email' => 'art@eje.com',
        		'telefono' => '442658945',
        		'RFC' => '8ghf48dh',
        		'direccion' => 'Balaustradas',
                'horario' => 'De 8 AM a 6 PM',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
        	],
        	        	[
        		'nombre' => 'MVK',
        		'nombre_contacto' => 'Alan Kuri',
        		'email' => 'inpincurse@eje.com',
        		'telefono' => '44568784',
        		'RFC' => 'g78sfd8',
        		'direccion' => 'Bosuqes',
                'horario' => 'De 8 AM a 6 PM',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
        	],
        	        	[
        		'nombre' => 'IYTE',
        		'nombre_contacto' => 'Carlos Ruíz',
        		'email' => 'kala@eje,com',
        		'telefono' => '4426589',
        		'RFC' => 'fugj7985',
        		'direccion' => 'Luis Vega',
                'horario' => 'De 8 AM a 6 PM',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
        	],
        	        	[
        		'nombre' => 'KALO',
        		'nombre_contacto' => 'Amelia Flores',
        		'email' => 'Ame@eje.com',
        		'telefono' => '448956231',
        		'RFC' => 'dg897hgf',
        		'direccion' => 'Palmas',
                'horario' => 'De 8 AM a 6 PM',
        		'created_at' => '2017-07-06 00:00:00',
        		'updated_at' => '2017-07-06 00:00:00',
        	],

           
            
        ];

        foreach ($proveedor as $key => $value) {
        	Proveedor::create($value);
        }
    }
}
