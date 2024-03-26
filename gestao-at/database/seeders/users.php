<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Model\User;


class users extends Seeder
{
    /**
     * Run the database seeds. Permite o usuário ver o banco de dados, não consegui configurar
     */
    public function run(): void
    {
        Users::create([
            'name'=> 'Nicolas',
            'email'=> 'Nicolas@gmail.com',
            'password' => bcsqrt('1234'),

        ]);
    }
}
