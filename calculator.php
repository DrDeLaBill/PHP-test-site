<!DOCTYPE HTML>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Задание</title>
</head>

<body>
  <div class="container">
      <div class="row">
          <div class="col-sm my-5">
              <a href="index.php">Главная</a>
                  <?php
                      if (isset($_POST['submit'])) {
                          $resault = NULL;
                          $firstNumber = (int) $_POST['first'];
                          $operation = $_POST['operation'];
                          $secondNumber = (int) $_POST['second'];
                          switch ($operation) {
                            case '+':
                                $resault = $firstNumber + $secondNumber;
                                break;
                            case '-':
                                $resault = $firstNumber - $secondNumber;
                                break;
                            case '*':
                                $resault = $firstNumber * $secondNumber;
                                break;
                            case '/':
                                $resault = $firstNumber / $secondNumber;
                                break;
                          }
                      }
                  ?>
                  <h1>Калькулятор</h1>
                  <div class="col col-sm-4">
                      <form method="post" action="">
                          <input type="number" name="first" class="form-control my-3" value="0">
                          <select name="operation" class="form-select my-3">
                              <option name="+">+</option>
                              <option name="-">-</option>
                              <option name="*">*</option>
                              <option name="/">/</option>
                          </select>
                          <input type="number" name="second" class="form-control my-3" value="0">
                          <input type="submit" value="Submit" class="btn btn-success my-3" name="submit">
                      </form>
                </div>
                  <?php
                      if ($resault !== NULL) {
                          echo "<p>{$firstNumber} {$operation} {$secondNumber} = {$resault}</p>";
                      }
                  ?>
            </div>
        </div>
    </div>
</body>
</html>
