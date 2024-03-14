<?php

require_once __DIR__ . '/app/Models/Movie.php';

$movies = [
    new Movie('Robocop', 120, 'https://picsum.photos/id/684/600/400', 'Action'),
    new Movie('Terminator', 140, 'https://picsum.photos/id/684/600/400', 'Action'),
    new Movie('Fantozzi', 80, 'https://picsum.photos/id/684/600/400', 'Comedy'),
    new Movie('Il Padrino', 110, 'https://picsum.photos/id/684/600/400', 'Gangster')
]

?>

<?php require_once __DIR__ . '/app/Layout/head.php'; ?>

<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-light mt-3">
                <h1>Top Movies</h1>
            </div>
            <?php foreach ($movies as $movie) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card bg-success">
                        <div class="card-body text-light">
                            <?php
                            $movie->displayInfo();
                            echo "<br><br>";
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</body>

</html>