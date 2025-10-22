<!DOCTYPE html>
<html>
    <head>
        <title>SQL Response</title>
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

            $filter = $_POST['filter'];

            $sql = "SELECT * FROM natural_food WHERE food_item LIKE '%$filter%'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>
                        <tr>
                            <th>Food Item</th>
                            <th>Weight</th>
                            <th>Hunger</th>
                            <th>Energy</th>
                            <th>Injury</th>
                            <th>Poison</th>
                            <th>Frost</th>
                            <th>Burnt</th>
                            <th>Thorns</th>
                            <th>Drowsy</th>
                            <th>Location</th>
                        </tr>";
                foreach ($result as $row) {
                    echo "<tr>
                            <td>{$row['food_item']}</td>
                            <td>{$row['weight']}</td>
                            <td>{$row['hunger']}</td>
                            <td>{$row['energy']}</td>
                            <td>{$row['injury']}</td>
                            <td>{$row['poison']}</td>
                            <td>{$row['frost']}</td>
                            <td>{$row['burnt']}</td>
                            <td>{$row['thorns']}</td>
                            <td>{$row['drowsy']}</td>
                            <td>{$row['location']}</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "No results found.";
            }

            mysqli_close($conn);
        ?>
    </body>
</html>