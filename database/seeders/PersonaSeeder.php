<?php

namespace Database\Seeders;

use App\Models\persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       persona::create([
        'id'=>1,
        'ci'=>111111,
        'nombre'=> 'Juan',
        'apellido'=> 'Perez',
        'url_huella'=> "asdfghjkl",
        'tel'=>7777777,
        'email'=> 'juaperez@gmail.com',
        'foto'=>'estoEsUnaFoto.png',
       'fecha_naci'=>'2000-03-04',
        'genero'=>'M',
        'estado'=>1,
        'tipo'=>'A'
       ]);
    }
}
