<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE g5dbMusic";
if (mysqli_query($conn, $sql)) {
//	echo "Database created successfully" . "<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

$sql = "CREATE TABLE g5dbMusic.Songs (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30) NOT NULL,
artist VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
//    echo "Table MyGuests created successfully" . "<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT INTO g5dbMusic.Songs (title, artist)
VALUES 
	('Test Title of a Song', 'Test Artist'),
	('Song II', 'Artist II')";

if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully" . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>