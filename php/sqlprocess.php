<!DOCTYPE html>
<html>
    <head>
        <title>SQL Process</title>
    </head>
    <body>
        <?php 
            $server = "localhost";
            $username = "rice2";
            $password = "letmee4tr1ce4ever";
            $database = "NaturalFood";

            $conn = mysqli_connect($server, $username, $password, $database);

            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            echo "Connected successfully<br>";

            $food_item = $_POST['food_item'];
            $weight = $_POST['weight'];
            $hunger = $_POST['hunger'];
            $energy = $_POST['energy'];
            $injury = $_POST['injury'];
            $poison = $_POST['poison'];
            $frost = $_POST['frost'];
            $burnt = $_POST['burnt'];
            $thorns = $_POST['thorns'];
            $drowsy = $_POST['drowsy'];
            $location = $_POST['location'];

            $sql = "INSERT INTO natural_food(food_item, weight, hunger, energy, injury, poison, frost, burnt, thorns, drowsy, location) 
                    VALUES ('$food_item', $weight, $hunger, $energy, $injury, $poison, $frost, $burnt, $thorns, $drowsy, '$location')";

            $result = mysqli_query($conn, $sql);

            echo $result ? "Success!" : "Failure: {mysqli_error($conn)}";

            mysqli_close($conn);
        ?>
    </body>
</html>