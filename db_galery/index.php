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
            <h1>Галерея БД</h1>
            <a href="../index.php">Главная</a>
            <a href="download.php">Загрузка</a>
            <?php if (isset($_COOKIE['message'])):?>
                <p><?php echo $_COOKIE['message']; ?></p>
            <?php endif; ?>
        </div>

            <?php
                $mysql = new mysqli('localhost', 'root', 'root', 'galery', 3306);

                $images = $mysql->query("SELECT * FROM `images` ORDER BY `views` DESC");

                $mysql->close();

                $counter = 0;
            ?>
            <?php foreach($images as $image): ?>
                <?php if ($counter % 4 == 0): ?>
                    <div class="row my-5">
                <?php endif; ?>
                    <div class="card mx-2" style="width: 18rem;">
                        <a href="image_page.php?image=<?php echo $image['name']; ?>&type=<?php echo $image['type']; ?>">
                            <img src="<?php echo "img/small/" . $image['name'] . '.' . $image['type']; ?>" class="rounded mx-auto d-block p-2">
                        </a>
                        <p style="text-align: center;">
                            <img src="static/eye.svg" style="width: 30px;">
                            <?php echo $image['views'] ?>
                        </p>
                    </div>
                <?php if ($counter % 4 == 3 and $counter != 0 or $counter == $images->num_rows - 1): ?>
                    </div>
                <?php endif; ?>
                <?php $counter++ ?>
            <?php endforeach; ?>
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
