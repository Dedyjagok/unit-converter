<?php
function convertTemperature($temperature, $unit_from, $unit_to) {
    switch ($unit_from) {
        case 'c': // Celsius
            if ($unit_to == 'f') {
                return $temperature * 9/5 + 32; // Celsius to Fahrenheit
            } elseif ($unit_to == 'r') {
                return $temperature * 4/5; // Celsius to Reaumur
            } elseif ($unit_to == 'k') {
                return $temperature + 273.15; // Celsius to Kelvin
            }
            break;
        case 'f': // Fahrenheit
            if ($unit_to == 'c') {
                return ($temperature - 32) * 5/9; // Fahrenheit to Celsius
            } elseif ($unit_to == 'r') {
                return ($temperature - 32) * 4/9; // Fahrenheit to Reaumur
            } elseif ($unit_to == 'k') {
                return ($temperature - 32) * 5/9 + 273.15; // Fahrenheit to Kelvin
            }
            break;
        case 'r': // Reaumur
            if ($unit_to == 'c') {
                return $temperature * 5/4; // Reaumur to Celsius
            } elseif ($unit_to == 'f') {
                return $temperature * 9/4 + 32; // Reaumur to Fahrenheit
            } elseif ($unit_to == 'k') {
                return $temperature * 5/4 + 273.15; // Reaumur to Kelvin
            }
            break;
        case 'k': // Kelvin
            if ($unit_to == 'c') {
                return $temperature - 273.15; // Kelvin to Celsius
            } elseif ($unit_to == 'f') {
                return ($temperature - 273.15) * 9/5 + 32; // Kelvin to Fahrenheit
            } elseif ($unit_to == 'r') {
                return ($temperature - 273.15) * 4/5; // Kelvin to Reaumur
            }
            break;
    }
    return $temperature; // If units are the same or invalid input
}

$result = '';
if (isset($_GET['temperature']) && isset($_GET['unit_from']) && isset($_GET['unit_convert'])) {
    $temperature = $_GET['temperature'];
    $unit_from = $_GET['unit_from'];
    $unit_convert = $_GET['unit_convert'];
    $result = convertTemperature($temperature, $unit_from, $unit_convert);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'layout/header.html'?>
    <div>
        <form id="temperatureok" action="temperature.php" method="GET" onsubmit="return validateForm()">
            <label for="temperature">Temperature</label>
            <input name="temperature" id="temperature" type="number" step="any" required>
            <br>
            <label for="unit_from">Unit to convert from :</label>
            <select name="unit_from" id="unit_from">
                <option value="c">Celsius</option>
                <option value="f">Fahrenheit</option>
                <option value="r">Reaumur</option>
                <option value="k">Kelvin</option>
            </select>
            <br>
            <label for="unit_convert">Unit convert to :</label>
            <select name="unit_convert" id="unit_convert">
                <option value="c">Celsius</option>
                <option value="f">Fahrenheit</option>
                <option value="r">Reaumur</option>
                <option value="k">Kelvin</option>
            </select>
            <br>
            <input class="submit" type="submit" value="Convert">
            <?php if ($result !== ''): ?>
                <p>Converted Temperature: <?php echo htmlspecialchars($result); ?></p>
            <?php endif; ?>
        </form>
    </div>
    <script src="js/script.js"></script>
    <?php include 'layout/footer.html'?>
</body>
</html>