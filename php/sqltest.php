<!DOCTYPE html>
<html>
    <head>
        <title>SQL Response</title>
        <?php
            $server = "localhost";
            $username = "rice2";
            $password = "letmee4tr1ce4ever";
            $database = "NaturalFood";
            $conn = mysqli_connect($server, $username, $password, $database);

            // Check for successful connection
            if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select * from natural_food;";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        <form action="javascript.php" method="post">
            <label for="food">Food Item:</label>
            <select id="food" name="food">
                <?php
                    foreach ($result as $row) {
                        echo "<option value='" . $row['id'] . "'>" . $row['food_item'] . "</option>";
                    }
                    mysqli_close($conn);
                ?>
            </select>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>