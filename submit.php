<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grāmatas</title>
</head>
<body>
    <p1>Dati veiksmīgi nosūtīti</p1>
</body>
</html>


<?php

$values = ['name' => $_POST["name"], 'surname' => $_POST["surname"], 'level' => $_POST["level"], 'title' => $_POST["title"], 'description' => $_POST["description"]];



$servername = "localhost:3306";
$username = "book_review_user_24092025";
$password = "password";
$dbname="book_review_24092025";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $fullname = $values['name'] . " " .  $values['surname'];
  $title = $values['title'];
  $description = $values['description'];
  $rating = $values['rating'];
  $sql = "INSERT INTO book_review (full_name, book_title, review_text, rating)
    VALUES ($fullname, $title, $description, $rating)";
$conn->exec($sql);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
