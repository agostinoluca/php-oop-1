<?php
require_once __DIR__ . '/../app/Models/Genre.php';
require_once __DIR__ . '/../app/Models/Movie.php';

$movies = [
    new Movie(
        'Robocop',
        120,
        'https://picsum.photos/id/521/600/400',
        [
            new Genre('Action', 'Azione'),
            new Genre('Sci-Fi', 'Fantascienza'),
        ]
    ),
    $terminator = new Movie(
        'Terminator',
        140,
        'https://picsum.photos/id/684/600/400',
        [
            new Genre('Action', 'Azione'),
            new Genre('Sci-Fi', 'Fantascienza'),
        ]
    ),

    $fantozzi = new Movie(
        'Fantozzi',
        80,
        'https://picsum.photos/id/695/600/400',
        [
            new Genre('Comedy', 'Commedia'),
            new Genre('Drama', 'Drammatico'),
        ]
    ),

    $il_padrino = new Movie(
        'Il Padrino',
        110,
        'https://picsum.photos/id/64/600/400',
        [
            new Genre('Crime', 'Crimine'),
            new Genre('Drama', 'Drammatico'),
        ]
    ),

    $forrest_gump = new Movie(
        'Forrest Gump',
        142,
        'https://picsum.photos/id/237/600/400',
        [
            new Genre('Drama', 'Drammatico'),
            new Genre('Romance', 'Romantico'),
        ]
    ),

    $pulp_fiction = new Movie(
        'Pulp Fiction',
        154,
        'https://picsum.photos/id/674/600/400',
        [
            new Genre('Crime', 'Crimine'),
            new Genre('Drama', 'Drammatico'),
        ]
    ),

    $interstellar = new Movie(
        'Interstellar',
        169,
        'https://picsum.photos/id/903/600/400',
        [
            new Genre('Adventure', 'Avventura'),
            new Genre('Sci-Fi', 'Fantascienza'),
        ]
    ),

    $inception = new Movie(
        'Inception',
        148,
        'https://picsum.photos/id/870/600/400',
        [
            new Genre('Action', 'Azione'),
            new Genre('Sci-Fi', 'Fantascienza'),
        ]
    ),

    $il_signore_degli_anelli = new Movie(
        "Il Signore degli Anelli: La Compagnia dell'Anello",
        178,
        'https://picsum.photos/id/63/600/400',
        [
            new Genre('Adventure', 'Avventura'),
            new Genre('Fantasy', 'Fantasy'),
        ]
    ),

    $matrix = new Movie(
        'Matrix',
        136,
        'https://picsum.photos/id/23/600/400',
        [
            new Genre('Action', 'Azione'),
            new Genre('Sci-Fi', 'Fantascienza'),
        ]
    ),

    $la_vita_e_bella = new Movie(
        'La vita è bella',
        116,
        'https://picsum.photos/id/494/600/400',
        [
            new Genre('Comedy', 'Commedia'),
            new Genre('Drama', 'Drammatico'),
        ]
    ),

    $schindlers_list = new Movie(
        "Schindler's List",
        195,
        'https://picsum.photos/id/139/600/400',
        [
            new Genre('Biography', 'Biografia'),
            new Genre('Drama', 'Drammatico'),
        ]
    ),

    $the_dark_knight = new Movie(
        'The Dark Knight',
        152,
        'https://picsum.photos/id/593/600/400',
        [
            new Genre('Action', 'Azione'),
            new Genre('Crime', 'Crimine'),
        ]
    ),

    $fight_club = new Movie(
        'Fight Club',
        139,
        'https://picsum.photos/id/1074/600/400',
        [
            new Genre('Drama', 'Drammatico'),
            new Genre('Thriller', 'Thriller'),
        ]
    ),
];
