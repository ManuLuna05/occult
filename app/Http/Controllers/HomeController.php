<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Jugadores desde el mismo sitio que plantilla (ya incluyen slug)
        $playersAll = $this->getPlayers();

        $featured = ['chechu', 'unai', 'antonio'];
        $players = collect($playersAll)->whereIn('slug', $featured)->values()->all();

        $matches = $this->getMatches();
        $matchesByMonth = collect($matches)->groupBy('month');

        return view('inicio', compact('players', 'matches', 'matchesByMonth'));
    }


    public function plantilla()
    {
        $players = $this->getPlayers();

        $playersByRole = collect($players)->groupBy('role');

        return view('plantilla', compact('players', 'playersByRole'));
    }



    private function getPlayers()
    {
        return [
            [
                'slug'    => 'manu-moreno',
                'number'  => 13,
                'name'    => 'Manu Moreno',
                'role'    => 'Portero',
                'photo'   => 'manu-moreno.jpg',
                'photo_full' => 'manu-moreno-full.png',
                'minutes' => 657,
                'goals'   => 0,
                'matches' => 13,

                // NUEVOS (ficha)
                'birth'   => '1999-04-29',
                'age'     => 26,
                'height'  => 180,
                'weight'  => 76,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Portero con grandes reflejos y una notable capacidad de mando en el área, aporta seguridad y confianza a la línea defensiva. Destaca especialmente por su agilidad bajo palos, su rapidez de reacción en situaciones de uno contra uno y su reconocida habilidad para detener lanzamientos de penalti. A lo largo de la temporada ha sido una pieza clave en varios encuentros de máxima exigencia, respondiendo con solvencia en momentos de alta presión. Su regularidad y constancia le han permitido situarse como uno de los guardametas más destacados de la competición liguera, figurando entre los porteros con mayor número de tiros detenidos y consolidándose como un referente en su posición. ',

                // Stats extendidas (las que quieras usar en la ficha)
                'stats' => [
                    'matches' => 13,
                    'minutes' => 657,
                    'goals'   => 0,
                    'assists' => 1,
                    'saves'   => 40,
                    'clean_sheets' => 2,
                ],
            ],
            [
                'slug'    => 'adrian',
                'number'  => 31,
                'name'    => 'Adrián',
                'role'    => 'Defensa',
                'photo'   => 'adrian.jpg',
                'photo_full' => 'adri-full.png',
                'minutes' => 440,
                'goals'   => 2,
                'matches' => 11,

                'birth'   => '1999-07-15',
                'age'     => 26,
                'height'  => 188,
                'weight'  => 83,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Central sólido y contundente, destaca por su capacidad para anticiparse a las jugadas y su eficacia en el juego aéreo. Su presencia física y su liderazgo en la zaga aportan seguridad al equipo, siendo un pilar fundamental en la defensa. A lo largo de la temporada ha demostrado una gran regularidad, contribuyendo tanto en tareas defensivas como ofensivas, sumando varios goles importantes en jugadas a balón parado. Su compromiso y profesionalidad le han convertido en un referente dentro del vestuario, siendo respetado tanto por sus compañeros como por sus rivales.',

                'stats' => [
                    'matches' => 11,
                    'minutes' => 440,
                    'goals'   => 2,
                    'assists' => 1,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'rafa',
                'number'  => 14,
                'name'    => 'Rafa',
                'role'    => 'Defensa',
                'photo'   => 'rafa.jpg',
                'photo_full' => 'rafa-full.png',
                'minutes' => 270,
                'goals'   => 0,
                'matches' => 6,

                'birth'   => '2005-10-04',
                'age'     => 20,
                'height'  => 175,
                'weight'  => 97,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Central firme y seguro, destaca por su capacidad para leer el juego y su habilidad para interceptar balones. Su velocidad y fuerza física le permiten cubrir grandes áreas del campo, siendo un defensor versátil que puede adaptarse a diferentes situaciones tácticas. A lo largo de la temporada ha mostrado una gran progresión, consolidándose como un jugador clave en la defensa del equipo. Su compromiso y dedicación le han llevado a mejorar constantemente, ganándose la confianza del cuerpo técnico y de sus compañeros.',

                'stats' => [
                    'matches' => 6,
                    'minutes' => 270,
                    'goals'   => 0,
                    'assists' => 0,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'alex-castolo',
                'number'  => 99,
                'name'    => 'Álex',
                'role'    => 'Lateral',
                'photo'   => 'alex.jpg',
                'photo_full' => 'alex-full.png',
                'minutes' => 135,
                'goals'   => 0,
                'matches' => 5,

                'birth'   => '1999-09-12',
                'age'     => 26,
                'height'  => 179,
                'weight'  => 72,
                'country' => 'España',
                'foot'    => 'Izquierda',
                'bio'     => 'Lateral ofensivo y dinámico, destaca por su capacidad para incorporarse al ataque y su precisión en los centros. Su velocidad y resistencia le permiten recorrer toda la banda, siendo un jugador clave en la creación de oportunidades de gol. A lo largo de la temporada ha demostrado una gran regularidad, aportando asistencias importantes y contribuyendo en defensa con su entrega y sacrificio. Su versatilidad le permite adaptarse a diferentes roles dentro del equipo, siendo una pieza fundamental en el esquema táctico del entrenador.',

                'stats' => [
                    'matches' => 5,
                    'minutes' => 135,
                    'goals'   => 0,
                    'assists' => 1,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'gonzalo',
                'number'  => 10,
                'name'    => 'Gonzalo',
                'role'    => 'Lateral',
                'photo'   => 'gonzalo.jpg',
                'photo_full' => 'gonzalo-full.png',
                'minutes' => 40,
                'goals'   => 0,
                'matches' => 2,

                'birth'   => '2005-04-23',
                'age'     => 20,
                'height'  => 180,
                'weight'  => 73,
                'country' => 'España',
                'foot'    => 'Izquierda',
                'bio'     => 'Lateral joven y prometedor, destaca por su capacidad para sumarse al ataque y su habilidad para recuperar balones. Su velocidad y técnica le permiten desenvolverse con soltura en ambas fases del juego, siendo un jugador versátil que puede adaptarse a diferentes posiciones en la defensa. A lo largo de la temporada ha mostrado una gran progresión, ganándose la confianza del cuerpo técnico gracias a su entrega y dedicación en los partidos.',

                'stats' => [
                    'matches' => 2,
                    'minutes' => 40,
                    'goals'   => 0,
                    'assists' => 0,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'dani',
                'number'  => 33,
                'name'    => 'Dani',
                'role'    => 'Defensa',
                'photo'   => 'dani.jpg',
                'photo_full' => 'dani-full.png',
                'minutes' => 140,
                'goals'   => 2,
                'matches' => 6,

                'birth'   => '2005-11-04',
                'age'     => 20,
                'height'  => 185,
                'weight'  => 90,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Central diestro, contundente en el uno contra uno y con una buena salida de balón que le permite iniciar el juego desde la línea defensiva con criterio y seguridad. Destaca por su capacidad para leer el juego y anticiparse a las acciones del rival, lo que le convierte en un defensor fiable y difícil de superar. A lo largo de la temporada ha mostrado una clara progresión tanto a nivel defensivo como ofensivo, aportando goles importantes en acciones a balón parado gracias a su potencia y buen juego aéreo. Su compromiso, regularidad y profesionalidad dentro del terreno de juego le han consolidado como una pieza clave en el esquema del equipo y un jugador de gran valor para el colectivo.',

                'stats' => [
                    'matches' => 6,
                    'minutes' => 140,
                    'goals'   => 2,
                    'assists' => 0,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'manu',
                'number'  => 22,
                'name'    => 'Manu',
                'role'    => 'Lateral',
                'photo'   => 'manu.jpg',
                'photo_full' => 'manu-full.png',
                'minutes' => 10,
                'goals'   => 0,
                'matches' => 1,

                'birth'   => '2005-08-29',
                'age'     => 20,
                'height'  => 192,
                'weight'  => 94,
                'country' => 'España',
                'foot'    => 'Izquierda',
                'bio'     => 'Lateral zurdo, con gran proyección defensiva y capacidad para incorporarse en el ataque aéreo gracias a su altura y buen salto. Destaca por su solidez defensiva, su capacidad para realizar coberturas efectivas y su habilidad para interceptar balones, lo que le convierte en un defensor difícil de superar. A lo largo de la temporada ha mostrado una gran progresión, ganándose la confianza del cuerpo técnico gracias a su entrega y dedicación en los entrenamientos y partidos.',

                'stats' => [
                    'matches' => 1,
                    'minutes' => 10,
                    'goals'   => 0,
                    'assists' => 1,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'alberto',
                'number'  => 4,
                'name'    => 'Alberto',
                'role'    => 'Defensa',
                'photo'   => 'alberto.jpg',
                'photo_full' => 'alberto-full.png',
                'minutes' => 110,
                'goals'   => 0,
                'matches' => 4,

                'birth'   => '2005-04-06',
                'age'     => 20,
                'height'  => 181,
                'weight'  => 75,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Central sólido y fiable, sobresale por su inteligencia táctica y su capacidad para anticiparse a las acciones del rival mediante una correcta lectura del juego. Combina velocidad y potencia física, lo que le permite abarcar amplias zonas del campo y responder con solvencia en distintas situaciones defensivas. A lo largo de la temporada ha experimentado una notable evolución en su rendimiento, afianzándose como una pieza importante en la zaga del equipo. Su actitud, constancia y compromiso diario le han permitido crecer de forma continuada y ganarse la confianza tanto del cuerpo técnico como del vestuario.',

                'stats' => [
                    'matches' => 4,
                    'minutes' => 110,
                    'goals'   => 0,
                    'assists' => 0,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'cano',
                'number'  => 11,
                'name'    => 'Cano',
                'role'    => 'Defensa',
                'photo'   => 'cano.jpeg',
                'photo_full' => 'cano-full.png',
                'minutes' => 0,
                'goals'   => 0,
                'matches' => 0,

                'birth'   => '2005-08-29',
                'age'     => 20,
                'height'  => 182,
                'weight'  => 77,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Central con capacidad de mediocentro, destaca por su buen posicionamiento y su habilidad para distribuir el balón desde la defensa. Su inteligencia táctica y su capacidad para anticiparse a las jugadas le permiten cortar numerosas acciones ofensivas, aportando equilibrio al equipo. A lo largo de la temporada ha mostrado una gran progresión en su rendimiento, ganándose la confianza del cuerpo técnico gracias a su compromiso, esfuerzo diario y dedicación tanto en los entrenamientos como en la competición.',

                'stats' => [
                    'matches' => 0,
                    'minutes' => 0,
                    'goals'   => 0,
                    'assists' => 0,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'marcos',
                'number'  => 2,
                'name'    => 'Marcos',
                'role'    => 'Defensa',
                'photo'   => 'marcos.jpg',
                'photo_full' => 'marcos-full.png',
                'minutes' => 260,
                'goals'   => 3,
                'matches' => 11,

                'birth'   => '2005-01-29',
                'age'     => 20,
                'height'  => 182,
                'weight'  => 83,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Central versátil y completo con capacidad de delantero gracias al cuerpeo físico y buena definición de cara a portería. Destaca por su inteligencia táctica, su capacidad para anticiparse a las jugadas y su eficacia en el juego aéreo, tanto en defensa como en ataque. A lo largo de la temporada ha demostrado una gran regularidad, contribuyendo con goles importantes en jugadas a balón parado y siendo un pilar fundamental en la zaga del equipo. Su compromiso, profesionalidad y liderazgo le han convertido en un referente dentro del vestuario, ganándose el respeto y la admiración de sus compañeros y rivales.',

                'stats' => [
                    'matches' => 11,
                    'minutes' => 260,
                    'goals'   => 3,
                    'assists' => 0,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'chechu',
                'number'  => 8,
                'name'    => 'Chechu',
                'role'    => 'Lateral',
                'photo'   => 'chechu.jpg',
                'photo_full' => 'chechu-full.png',
                'minutes' => 390,
                'goals'   => 5,
                'matches' => 9,

                'birth'   => '2005-12-10',
                'age'     => 20,
                'height'  => 180,
                'weight'  => 75,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Lateral ofensivo y dinámico, destaca por su capacidad para incorporarse al ataque y su precisión en los centros. Su velocidad y resistencia le permiten recorrer toda la banda, siendo un jugador clave en la creación de oportunidades de gol. A lo largo de la temporada ha demostrado una gran regularidad, aportando asistencias importantes y contribuyendo en defensa con su entrega y sacrificio. Su versatilidad le permite adaptarse a diferentes roles dentro del equipo, siendo una pieza fundamental en el esquema táctico del entrenador.',

                'stats' => [
                    'matches' => 9,
                    'minutes' => 390,
                    'goals'   => 5,
                    'assists' => 12,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'unai',
                'number'  => 6,
                'name'    => 'Unai',
                'role'    => 'Mediocentro',
                'photo'      => 'unai.jpg',      // la de la card
                'photo_full' => 'unai-full.png',
                'minutes' => 480,
                'goals'   => 12,
                'matches' => 12,

                'birth'   => '2005-04-19',
                'age'     => 20,
                'height'  => 173,
                'weight'  => 76,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Mediocentro creativo y con gran visión de juego, destaca por su capacidad para distribuir el balón y generar oportunidades de gol para sus compañeros. Su técnica depurada y su inteligencia táctica le permiten controlar el ritmo del partido desde el centro del campo, siendo un jugador clave en la transición entre defensa y ataque. A lo largo de la temporada ha demostrado una gran regularidad, contribuyendo con goles y asistencias decisivas que han sido fundamentales para el éxito del equipo. Su compromiso, profesionalidad y liderazgo le han convertido en un referente dentro del vestuario, ganándose el respeto y la admiración de sus compañeros y rivales.',

                'stats' => [
                    'matches' => 12,
                    'minutes' => 480,
                    'goals'   => 12,
                    'assists' => 7,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'david',
                'number'  => 17,
                'name'    => 'David',
                'role'    => 'Mediocentro',
                'photo'   => 'david.png',
                'photo_full' => 'david-full.png',
                'minutes' => 50,
                'goals'   => 0,
                'matches' => 2,

                'birth'   => '2006-03-12',
                'age'     => 19,
                'height'  => 176,
                'weight'  => 67,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Mediocentro todocampista, destaca por su capacidad para recuperar balones y su visión de juego para distribuir el balón con precisión. Su inteligencia táctica y su resistencia física le permiten desempeñar un papel fundamental en el centro del campo, siendo un jugador clave en la transición entre defensa y ataque. A lo largo de la temporada ha mostrado una gran progresión, ganándose la confianza del cuerpo técnico gracias a su entrega y dedicación en los entrenamientos y partidos.',

                'stats' => [
                    'matches' => 2,
                    'minutes' => 50,
                    'goals'   => 0,
                    'assists' => 0,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'antonio',
                'number'  => 18,
                'name'    => 'Antonio',
                'role'    => 'Mediocentro',
                'photo'   => 'antonio.jpg',
                'photo_full' => 'antonio-full.png',
                'minutes' => 530,
                'goals'   => 12,
                'matches' => 13,

                'birth'   => '2005-01-16',
                'age'     => 20,
                'height'  => 177,
                'weight'  => 69,
                'country' => 'España',
                'foot'    => 'Izquierda',
                'bio'     => 'Mediocentro ofensivo y creativo, destaca por su visión de juego y su capacidad para generar oportunidades de gol. Su técnica depurada y su habilidad para encontrar espacios en la defensa rival le convierten en un jugador clave en la creación de juego del equipo. A lo largo de la temporada ha demostrado una gran regularidad, contribuyendo con goles y asistencias decisivas que han sido fundamentales para el éxito del equipo. Su compromiso, profesionalidad y liderazgo le han convertido en un referente dentro del vestuario, ganándose el respeto y la admiración de sus compañeros y rivales.',

                'stats' => [
                    'matches' => 13,
                    'minutes' => 530,
                    'goals'   => 12,
                    'assists' => 9,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'nacho',
                'number'  => 77,
                'name'    => 'Nacho',
                'role'    => 'Mediocentro',
                'photo'   => 'nacho.jpg',
                'photo_full' => 'nacho-full.png',
                'minutes' => 400,
                'goals'   => 8,
                'matches' => 10,

                'birth'   => '2005-04-04',
                'age'     => 20,
                'height'  => 177,
                'weight'  => 69,
                'country' => 'España',
                'foot'    => 'Izquierda',
                'bio'     => 'Mediocentro defensivo que sobresale por su capacidad para recuperar balones y por su inteligencia táctica a la hora de organizar y distribuir el juego desde el centro del campo. Su buen posicionamiento y lectura de las jugadas le permiten anticiparse al rival y cortar numerosas acciones ofensivas, aportando equilibrio al equipo. Destaca también por su resistencia física y su constancia durante los partidos, siendo una pieza fundamental en la transición entre defensa y ataque. A lo largo de la temporada ha experimentado una notable progresión en su rendimiento, ganándose la confianza del cuerpo técnico gracias a su compromiso, esfuerzo diario y dedicación tanto en los entrenamientos como en la competición.',

                'stats' => [
                    'matches' => 10,
                    'minutes' => 400,
                    'goals'   => 8,
                    'assists' => 0,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'bonilla',
                'number'  => 80,
                'name'    => 'Bonilla',
                'role'    => 'Mediocentro',
                'photo'   => 'bonilla.jpg',
                'photo_full' => 'bonilla-full.png',
                'minutes' => 310,
                'goals'   => 8,
                'matches' => 8,

                'birth'   => '2005-02-22',
                'age'     => 20,
                'height'  => 178,
                'weight'  => 77,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Mediocentro ofensivo, destaca por su potencia de tiro y su capacidad para llegar desde segunda línea al área rival. Su técnica depurada y su visión de juego le permiten generar peligro en ataque, siendo un jugador clave en la creación de oportunidades de gol. A lo largo de la temporada ha demostrado una gran regularidad, contribuyendo con goles y asistencias decisivas que han sido fundamentales para el éxito del equipo. Su compromiso, profesionalidad y liderazgo le han convertido en un referente dentro del vestuario, ganándose el respeto y la admiración de sus compañeros y rivales.',

                'stats' => [
                    'matches' => 8,
                    'minutes' => 310,
                    'goals'   => 8,
                    'assists' => 4,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'hugo-sebi',
                'number'  => 9,
                'name'    => 'Hugo (Sebi)',
                'role'    => 'Delantero',
                'photo'   => 'hugo.jpg',
                'photo_full' => 'hugo-full.png',
                'minutes' => 320,
                'goals'   => 16,
                'matches' => 9,

                'birth'   => '2005-12-13',
                'age'     => 20,
                'height'  => 188,
                'weight'  => 85,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Delantero potente y goleador, destaca por su capacidad para definir con precisión en el área rival. Su fuerza física y su habilidad para desmarcarse le convierten en un jugador difícil de defender, siendo una amenaza constante para las defensas rivales. A lo largo de la temporada ha demostrado una gran regularidad, contribuyendo con goles decisivos que han sido fundamentales para el éxito del equipo. Su compromiso, profesionalidad y liderazgo le han convertido en un referente dentro del vestuario, ganándose el respeto y la admiración de sus compañeros y rivales.',

                'stats' => [
                    'matches' => 9,
                    'minutes' => 320,
                    'goals'   => 16,
                    'assists' => 3,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'tom-fox',
                'number'  => 7,
                'name'    => 'Tom Fox',
                'role'    => 'Delantero',
                'photo'   => 'tom.jpg',
                'photo_full' => 'tom-full.png',
                'minutes' => 215,
                'goals'   => 2,
                'matches' => 8,

                'birth'   => '1990-06-16',
                'age'     => 35,
                'height'  => 173,
                'weight'  => 65,
                'country' => 'Estados Unidos',
                'foot'    => 'Izquierda',
                'bio'     => 'Delantero rápido y habilidoso, destaca por su capacidad para desbordar a los defensas rivales y crear oportunidades de gol. Su velocidad y agilidad le permiten superar a sus oponentes en situaciones de uno contra uno, siendo un jugador clave en el ataque del equipo. A lo largo de la temporada ha demostrado una gran regularidad, contribuyendo con goles y asistencias decisivas que han sido fundamentales para el éxito del equipo. Su compromiso, profesionalidad y liderazgo le han convertido en un referente dentro del vestuario, ganándose el respeto y la admiración de sus compañeros y rivales.',

                'stats' => [
                    'matches' => 8,
                    'minutes' => 215,
                    'goals'   => 2,
                    'assists' => 1,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
            [
                'slug'    => 'juanpe',
                'number'  => 95,
                'name'    => 'Juanpe',
                'role'    => 'Delantero',
                'photo'   => 'jp.jpg',
                'photo_full' => 'jp-full.png',
                'minutes' => 90,
                'goals'   => 2,
                'matches' => 3,

                'birth'   => '2005-11-10',
                'age'     => 20,
                'height'  => 177,
                'weight'  => 68,
                'country' => 'España',
                'foot'    => 'Derecha',
                'bio'     => 'Delantero joven y prometedor, destaca por su capacidad para definir con precisión en el área rival. Su técnica depurada y su habilidad para desmarcarse le convierten en un jugador difícil de defender, siendo una amenaza constante para las defensas rivales. A lo largo de la temporada ha mostrado una gran progresión, ganándose la confianza del cuerpo técnico gracias a su entrega y dedicación en los partidos de gran exigencia.',

                'stats' => [
                    'matches' => 3,
                    'minutes' => 90,
                    'goals'   => 2,
                    'assists' => 2,
                    'saves'   => null,
                    'clean_sheets' => null,
                ],
            ],
        ];
    }


    public function jugador($slug)
    {
        $players = $this->getPlayers();

        $player = collect($players)->firstWhere('slug', $slug);

        abort_if(!$player, 404);

        return view('jugador', compact('player'));
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
                'date_text' => 'dom, 21 dic',
                'home' => ['name' => 'New Avanti', 'logo' => 'images/escudos/avanti.png'],
                'away' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'score' => [0, 1]
            ],

            [
                'month' => 'Diciembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J13',
                'date_text' => 'dom, 28 dic',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'James Webb', 'logo' => 'images/escudos/james.png'],
                'score' => null
            ],
            /*[
                'month' => 'Diciembre',
                'competition' => 'SEVEN LEAGUE',
                'round' => 'J13',
                'date_text' => '—',
                'home' => ['name' => 'Occult FC', 'logo' => 'images/escudos/logo.png'],
                'away' => ['name' => 'James Webb', 'logo' => 'images/escudos/james.png'],
                'score' => null
            ],*/
        ];
    }
}
