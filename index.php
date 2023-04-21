<?php
require 'formula.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Квадратичное уровнение типа ах2 + аb + c = 0</title>
</head>
<body>
    <div class="form">
        <h3>Квадратичное уровнение типа ах2 + аb + c = 0</h3>
        <form action="/" method="GET">
            <div>
                <label for="term_a">Введите значение а</label>
                <input type="number" step="0.001" name="term_a">
            </div>
            <div>
                <label for="term_b">Введите значение b</label>
                <input type="number" step="0.001" name="term_b">
            </div>
            <div>
                <label for="term_c">Введите значение c</label>
                <input type="number" step="0.001" name="term_c">
            </div>
            <button type="submit">Рассчитать</button>
        </form>
        <p><?php echo quadratic_equation($_GET['term_a'], $_GET['term_b'], $_GET['term_c']) ?></p> 
    </div>
</body>
</html>