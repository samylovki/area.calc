<?php

$a = $_POST['width'];
$b = $_POST['height'];

function areaCalc($a, $b){

    if (isset($_POST['width']) && isset($_POST['height'])){

        $area = $a * $b;
        echo "Площадь равна $area см.";
    } else {
        echo "Нужно ввести данные для рассчета";
    }

}
//echo $_SERVER['DOCUMENT_ROOT'] . '/index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор площади</title>
</head>
<body>

<form action="index.php" method="post">
<fieldset style="width: 45%">
    <legend>Введите данные для рассчета</legend>
    Введите ширину: <input type="number" name="width" value="<?=isset($_POST['width'])?$_POST['width']:""?>" style="width: 55px"> см.<br><br>
    Введите высоту: <input type="number" name="height" value="<?=isset($_POST['height'])?$_POST['height']:""?>" style="width: 55px"> см.<br><br>
    <input type="submit" name="calculate" value="Рассчитать"><br><br>
    <p>Ответ:</p>
    <p><?=isset($_POST['calculate']) ? areaCalc($a, $b) : NULL?></p>
</fieldset>
</form>
</body>
</html>