<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $permission = [
        	[
        		'name' => 'admin-users',
        		'display_name' => 'Administrar Usuario',
        		'description' => 'Administra las Sucursales'
        	],
            [
                'name' => 'admin-admin',
                'display_name' => 'Administrar Super Admin',
                'description' => 'Administra al Administrador'
            ],
            [
                'name' => 'admin-admin-clinica',
                'display_name' => 'Administrar Administrador Clinica',
                'description' => 'Administra al Administrador Clinica'
            ],
            [
                'name' => 'admin-admin-papelera',
                'display_name' => 'Administrar Administrador papelera',
                'description' => 'Administra al Administrador papelera'
            ],
            [
                'name' => 'admin-clinica',
                'display_name' => 'Administrar Materiales Clinica',
                'description' => 'Administra los Materiales Clinicos'
            ],
            [
                'name' => 'admin-papelera',
                'display_name' => 'Administrar Materiales Papeleria',
                'description' => 'Administra los Materiales Papeleria'
            ],
            [
                'name' => 'admin-proveedores',
                'display_name' => 'Administrar Proveedores',
                'description' => 'Administra los Proveedores'
            ],
            [
                'name' => 'admin-sucrusal',
                'display_name' => 'Administrador de Sucursal',
                'description' => 'Administra su Sucursal'
            ],
            [
                'name' => 'admin-laboratorio',
                'display_name' => 'Administrador de Laboratorio',
                'description' => 'Administra su laboratorio'
            ],
            [
                'name' => 'drop-admin',
                'display_name' => 'Accesos Menu',
                'description' => 'Persmisos para ver los botones de administración en el menu'
            ],
            [
                'name' => 'admin-admin-laboratorio',
                'display_name' => 'Administrar cuenta de laboratorio',
                'description' => 'Permiso para editar el laboratorio'
            ]
            
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}

