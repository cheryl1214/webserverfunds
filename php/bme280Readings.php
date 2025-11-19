<?php
if(isset($_POST['button'])){
    $raw = `cd raspberry-pi-bme280/ && ./bme280`;
    echo $raw;
    $deserialized = json_decode($raw, true);
    var_dump($deserialized);
    echo htmlspecialchars($deserialized);
}
?>