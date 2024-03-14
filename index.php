<?php

class Movie
{
    // public $title;
    // public $duration;
    // public $poster;
    // public $genre;

    /**
     * @param String $title The title of movie
     * @param Number $duration The duration of movie
     * @param String $poster The poster of movie
     * @param String $genre The genre of movie
     */
    public function __construct(public string $title, public int $duration, public string $poster, public string $genre)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->poster = $poster;
        $this->genre = $genre;
    }

    public function displayInfo()
    {
        echo 'Title: ' . $this->title . '<br>';
        echo 'Duration: ' . $this->duration . ' minutes<br>';
        echo 'Poster: ' . $this->poster . '<br>';
        echo 'Genre: ' . $this->genre . '<br>';
    }
}


$movies = [
    new Movie('Robocop', 120, 'https://picsum.photos/id/684/600/400', 'Action'),
    new Movie('Terminator', 140, 'https://picsum.photos/id/684/600/400', 'Action'),
    new Movie('Fantozzi', 80, 'https://picsum.photos/id/684/600/400', 'Comedy'),
    new Movie('Il Padrino', 110, 'https://picsum.photos/id/684/600/400', 'Gangster')
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

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