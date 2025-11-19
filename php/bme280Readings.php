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
    </head>
    <body>
        <h2 style="margin: 8px; font-family: 'Century Gothic';">BME280 Sensor Readings</h2>
        <div style="font-family: 'Century Gothic'; margin-left: 8px;">
        Sensor: <?php echo htmlspecialchars($deserialized["sensor"]); ?> <br>
        Humidity: <?php echo htmlspecialchars($deserialized["humidity"]); ?> <br>
        Pressure: <?php echo htmlspecialchars($deserialized["pressure"]); ?> <br>
        Temperature: <?php echo htmlspecialchars($deserialized["temperature"]); ?> <br>
        Altitude: <?php echo htmlspecialchars($deserialized["altitude"]); ?> <br>
        Timestamp: <?php echo htmlspecialchars($deserialized["timestamp"]); ?>
        </div>
    </body>
</html>