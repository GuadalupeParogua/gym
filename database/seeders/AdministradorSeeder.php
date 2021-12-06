<?php

namespace Database\Seeders;

use App\Models\administrador;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        administrador::create([
            'usuario'=>'parogua',
            'password'=>Hash::make('maria123')
        ]);
    }
}
