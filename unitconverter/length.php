<?php
    if(isset($_GET['length']) && isset($_GET['unit_from']) && isset($_GET['unit_convert'])){
        $length = $_GET['length'];
        $unit_from = $_GET['unit_from'];
        $unit_convert = $_GET['unit_convert'];
        $converted_length = 0;
        if($unit_from == 'm' && $unit_convert == 'cm'){
            $converted_length = $length * 100;
        }
        else if($unit_from == 'm' && $unit_convert == 'km'){
            $converted_length = $length / 1000;
        }
        else if($unit_from == 'm' && $unit_convert == 'mm'){
            $converted_length = $length * 1000;
        }
        else if($unit_from == 'm' && $unit_convert == 'ft'){
            $converted_length = $length * 3.28084;
        }
        else if($unit_from == 'm' && $unit_convert == 'in'){
            $converted_length = $length * 39.3701;
        }
        else if($unit_from == 'cm' && $unit_convert == 'm'){
            $converted_length = $length / 100;
        }
        else if($unit_from == 'cm' && $unit_convert == 'km'){
            $converted_length = $length / 100000;
        }
        else if($unit_from == 'cm' && $unit_convert == 'mm'){
            $converted_length = $length * 10;
        }
        else if($unit_from == 'cm' && $unit_convert == 'ft'){
            $converted_length = $length * 0.0328084;
        }
        else if($unit_from == 'cm' && $unit_convert == 'in'){
            $converted_length = $length * 0.393701;
        }
        else if($unit_from == 'km' && $unit_convert == 'm'){
            $converted_length = $length * 1000;
        }
        else if($unit_from == 'km' && $unit_convert == 'cm'){
            $converted_length = $length * 100000;
        }
        else if($unit_from == 'km' && $unit_convert == 'mm'){
            $converted_length = $length * 1000000;
        }
        else if($unit_from == 'km' && $unit_convert == 'ft'){
            $converted_length = $length * 3280.84;
        }
        else if($unit_from == 'km' && $unit_convert == 'in'){
            $converted_length = $length * 39370.1;
        }
        else if($unit_from == 'mm' && $unit_convert == 'm'){
            $converted_length = $length / 1000;
        }
        else if($unit_from == 'mm' && $unit_convert == 'cm'){
            $converted_length = $length / 10;
        }
        else if($unit_from == 'mm' && $unit_convert == 'km'){
            $converted_length = $length / 1000000;
        }
        else if($unit_from == 'mm' && $unit_convert == 'ft'){
            $converted_length = $length * 0.00328084;
        }
        else if($unit_from == 'mm' && $unit_convert == 'in'){
            $converted_length = $length * 0.0393701;
        }
        else if($unit_from == 'ft' && $unit_convert == 'm'){
            $converted_length = $length * 0.3048;
        }
        else if($unit_from == 'ft' && $unit_convert == 'cm'){
            $converted_length = $length * 30.48;
        }
        else if($unit_from == 'ft' && $unit_convert == 'km'){
            $converted_length = $length * 0.0003048;
        }
        else if($unit_from == 'ft' && $unit_convert == 'mm'){
            $converted_length = $length * 304.8;
        }
        else if($unit_from == 'ft' && $unit_convert == 'in'){
            $converted_length = $length * 12;
        }
        else if($unit_from == 'in' && $unit_convert == 'm'){
            $converted_length = $length * 0.0254;
        }
        else if($unit_from == 'in' && $unit_convert == 'cm'){
            $converted_length = $length * 2.54;
        }
        else if($unit_from == 'in' && $unit_convert == 'km'){
            $converted_length = $length * 0.0000254;
        }
        else if($unit_from == 'in' && $unit_convert == 'mm'){
            $converted_length = $length * 25.4;
        }
        else if($unit_from == 'in' && $unit_convert == 'ft'){
            $converted_length = $length * 0.0833333;
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
    <form id = 'lengthok' action = "length.php" method = "GET" onsubmit="return validateForm()" >
        <label for="length">Length :</label>
        <input type="number" name="length" id="length">
        <br>
        <label for="unit_from">Unit to convert from :</label>
        <select name="unit_from" id="unit_from">
            <option value="m">Meter</option>
            <option value="cm">Centimeter</option>
            <option value="km">Kilometer</option>
            <option value="mm">Millimeter</option>
            <option value="ft">Feet</option>
            <option value="in">Inch</option>
        </select>
        <br>
        <label for="unit_convert">Unit to convert to :</label>
        <select name="unit_convert" id="unit_convert">
            <option value="m">Meter</option>
            <option value="cm">Centimeter</option>
            <option value="km">Kilometer</option>
            <option value="mm">Millimeter</option>
            <option value="ft">Feet</option>
            <option value="in">Inch</option>
        </select>
        <br>
        <input class="submit" type="submit" value="Convert">
        <?php
            if(isset($converted_length)){
                echo "<br>";
                echo "The converted length is $converted_length $unit_convert";
            }
        ?>


    </form>
    <script src="js/script.js"></script>
    <?php include 'layout/footer.html'?>
</body>
</html>