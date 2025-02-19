<?php
require_once "./Traits/Curiosity.php";
require_once "./Models/Genre.php";
require_once "./Models/Movies.php";
require_once "./db.php";
var_dump($movies[0]);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($movies as $movie) {


            ?>
                <div class="col">

                    <div class="card h-100">
                        <div class="card-body ">
                            <h3><?php echo $movie->name; ?></h3>
                            <p><?php echo $movie->year; ?></p>
                            <p><?php echo $movie->timing; ?></p>
                            <p><?php echo $movie->genre->getGenre(); ?></p>
                            <p><?php echo $movie->getCuriosity() ?? ''; ?></p>
                        </div>
                    </div>
                </div>


            <?php
            }
            ?>
        </div>
    </div>





</body>

</html>