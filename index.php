<?php

require_once __DIR__ . '/app/Models/Movie.php';

$movies = [
    new Movie('Robocop', 120, 'https://picsum.photos/id/521/600/400', 'Action'),
    new Movie('Terminator', 140, 'https://picsum.photos/id/684/600/400', 'Action'),
    new Movie('Fantozzi', 80, 'https://picsum.photos/id/695/600/400', 'Comedy'),
    new Movie('Il Padrino', 110, 'https://picsum.photos/id/64/600/400', 'Gangster'),
    new Movie('Forrest Gump', 142, 'https://picsum.photos/id/237/600/400', 'Drama'),
    new Movie('Pulp Fiction', 154, 'https://picsum.photos/id/674/600/400', 'Crime'),
    new Movie('Interstellar', 169, 'https://picsum.photos/id/903/600/400', 'Science Fiction'),
    new Movie('Inception', 148, 'https://picsum.photos/id/870/600/400', 'Thriller'),
    new Movie("Il Signore degli Anelli: La Compagnia dell'Anello", 178, 'https://picsum.photos/id/63/600/400', 'Fantasy'),
    new Movie('Matrix', 136, 'https://picsum.photos/id/23/600/400', 'Action'),
    new Movie('La vita è bella', 116, 'https://picsum.photos/id/494/600/400', 'Comedy'),
    new Movie("Schindler's List", 195, 'https://picsum.photos/id/139/600/400', 'Biographical'),
    new Movie('The Dark Knight', 152, 'https://picsum.photos/id/593/600/400', 'Superhero'),
    new Movie('Fight Club', 139, 'https://picsum.photos/id/1074/600/400', 'Drama')

]

?>

<?php require_once __DIR__ . '/app/Layout/head.php'; ?>

<body class="bg_primary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-3 bg_primary_shadow">
                <h1>Top Movies</h1>
            </div>
            <?php foreach ($movies as $movie) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card text-center bg_primary_shadow">
                        <div class="card-body text-light">
                            <?php
                            $movie->displayInfo();
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</body>

</html>