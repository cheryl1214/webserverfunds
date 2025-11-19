<?php
if(isset($_POST['button'])){
    $raw = `cd /var/www/html/webserverfunds/raspberry-pi-bme280/ && ./bme280`;
    echo $raw;
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
        <h2>BME280 Sensor Readings</h2>
        <div style="color: white;
            background: rgb(66, 139, 174); 
            border-radius: 10px;
            padding: 10px; 
            font-family: 'Courier New', Courier, monospace;
            font-size: 1em; ">
        Sensor: <?php echo htmlspecialchars($deserialized["sensor"]); ?>
        Humidity: <?php echo htmlspecialchars($deserialized["humidity"]); ?>
        Pressure: <?php echo htmlspecialchars($deserialized["pressure"]); ?>
        Temperature: <?php echo htmlspecialchars($deserialized["temperature"]); ?>
        Altitude: <?php echo htmlspecialchars($deserialized["altitude"]); ?>
        Timestamp: <?php echo htmlspecialchars($deserialized["timestamp"]); ?>
        </div>
    </body>
</html>