<?php

    setcookie("success", 'pageB' , time() + 60 * 60, "/");

?>
<!doctype html>

<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Регистрация</title>
  </head>
  <body>
		<div class="container m-4">
			<div class="row">
				<div class="col col-sm-5 p-4">
          <h1>Вы на странице Б</h1>
          <p><a href="../index.php">Страница выбора</a></p>
				</div>
			</div>
		</div>
    <?php if (isset($_COOKIE['error'])): ?>
      <script type="text/javascript">
        alert("<?=$_COOKIE['error']?>")
      </script>
    <?php endif; ?>
  </body>
</html>
