<?php


// Include the Archive ( it's just a primitive database :P )
include_once "db.php";


?>

<!doctype html>
<html lang="en">

<head>
    <title>Production List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header class="bg-dark py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-white">Production List</h1>
            <img src="https://skillicons.dev/icons?i=php,bootstrap,html" />
        </div>
    </header>
    <main class="my-5">
        <div class="container">
            <section>
                <h2>Productions</h2>
                <ul class="list-group">
                    <?php foreach ($productions as $production): ?>
                        <li class="list-group-item">
                            <strong>Title:</strong> <?php echo $production->getTitle(); ?><br>
                            <strong>Language:</strong> <?php echo $production->getLanguage(); ?><br>
                            <strong>Rating:</strong> <?php echo $production->getRating(); ?><br>
                            <strong>Genres:</strong> 
                            <?php foreach ($production->getGenres() as $genre): ?>
                                <?php echo $genre->getName(); ?> - <?php echo $genre->getDescription(); ?><br>
                            <?php endforeach; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
    </main>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>