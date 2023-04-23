
<?php
// Establishing the database connection
$host = "localhost";
$username = "root";
$password = " ";
$database = "elitmus";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Retrieving the current user's points from the localStorage
$currentPoints = $_POST['current'];

// Updating the user's points in the database
session_start();
$username = $_SESSION['name'];

$sql = "UPDATE users SET Points='" . $currentPoints . "' WHERE name='" . $username . "'";

if (mysqli_query($conn, $sql)) {
    echo "Points updated successfully!";
   
   
} else {
    echo "Error updating points: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
