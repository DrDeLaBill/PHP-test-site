<!doctype html>

<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Задание</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <h1>Галерея</h1>
            <a href="index.php">Галерея</a>
            <a href="download.php">Загрузка</a>
            <?php if (isset($_COOKIE['message'])):?>
                <p><?php echo $_COOKIE['message']; ?></p>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php if(isset($_GET['image'])): ?>
                <?php

                    $image = $_GET["image"];
                    $type = $_GET["type"];

                    $mysql = new mysqli('localhost', 'root', 'root', 'galery', 3306);

                    $images = $mysql->query("UPDATE `images` SET `views` = `views` + 1 WHERE `name` = '$image'");
                    $views = $mysql->query("SELECT `views` FROM `images` WHERE `name` = '$image'")->fetch_assoc();

                    $mysql->close();

                ?>
                <div class="card mx-2" style="width: 100rem; text-align: center;">
                    <img src="<?php echo "img/big/" . $image . '.' . $type; ?>" class="img-thumbnail rounded mx-auto d-block p-2">
                    <p style="text-align: center;">
                        <img src="static/eye.svg" style="width: 50px;">
                        <?php echo $views['views']; ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
