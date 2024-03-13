<?php

class Movie
{
    public $title;
    public $duration;
    public $poster;
    public $genre;

    public function __construct($title, $duration, $poster, $genre)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->poster = $poster;
        $this->genre = $genre;
    }
}

$Robocop = new Movie('Robocop', '120', 'https://picsum.photos/id/684/600/400', 'Action');
$Terminator = new Movie('Terminator', '140', 'https://picsum.photos/id/684/600/400', 'Action');
$Fantozzi = new Movie('Fantozzi', '80', 'https://picsum.photos/id/684/600/400', 'Comedy');
$IlPadrino = new Movie('Robocop', '110', 'https://picsum.photos/id/684/600/400', 'Gangster');

var_dump($Robocop, $IlPadrino, $Fantozzi, $IlPadrino);



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

<body>
</body>

</html>