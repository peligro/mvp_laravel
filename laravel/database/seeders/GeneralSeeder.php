<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Estados;
use App\Models\Modulos;
use App\Models\Perfiles;
use App\Models\PerfilesModulos;
use App\Models\Generos;
use App\Models\VariablesGlobales;
use App\Models\User;
use App\Models\UsersMetadata;
use App\Models\Paises;
class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estados::insert(
            [
            'id'=>1,
            'nombre' => "Activo"
            ] 
        );
        Estados::insert(
            [
            'id'=>2,
            'nombre' => "No Activo"
            ] 
        );
         //perfiles
         Perfiles::insert(
            [
            'id'=>1,
            'nombre' => "Administrador"
            ] 
        );
        Perfiles::insert(
            [
            'id'=>2,
            'nombre' => "Sin acceso"
            ] 
        );
        Modulos::insert(
            [
            'id'=>1,
            'nombre' => "Administración"
            ] 
        );
        Modulos::insert(
            [
            'id'=>2,
            'nombre' => "Módulos"
            ] 
        );
        Modulos::insert(
            [
            'id'=>3,
            'nombre' => "Perfiles"
            ] 
        );
        Modulos::insert(
            [
            'id'=>4,
            'nombre' => "Usuarios"
            ] 
        );
         //perfiles módulos
         $modulos=Modulos::orderBy('id', 'asc')->get();
         foreach($modulos as $modulo)
         {
             PerfilesModulos::insert(
                 [
                 'perfiles_id' => 1,
                 'modulos_id'=>$modulo->id
                 ] 
             );
         }
        //géneros
        Generos::insert(
            [
            'id'=>1,
            'nombre' => "Masculino"
            ] 
        );
        Generos::insert(
            [
            'id'=>2,
            'nombre' => "Fenemino"
            ] 
        );
        Generos::insert(
            [
            'id'=>3,
            'nombre' => "Otro"
            ] 
        );
        //países
        //géneros
        Paises::insert(
            [
            'id'=>1,
            'nombre' => "Chile"
            ] 
        );
        //variables globales
        VariablesGlobales::insert(
            [
            'id'=>1,
            'nombre' => "Base URL",
            'valor'=>'http://192.168.1.88:8080/'
            ] 
        );
         //usuarios
         User::insert(
            [
            'id'=>1,
            'name' => "César Cancino",
            'email'=>'yo@cesarcancino.com',
            'password'=>Hash::make('123456'),
            'created_at'=>date('Y-m-d H:i:s')
            ] 
        );
        UsersMetadata::insert(
            [
            'id'=>1,
            'users_id' => 1,
            'perfiles_id'=>1,
            'estados_id'=>1
            ] 
        );
    }
}
