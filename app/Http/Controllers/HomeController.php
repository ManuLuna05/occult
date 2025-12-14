<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $players = [
            [
                'number'  => 8,
                'name'    => 'Chechu',
                'role'    => 'Lateral',
                'photo'   => 'chechu.jpg',
                'minutes' => 340,
                'goals'   => 5,
                'matches' => 8,
            ],
            [
                'number'  => 6,
                'name'    => 'Unai',
                'role'    => 'Mediocentro',
                'photo'   => 'unai.jpg',
                'minutes' => 390,
                'goals'   => 11,
                'matches' => 10,
            ],
            [
                'number'  => 18,
                'name'    => 'Antonio',
                'role'    => 'Mediocentro',
                'photo'   => 'antonio.jpg',
                'minutes' => 440,
                'goals'   => 10,
                'matches' => 11,
            ],
            // ...más jugadores
        ];

        // ✔ AÑADIR ESTO
        $matches = $this->getMatches();
        $matchesByMonth = collect($matches)->groupBy('month');

        return view('inicio', compact('players', 'matches', 'matchesByMonth'));
    }

    public function plantilla()
    {
        $players = [
            [
                'number'  => 13,
                'name'    => 'Manu Moreno',
                'role'    => 'Portero',
                'photo'   => 'manu-moreno.jpg',
                'minutes' => 557,
                'goals'   => 0,
                'matches' => 11,
            ],
            [
                'number'  => 31,
                'name'    => 'Adrián',
                'role'    => 'Defensa',
                'photo'   => 'adrian.jpg',
                'minutes' => 400,
                'goals'   => 2,
                'matches' => 10,
            ],
                        [
                'number'  => 14,
                'name'    => 'Rafa',
                'role'    => 'Defensa',
                'photo'   => 'rafa.jpg',
                'minutes' => 270,
                'goals'   => 0,
                'matches' => 6,
            ],
            [
                'number'  => 99,
                'name'    => 'Álex (Castolo)',
                'role'    => 'Lateral',
                'photo'   => 'alex.jpg',
                'minutes' => 135,
                'goals'   => 0,
                'matches' => 5,
            ],
            [
                'number'  => 10,
                'name'    => 'Gonzalo',
                'role'    => 'Lateral',
                'photo'   => 'gonzalo.jpg',
                'minutes' => 40,
                'goals'   => 0,
                'matches' => 2,
            ],
            [
                'number'  => 33,
                'name'    => 'Dani',
                'role'    => 'Defensa',
                'photo'   => 'dani.jpg',
                'minutes' => 110,
                'goals'   => 2,
                'matches' => 5,
            ],
            [
                'number'  => 22,
                'name'    => 'Manu',
                'role'    => 'Lateral',
                'photo'   => 'manu.jpg',
                'minutes' => 10,
                'goals'   => 0,
                'matches' => 1,
            ],
                        [
                'number'  => 4,
                'name'    => 'Alberto',
                'role'    => 'Defensa',
                'photo'   => 'alberto.jpg',
                'minutes' => 80,
                'goals'   => 0,
                'matches' => 3,
            ],
            [
                'number'  => 3,
                'name'    => 'Charlie',
                'role'    => 'Defensa',
                'photo'   => 'charlie.jpg',
                'minutes' => 70,
                'goals'   => 0,
                'matches' => 4,
            ],
            [
                'number'  => 2,
                'name'    => 'Marcos',
                'role'    => 'Defensa',
                'photo'   => 'marcos.jpg',
                'minutes' => 230,
                'goals'   => 3,
                'matches' => 10,
            ],
            [
                'number'  => 8,
                'name'    => 'Chechu',
                'role'    => 'Lateral',
                'photo'   => 'chechu.jpg',
                'minutes' => 340,
                'goals'   => 5,
                'matches' => 8,
            ],
            [
                'number'  => 6,
                'name'    => 'Unai',
                'role'    => 'Mediocentro',
                'photo'   => 'unai.jpg',
                'minutes' => 390,
                'goals'   => 11,
                'matches' => 10,
            ],
            [
                'number'  => 17,
                'name'    => 'David',
                'role'    => 'Mediocentro',
                'photo'   => 'david.png',
                'minutes' => 50,
                'goals'   => 0,
                'matches' => 2,
            ],
            [
                'number'  => 18,
                'name'    => 'Antonio',
                'role'    => 'Mediocentro',
                'photo'   => 'antonio.jpg',
                'minutes' => 440,
                'goals'   => 10,
                'matches' => 11,
            ],
                        [
                'number'  => 77,
                'name'    => 'Nacho',
                'role'    => 'Mediocentro',
                'photo'   => 'nacho.jpg',
                'minutes' => 300,
                'goals'   => 8,
                'matches' => 8,
            ],
            [
                'number'  => 80,
                'name'    => 'Bonilla',
                'role'    => 'Mediocentro',
                'photo'   => 'bonilla.jpg',
                'minutes' => 210,
                'goals'   => 6,
                'matches' => 6,
            ],
                        [
                'number'  => 9,
                'name'    => 'Hugo (Sebi)',
                'role'    => 'Delantero',
                'photo'   => 'hugo.jpg',
                'minutes' => 280,
                'goals'   => 16,
                'matches' => 8,
            ],
            [
                'number'  => 7,
                'name'    => 'Tom Fox',
                'role'    => 'Delantero',
                'photo'   => 'tom.jpg',
                'minutes' => 145,
                'goals'   => 1,
                'matches' => 6,
            ],
                        [
                'number'  => 95,
                'name'    => 'Juanpe',
                'role'    => 'Delantero',
                'photo'   => 'jp.jpg',
                'minutes' => 90,
                'goals'   => 2,
                'matches' => 3,
            ],
            // ...más jugadores
        ];

        return view('plantilla', compact('players'));
    }

    public function calendario()
    {
        $matches = $this->getMatches();
        $matchesByMonth = collect($matches)->groupBy('month');

        return view('calendario', compact('matchesByMonth'));
    }

    private function getMatches()
    {
        return [

            // ===================== AGOSTO =====================
            [
                'month' => 'Agosto',
                'competition' => 'AMISTOSO',
                'date_text' => 'lun, 11 ago',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'Fútbol y Barro', 'logo' => 'images/escudos/futbolbarro.png'],
                'score' => [4, 4]
            ],
            [
                'month' => 'Agosto',
                'competition' => 'AMISTOSO',
                'date_text' => 'dom, 17 ago',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'Nueva Unión', 'logo' => 'images/escudos/nuevaunion.png'],
                'score' => [4, 7]
            ],

            // ===================== SEPTIEMBRE =====================
            [
                'month' => 'Septiembre',
                'competition' => 'AMISTOSO',
                'date_text' => 'sáb, 13 sept',
                'home' => ['name' => 'Mexicano', 'logo' => 'images/escudos/mexicano.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => [5, 3]
            ],

            [
                'month' => 'Septiembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J1',
                'date_text' => 'dom, 21 ago',
                'home' => ['name' => 'Nueva Unión', 'logo' => 'images/escudos/nuevaunion.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => [1, 3]
            ],

            [
                'month' => 'Septiembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J2',
                'date_text' => 'vie, 26 sept',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'Soltería FC', 'logo' => 'images/escudos/solteria.png'],
                'score' => [6, 4]
            ],

            // ===================== OCTUBRE =====================
            [
                'month' => 'Octubre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J3',
                'date_text' => 'dom, 5 oct',
                'home' => ['name' => 'Mexicano', 'logo' => 'images/escudos/mexicano.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => [3, 4]
            ],

            [
                'month' => 'Octubre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J4',
                'date_text' => 'vie, 10 oct',
                'home' => ['name' => 'Coto M.M', 'logo' => 'images/escudos/coto.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => [2, 3]
            ],

            [
                'month' => 'Octubre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J5',
                'date_text' => 'dom, 19 oct',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'Jaimitos', 'logo' => 'images/escudos/jaimitos.png'],
                'score' => [22, 0]
            ],

            // ===================== NOVIEMBRE =====================
            [
                'month' => 'Noviembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J6',
                'date_text' => 'dom, 02 nov',
                'home' => ['name' => 'Goryneta FC', 'logo' => 'images/escudos/gorineta.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => [2, 4]
            ],

            [
                'month' => 'Noviembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J7',
                'date_text' => 'dom, 09 nov',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'Arcangel CF', 'logo' => 'images/escudos/arcangel.png'],
                'score' => [7, 1]
            ],

            [
                'month' => 'Noviembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J9',
                'date_text' => 'dom, 24 nov',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'Cachorros', 'logo' => 'images/escudos/cachorros.png'],
                'score' => [2, 4]
            ],

            [
                'month' => 'Noviembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J10',
                'date_text' => 'vie, 28 nov',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'Titanes del Sur', 'logo' => 'images/escudos/titanes.png'],
                'score' => [4, 5]
            ],

            // ===================== DICIEMBRE =====================
            [
                'month' => 'Diciembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J8 (Aplazado)',
                'date_text' => 'dom, 07 dic',
                'home' => ['name' => 'Marketing In.', 'logo' => 'images/escudos/marketing.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => [3, 8]
            ],

            [
                'month' => 'Diciembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J11',
                'date_text' => 'dom, 14 dic',
                'home' => ['name' => 'citylogin', 'logo' => 'images/escudos/city.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => [3, 5]
            ],

            [
                'month' => 'Diciembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J12',
                'date_text' => '—',
                'home' => ['name' => 'New Avanti', 'logo' => 'images/escudos/avanti.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => null
            ],

            [
                'month' => 'Diciembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J13',
                'date_text' => '—',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'James Webb', 'logo' => 'images/escudos/james.png'],
                'score' => null
            ],
        ];
    }
}
