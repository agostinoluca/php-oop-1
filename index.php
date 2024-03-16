<?php
require_once __DIR__ . '/app/Models/Movie.php';
require_once __DIR__ . '/database/db.php';
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