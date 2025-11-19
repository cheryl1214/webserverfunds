<?php
if(isset($_POST['button'])){
    $raw = `cd /var/www/html/webserverfunds/raspberry-pi-bme280/ && ./bme280`;
    $deserialized = json_decode($raw, true);
    var_dump($deserialized);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BME280 Readings</title>
        <style>
            h2{ margin: 0px; margin-left: 8px;}
            body {
            font-family: "Century Gothic";
        }
        </style>
    </head>
    <body>
        <h2>BME280 Sensor Readings</h2>
        <div style="font-family: 'Century Gothic'; color: white; border-radius: 10px; padding: 20px;">
        Sensor: <?php echo htmlspecialchars($deserialized["sensor"]); ?>
        Humidity: <?php echo htmlspecialchars($deserialized["humidity"]); ?>
        Pressure: <?php echo htmlspecialchars($deserialized["pressure"]); ?>
        Temperature: <?php echo htmlspecialchars($deserialized["temperature"]); ?>
        Altitude: <?php echo htmlspecialchars($deserialized["altitude"]); ?>
        Timestamp: <?php echo htmlspecialchars($deserialized["timestamp"]); ?>
        </div>
    </body>
</html>