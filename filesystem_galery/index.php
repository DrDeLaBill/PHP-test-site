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
            <a href="../index.php">Главная</a>
            <a href="download.php">Загрузка</a>
            <?php if (isset($_COOKIE['message'])):?>
                <p><?php echo $_COOKIE['message']; ?></p>
            <?php endif; ?>
        </div>

            <?php $images = glob('./img/small/*'); ?>
            <?php for($i = 0; $i < count($images); $i++): ?>
                <?php if ($i % 4 == 0): ?>
                    <div class="row my-5">
                <?php endif; ?>
                    <div class="card mx-2" style="width: 18rem;">
                        <a href="image_page.php?image=<?php echo substr($images[$i], 11, mb_strlen($images[$i]) - 11); ?>">
                            <img src="<?php echo substr($images[$i], 2, mb_strlen($images[$i]) - 2); ?>" class="rounded mx-auto d-block p-2">
                        </a>
                    </div>
                <?php if ($i % 4 == 3 and $i != 0 or $i == count($images) - 1): ?>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
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
