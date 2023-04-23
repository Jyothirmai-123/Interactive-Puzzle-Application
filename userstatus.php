<style>
    body{
            width:100%;
            height:100%;
            background:url("https://static.vecteezy.com/system/resources/previews/007/984/848/original/night-simple-background-with-moon-and-bats-illustration-of-halloween-scary-dark-background-vector.jpg");
            background-size: cover;
            overflow: hidden;
            color:white;
            }
    table{
            position: relative;
            margin-top: 15%;
            }
    th, td{
            border: 1px solid white;
            padding: 5px;
            }
</style>

<body>
    <center>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "elitmus";

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve all rows from the "users" table, sorted in descending order by "points"
    $sql = "SELECT * FROM users ORDER BY Points DESC";

    // Execute the query
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $conn->error;
    }
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Points</th>
        </tr>

        <?php
        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {?>
                <tr>
                    <td><?php echo $row["id"] ;?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["surname"] ;?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["password"];?></td>
                    <td><?php echo $row["Points"] ;?></td>
                </tr>
            <?php }
        } else {
            echo "<tr><td colspan='6'>0 results</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>
    </center>
</body>
