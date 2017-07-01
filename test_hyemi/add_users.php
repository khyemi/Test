<?php

$servername = "localhost";
$username = "root"; //default
$password = "root"; //default

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


$dbname = "myDB";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Candidates (
firstname VARCHAR(30),
lastname VARCHAR(30),
gender VARCHAR(10),
languages VARCHAR(50),
skills VARCHAR(50),
comments TEXT
)";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Table Candidates created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

if(isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$languages = implode(', ', $_POST['languages']);
	$skills = implode(', ', $_POST['skills']);
	$comments = $_POST['comments'];

	// sql to insert data
	$sql = "INSERT INTO Candidates (firstname, lastname, gender, languages, skills, comments)
			VALUES ('".$firstname."' , '"
					 .$lastname."' , '"
					 .$gender."' , '"
					 .$languages."' , '"
					 .$skills."' , '"
					 .$comments."')";

	if (mysqli_query($conn, $sql)) {
		echo "Entered Data successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "<br>";
}

mysqli_close($conn);

?>
