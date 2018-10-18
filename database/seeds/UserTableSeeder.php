<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creacion de Usuarios con respectivos roles

        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->nombres = 'Admin';
        $user->apellidos = 'Test';
        $user->email = 'admin@example.com';
        $user->e_civil = 'Soltero';
        $user->n_documento = '11111';
        $user->n_celular = '300505000';
        $user->user_name = 'Administrador';
        $user->lugar_expedicion = 'Barranquilla';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->nombres = 'User';
        $user->apellidos = 'Test';
        $user->email = 'user@example.com';
        $user->e_civil = 'Soltero';
        $user->n_documento = '222222';
        $user->n_celular = '300505000';
        $user->user_name = 'Administrador';
        $user->lugar_expedicion = 'Barranquilla';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
        
    }
}
