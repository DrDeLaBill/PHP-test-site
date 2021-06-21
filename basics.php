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

    <?php

        echo "<h1>Основы PHP.</h1>";
        echo "<h2>Задача 1</h2>";
        $stringValue = "Строковая перменная";
        $integerValue = 123;
        $floatValue = 1.10;
        const CONST_VALUE = "const value";
        echo "<p>{$stringValue}</p>";
        echo "<p>Целочисленная переменная: {$integerValue}";
        echo "<p>Переменная дробного типа: {$floatValue}</p>";
        echo "<p>Константа: " . CONST_VALUE . "</p>";
        echo "<p>Число в восьмеричной нотации: 0" . (string) decoct($integerValue) . "</php>";
        echo "<p>Число в шестнадцатеричной  нотации: 0x" . mb_strtoupper((string) dechex($integerValue)) . "</php>";

        echo "<h2>Задача 2</h2>";
        echo '<p>{$stringValue}</p>';
        echo '<p>Целочисленная переменная: {$integerValue}';
        echo '<p>Переменная дробного типа: {$floatValue}</p>';
        echo '<p>Константа: ' . CONST_VALUE . '</p>';
        echo '<p>Число в восьмеричной нотации: 0' . (string) decoct($integerValue) . '</php>';
        echo '<p>Число в шестнадцатеричной  нотации: 0x' . mb_strtoupper((string) dechex($integerValue)) . '</php>';

        echo "<h2>Задача 3</h2>";
        echo "<p>";
        echo 010 . ' ';
        echo 011 . ' ';
        echo 012 . ' ';
        echo 013 . ' ';
        echo 014 . ' ';
        echo 015 . ' ';
        echo 016 . ' ';
        echo 017 . ' ';
        echo 020 . ' ';
        echo "</p>";
        echo "<p>Числа, при выполнении скрипта были преобразованы в десятичную систему счисления</p>";

        echo "<h2>Задача 4</h2>";
        echo "<p>";
        echo 0x1 . ' ';
        echo 0x2 . ' ';
        echo 0x3 . ' ';
        echo 0x4 . ' ';
        echo 0x5 . ' ';
        echo 0x6 . ' ';
        echo 0x7 . ' ';
        echo 0x8 . ' ';
        echo 0x9 . ' ';
        echo 0xA . ' ';
        echo 0xB . ' ';
        echo 0xC . ' ';
        echo 0xD . ' ';
        echo 0xE . ' ';
        echo 0xF . ' ';
        echo "</p>";

        echo "<h2>Задача 5</h2>";
        $firstString = "<p>\"Я помню чудное мгновенье:</p>";
        $secondString = "<p>Передо мной явилась ты,</p>";
        $thirdString = "<p>Как мимолетное виденье,</p>";
        $fourthString = "<p>Как гений чистой красоты.\"</p>";
        $fifthString = "<p><em>А.С. Пушкин</em></p>";
        echo $firstString;
        echo $secondString;
        echo $thirdString;
        echo $fourthString;
        echo $fifthString;

        echo "<h2>Задача 6</h2>";
        echo "{$firstString}{$secondString}{$thirdString}{$fourthString}{$fifthString}";

        echo "<h2>Задача 7</h2>";
        echo 10 + "привет";
        echo "<p>Неявное приведение типа к целочисленновму</p>";
        echo "<p>" . 10 . "привет" . "</p>";

        echo "<h2>Задача 8</h2>";
        echo '<p>xor - исключающее ИЛИ. $a xor $b: true, если $a, или $b true, но не оба.</p>';
        echo "<p>true xor true: ";
        if (TRUE xor TRUE) {
            echo "true</p>";
        } else {
            echo "false</p>";
        }
        echo "<p>true xor false: ";
        if (TRUE xor FALSE) {
            echo "true</p>";
        } else {
            echo "false</p>";
        }
        echo "<p>false xor true: ";
        if (FALSE xor TRUE) {
            echo "true</p>";
        } else {
            echo "false</p>";
        }
        echo "<p>false xor false: ";
        if (FALSE xor FALSE) {
            echo "true</p>";
        } else {
            echo "false</p>";
        }
        echo '<p>$a xor $a для любых значений $a всегда равен false</p>';
    ?>
</body>
</html>
