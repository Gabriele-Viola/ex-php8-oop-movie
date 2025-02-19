<?php
require_once "./Models/Movies.php";
require_once "./Models/Genre.php";

$matrix = new Movie('Matrix', 1999, 136, new Genre('sci-fi'), "USA");
$troy = new Movie("Troy", 2004, 162, new Genre('action'), "USA");
var_dump($matrix);
var_dump($troy);
echo $troy->getTiming();

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
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>





</body>

</html>