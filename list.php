<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p1><a href="index.html">Index</a></p1>
</body>
</html>

<?php

$servername = "localhost:3306";
$username = "book_review_user_24092025";
$password = "password";
$dbname="book_review_24092025";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book_review";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    
    echo "id: " . $row["id"]. "\nVārds Uzvārds: " . $row["full_name"]. "\nGrāmatas nosaukums: " . $row["book_title"]. "\nApraksts " . $row['review_text'] . "\nVērtējums " .  $row['rating'] ."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();