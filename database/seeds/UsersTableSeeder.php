<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Creacion del Administrador del sistema 
      $AdminU = User::create([
              'name' => 'admin',
              'email' => 'admin@admin.com',
              'password' => 'administrador',
            ]);

      //Creacion del rol Administrador
      $adminR = Role::create([
          'name' => 'admin',
          'display_name' => 'Administrador del sistema',
          'description' => 'Administrador del sistema en general'
      ]);


      //Creacion del rol de usuario 
      $userR = Role::create([
          'name' => 'user',
          'display_name' => 'Usuario independiente',
          'description' => 'Usuario que no pertenece al sistema'
      ]);


      //Aqui se le asigna al usuario administrador el rol de administrador, con la funcion de entrust attachRole
      $AdminU->attachRole($adminR);

    }
}
