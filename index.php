<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>PHP-calcolatrice</title>

</head>

<body>

<div class="container">
    <div class="calc-background">
        <h1>Mini-Calcolatrice</h1>

        <?php 
        $number1 = $_REQUEST['number1'] ?? 0;
        $number2 = $_REQUEST['number2'] ?? 0;
        $operation = $_REQUEST['operation'] ?? '';
        ?>

        <?php
            switch( $operation ) {
                case "+":
                    $result = $number1 + $number2;
                    break;
                case "-":
                    $result = $number1 - $number2;
                    break;    
                case "x":
                    $result = $number1 * $number2;
                    break; 
                case "÷":
                    $result = @($number1 / $number2);
                    break; 
                default:
                    $result = '...';
            }

        ?>

        <form method="post">
            <p><input class="numbers" name="number1" placeholder="1° number" value="<?php echo $number1 ?>"></p>
            <p><input class="numbers" name="number2" placeholder="2° number" value="<?php echo $number2 ?>"></p>
            <p>
                <input class="operation" type="submit" name="operation" value="+">
                <input class="operation" type="submit" name="operation" value="-">
                <input class="operation" type="submit" name="operation" value="x">
                <input class="operation" type="submit" name="operation" value="÷">
            </p>
        </form>

        <p>Risultato: <?php echo $result ?></p>
    </div>
   

</div>



</body>
</html>