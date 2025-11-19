<?php
if(isset($_POST['button'])){
    $toggle = shell_exec('gpio toggle 0');
    echo $toggle;
    $read = shell_exec('gpio read 0');
    echo htmlspecialchars($read);
}
?>