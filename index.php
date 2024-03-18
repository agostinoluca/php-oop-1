<?php
require_once __DIR__ . '/database/db.php';
require_once __DIR__ . '/app/Layout/head.php';
?>

<body class="bg_primary">
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 text-center mt-3 text-light">
                <h1>Top Movies</h1>
            </div>
            <?php foreach ($movies as $movie) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card text-center bg_primary_shadow" style="min-height: 25rem;">
                        <div class="card-title text-light pt-3 ">
                            <h3><?= $movie->title ?></h3>
                            <h6><?= 'Duration: ' . $movie->duration . ' minutes' ?></h6>
                        </div>
                        <!-- /.card-title -->
                        <div class="card-body pt-0 ">
                            <?= '<img width="200" src="' . $movie->poster . '" alt="poster movie"><br>' ?>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-light ">
                            <h6>Genres:</h6>
                            <?php foreach ($movie->genres as $genre) : ?>
                                <?= $genre->name . ' (' . $genre->itaTraduction . ')<br>' ?>
                            <?php endforeach; ?>
                            <p class="text-secondary"><?= Movie::$isStatic ?></p>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
            <?php endforeach ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</body>

</html>