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
          <div class="col my-5">
              <a href="index.php">Главная</a>
                  <?php

                      echo "<h1>Ветвления и функции.</h1>";
                      echo "<h2>Задача 1</h2>";
                      const VAL_A = 9;
                      const VAL_B = 1000;
                      $a = VAL_A;
                      $b = VAL_B;
                      if ($a >= 0 && $b >= 0) {
                          echo '<p>$a + $b = ' . ($a + $b) . '<p>';
                      } elseif ($a < 0 && $b < 0) {
                          echo '<p>$a - $b = ' . ($a - $b) . '<p>';
                      } else {
                          echo '<p>$a * $b = ' . ($a * $b) . '<p>';
                      }

                      echo "<h2>Задача 2</h2>";
                      echo '<p>Большее из чисел: ' . ($a > $b ? $a : $b) . '<p>';

                      echo "<h2>Задача 3</h2>";
                      $a = rand(0, 9);
                      echo "<p>";
                      switch ($a) {
                        case 0:
                            echo "0 ";
                        case 1:
                            echo "1 ";
                        case 2:
                            echo "2 ";
                        case 3:
                            echo "3 ";
                        case 4:
                            echo "4 ";
                        case 5:
                            echo "5 ";
                        case 6:
                            echo "6 ";
                        case 7:
                            echo "7 ";
                        case 8:
                            echo "8 ";
                        case 9:
                            echo "9</p>";
                      }

                      echo "<h2>Задача 4</h2>";
                      echo '<p>Just functions<p>';
                      function addition($a, $b) {
                          return $a + $b;
                      }

                      function subtraction($a, $b) {
                          return $a - $b;
                      }

                      function multiplication($a, $b) {
                          return $a * $b;
                      }

                      function division($a, $b) {
                          return $a / $b;
                      }

                      function remainderOfTheDivision($a, $b) {
                          return $a % $b;
                      }

                      echo "<h2>Задача 5</h2>";
                      function mathOperation($arg1, $arg2, $operation) {
                          switch ($operation) {
                              case 'addition':
                                  $resault = addition($arg1, $arg2);
                                  break;
                              case 'subtraction':
                                  $resault = subtraction($arg1, $arg2);
                                  break;
                              case 'multiplication':
                                  $resault = multiplication($arg1, $arg2);
                                  break;
                              case 'division':
                                  $resault = division($arg1, $arg2);
                                  break;
                              case 'remainder':
                                  $resault = remainderOfTheDivision($arg1, $arg2);
                                  break;
                            }
                          echo "<p>{$operation} of {$arg1} and {$arg2}: {$resault}</p>";
                      }
                      $arg1 = 5;
                      $arg2 = 8;
                      mathOperation($arg1, $arg2, 'addition');
                      mathOperation($arg1, $arg2, 'subtraction');
                      mathOperation($arg1, $arg2, 'multiplication');
                      mathOperation($arg1, $arg2, 'division');
                      mathOperation($arg1, $arg2, 'remainder');

                      echo "<h2>Задача 6</h2>";
                      function power($val, $pow) {
                          if ($pow > 0) {
                              return $val * power($val, --$pow);
                          }
                          return 1;
                      }
                      echo "<p>2 ^ 8 = " . (power(2, 8)) . "</p>";

                      echo "<h2>Задача 7</h2>";
                      function getBigger($arg1, $arg2) {
                          return $arg1 > $arg2 ? $arg1 : $arg2;
                      }

                      function getLower($arg1, $arg2) {
                          return $arg1 < $arg2 ? $arg1 : $arg2;
                      }

                      echo "<p>Результат: ";
                      if ($a * $b > 100 and $a * $b < 1000) {
                          echo getBigger($a, $b) - getLower($a, $b);
                      } elseif ($a * $b > 1000) {
                          echo $a * $b / getBigger($a, $b);
                      } else {
                          echo "nope";
                      }
                      echo "</p>";
                  ?>
                </div>
              </div>
            </div>
</body>
</html>
