<?php
    $server = "localhost";
    $username = "rice2";
    $password = "letmee4tr1ce4ever";
    $database = "search_db";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: {mysqli_connect_error()}");
    }
    echo "Connected successfully";

    $search_query = isset($_GET['q']) ? $_GET['q'] : '';
    $ip_address = $_SERVER['REMOTE_ADDR'];
    

    $sql = "INSERT INTO searches (query, ip_address) VALUES ('$search_query', '$ip_address')";
    $result = mysqli_query($conn, $sql);


    mysqli_close($conn);

    header("Location: https://www.google.com/search?q=$search_query");
    exit();
?>