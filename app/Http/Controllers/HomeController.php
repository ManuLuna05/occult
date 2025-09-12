<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $players = [
            [
                'number'  => 13,
                'name'    => 'Manu Moreno',
                'role'    => 'Portero',
                'photo'   => 'manu-moreno.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 1,
                'name'    => 'Atanasio',
                'role'    => 'Portero',
                'photo'   => 'player.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 31,
                'name'    => 'Adrián',
                'role'    => 'Defensa',
                'photo'   => 'adrian.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 99,
                'name'    => 'Álex (Castolo)',
                'role'    => 'Defensa',
                'photo'   => 'alex.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 22,
                'name'    => 'Manu',
                'role'    => 'Defensa',
                'photo'   => 'manu.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 3,
                'name'    => 'Charlie',
                'role'    => 'Defensa',
                'photo'   => 'charlie.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 2,
                'name'    => 'Marcos',
                'role'    => 'Defensa',
                'photo'   => 'marcos.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 8,
                'name'    => 'Chechu',
                'role'    => 'Defensa',
                'photo'   => 'chechu.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 6,
                'name'    => 'Unai',
                'role'    => 'Mediocentro',
                'photo'   => 'unai.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 18,
                'name'    => 'Antonio',
                'role'    => 'Mediocentro',
                'photo'   => 'antonio.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
                        [
                'number'  => 77,
                'name'    => 'Nacho',
                'role'    => 'Mediocentro',
                'photo'   => 'nacho.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            [
                'number'  => 80,
                'name'    => 'Bonilla',
                'role'    => 'Mediocentro',
                'photo'   => 'player.jpg',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,
            ],
            // ...más jugadores
        ];

        return view('inicio', ['players' => $players]);
    }
}
