<?php
    // Define currency conversion rates (fixed rates for demonstration)
    $conversionRates = [
        'idr' => [
            'usd' => 0.000064,
            'eur' => 0.000059,
            'myr' => 0.00030,
            'jpy' => 0.0096,
            'gbp' => 0.000050,
            'aud' => 0.000096,
            'sgd' => 0.000086
        ],
        'usd' => [
            'idr' => 15500,
            'eur' => 0.92,
            'myr' => 4.71,
            'jpy' => 150.29,
            'gbp' => 0.78,
            'aud' => 1.51,
            'sgd' => 1.35
        ],
        'eur' => [
            'idr' => 16900,
            'usd' => 1.09,
            'myr' => 5.13,
            'jpy' => 163.78,
            'gbp' => 0.85,
            'aud' => 1.65,
            'sgd' => 1.47
        ],
        'myr' => [
            'idr' => 3290,
            'usd' => 0.21,
            'eur' => 0.19,
            'jpy' => 31.90,
            'gbp' => 0.17,
            'aud' => 0.32,
            'sgd' => 0.29
        ],
        'jpy' => [
            'idr' => 103.21,
            'usd' => 0.0067,
            'eur' => 0.0061,
            'myr' => 0.031,
            'gbp' => 0.0052,
            'aud' => 0.010,
            'sgd' => 0.0090
        ],
        'gbp' => [
            'idr' => 19800,
            'usd' => 1.28,
            'eur' => 1.18,
            'myr' => 6.02,
            'jpy' => 192.29,
            'aud' => 1.93,
            'sgd' => 1.73
        ],
        'aud' => [
            'idr' => 10300,
            'usd' => 0.66,
            'eur' => 0.61,
            'myr' => 3.12,
            'jpy' => 99.72,
            'gbp' => 0.52,
            'sgd' => 0.89
        ],
        'sgd' => [
            'idr' => 11600,
            'usd' => 0.74,
            'eur' => 0.68,
            'myr' => 3.49,
            'jpy' => 111.56,
            'gbp' => 0.58,
            'aud' => 1.12
        ]
    ];

    $converted_amount = '';
    $currency_symbol = '';
    
    if(isset($_GET['amount']) && isset($_GET['unit_from']) && isset($_GET['unit_convert'])) {
        $amount = $_GET['amount'];
        $unit_from = $_GET['unit_from'];
        $unit_convert = $_GET['unit_convert'];
        
        // Set currency symbols for display
        $symbols = [
            'idr' => 'Rp',
            'usd' => '$',
            'eur' => '€',
            'myr' => 'RM',
            'jpy' => '¥',
            'gbp' => '£',
            'aud' => 'A$',
            'sgd' => 'S$'
        ];
        
        $currency_symbol = $symbols[$unit_convert];
        
        // If converting to the same currency
        if($unit_from == $unit_convert) {
            $converted_amount = $amount;
        } else {
            // Perform conversion
            $converted_amount = $amount * $conversionRates[$unit_from][$unit_convert];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'layout/header.html'?>
    <form id="currencyok" action="currency.php" method="GET" onsubmit="return validateForm()" style="background-color: white; border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin: 20px 0; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" step="any" required>
        <br>
        <label for="unit_from">Currency to convert from:</label>
        <select name="unit_from" id="unit_from">
            <option value="idr">Indonesian Rupiah (IDR)</option>
            <option value="usd">US Dollar (USD)</option>
            <option value="eur">Euro (EUR)</option>
            <option value="myr">Malaysian Ringgit (MYR)</option>
            <option value="jpy">Japanese Yen (JPY)</option>
            <option value="gbp">British Pound (GBP)</option>
            <option value="aud">Australian Dollar (AUD)</option>
            <option value="sgd">Singapore Dollar (SGD)</option>
        </select>
        <br>
        <label for="unit_convert">Currency to convert to:</label>
        <select name="unit_convert" id="unit_convert">
            <option value="idr">Indonesian Rupiah (IDR)</option>
            <option value="usd">US Dollar (USD)</option>
            <option value="eur">Euro (EUR)</option>
            <option value="myr">Malaysian Ringgit (MYR)</option>
            <option value="jpy">Japanese Yen (JPY)</option>
            <option value="gbp">British Pound (GBP)</option>
            <option value="aud">Australian Dollar (AUD)</option>
            <option value="sgd">Singapore Dollar (SGD)</option>
        </select>
        <br>
        <input class="submit" type="submit" value="Convert">
        <?php 
            if(isset($_GET['amount']) && isset($_GET['unit_from']) && isset($_GET['unit_convert'])) {
                // Format the number based on currency
                $formatted_amount = number_format($converted_amount, ($unit_convert == 'jpy' || $unit_convert == 'idr') ? 2 : 2);
                echo "<p>" . htmlspecialchars($_GET['amount']) . " " . strtoupper($unit_from) . " = " . 
                     $currency_symbol . " " . $formatted_amount . " " . strtoupper($unit_convert) . "</p>";
            }
        ?>
    </form>
    <script src="js/script.js"></script>
    <?php include 'layout/footer.html'?>
</body>
</html>