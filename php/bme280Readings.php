<?php
if(isset($_POST['button'])){
    $raw = `cd /var/www/html/webserverfunds/raspberry-pi-bme280/ && ./bme280`;
    echo $raw;
    $deserialized = json_decode($raw, true);
    var_dump($deserialized);
    echo htmlspecialchars($deserialized);
}
?>