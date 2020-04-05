 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table

$sql = "CREATE TABLE User(
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
adress varchar(20),
email VARCHAR(50),
mobile VARCHAR(10),
password VARCHAR(20)

)";
if (mysqli_query($conn, $sql)) {
    echo "Table employee created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
