<?php

    if (isset($_POST['submit'])) {
        setcookie("user", $_POST['username'] , time() + 60 * 60, "/");
        setcookie("last_page", 'chooze_page' , time() + 60 * 60, "/");
        exit("<meta http-equiv='refresh' content='0; url= /phpsite/authorization/index.php'>");
    }
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
				<div class="col col-sm-4 p-4">
          <a href="../index.php">Главная</a>
          <?php if (isset($_COOKIE['success'])): ?>
            <p class="col">Добро пожаловать</p>
          <?php endif; ?>
					<h1>Регистрация</h1>
					<form action="" method="post" class="form">
		        <input type="text" class="form-control my-3" name="username" id="username" placeholder="Введите имя">
						<input type="password" class="form-control my-3" name="password" id="password" placeholder="Введите пароль">
						<button type="submit" class="btn btn-success my-3" name="submit" value="submit">Регистрация</button>
					</form>
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
