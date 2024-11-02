<?php
    if(isset($_GET['weight']) && isset($_GET['unit_from']) && isset($_GET['unit_convert'])) {
        $weight = $_GET['weight'];
        $unit_from = $_GET['unit_from'];
        $unit_convert = $_GET['unit_convert'];
        $converted_weight = 0;
        if($unit_from == 'kg' && $unit_convert == 'g'){
            $converted_weight = $weight * 1000;
        }
        else if($unit_from == 'kg' && $unit_convert == 'mg'){
            $converted_weight = $weight * 1000000;
        }
        else if($unit_from == 'kg' && $unit_convert == 'lb'){
            $converted_weight = $weight * 2.20462;
        }
        else if($unit_from == 'kg' && $unit_convert == 'oz'){
            $converted_weight = $weight * 35.274;
        }
        else if($unit_from == 'g' && $unit_convert == 'kg'){
            $converted_weight = $weight / 1000;
        }
        else if($unit_from == 'g' && $unit_convert == 'mg'){
            $converted_weight = $weight * 1000;
        }
        else if($unit_from == 'g' && $unit_convert == 'lb'){
            $converted_weight = $weight * 0.00220462;
        }
        else if($unit_from == 'g' && $unit_convert == 'oz'){
            $converted_weight = $weight * 0.035274;
        }
        else if($unit_from == 'mg' && $unit_convert == 'kg'){
            $converted_weight = $weight / 1000000;
        }
        else if($unit_from == 'mg' && $unit_convert == 'g'){
            $converted_weight = $weight / 1000;
        }
        else if($unit_from == 'mg' && $unit_convert == 'lb'){
            $converted_weight = $weight * 0.00000220462;
        }
        else if($unit_from == 'mg' && $unit_convert == 'oz'){
            $converted_weight = $weight * 0.000035274;
        }
        else if($unit_from == 'lb' && $unit_convert == 'kg'){
            $converted_weight = $weight * 0.453592;
        }
        else if($unit_from == 'lb' && $unit_convert == 'g'){
            $converted_weight = $weight * 453.592;
        }
        else if($unit_from == 'lb' && $unit_convert == 'mg'){
            $converted_weight = $weight * 453592;
        }
        else if($unit_from == 'lb' && $unit_convert == 'oz'){
            $converted_weight = $weight * 16;
        }
        else if($unit_from == 'oz' && $unit_convert == 'kg'){
            $converted_weight = $weight * 0.0283495;
        }
        else if($unit_from == 'oz' && $unit_convert == 'g'){
            $converted_weight = $weight * 28.3495;
        }
        else if($unit_from == 'oz' && $unit_convert == 'mg'){
            $converted_weight = $weight * 28349.5;
        }
        else if($unit_from == 'oz' && $unit_convert == 'lb'){
            $converted_weight = $weight * 0.0625;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'layout/header.html'?>
    <form id= 'weightok' action="weight.php" method="GET" onsubmit="return validateForm()">
        <label for = "weight">Weight :</label>
        <input type="number" name="weight" id="weight">
        <label for="unit_from">Unit to convert from :</label>
        <select name="unit_from" id="unit_from">
            <option value="kg">Kilogram</option>
            <option value="g">Gram</option>
            <option value="mg">Milligram</option>
            <option value="lb">Pound</option>
            <option value="oz">Ounce</option>
        </select>
        <br>
        <label for="unit_convert">Unit to convert to :</label>
        <select name="unit_convert" id="unit_convert">
            <option value="kg">Kilogram</option>
            <option value="g">Gram</option>
            <option value="mg">Milligram</option>
            <option value="lb">Pound</option>
            <option value="oz">Ounce</option>
        </select>
        <br>
        <input class="submit" type="submit" value="Convert">
        <?php 
            if(isset($_GET['weight']) && isset($_GET['unit_from']) && isset($_GET['unit_convert'])) {
                echo "<p> $weight $unit_from is equal to $converted_weight $unit_convert </p>";
            }
        ?>
    </form>
    <script src="js/script.js"></script>
</body>
</html>