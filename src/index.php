<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $release_year = $_POST['release_year'];

    $sql = "INSERT INTO Books (title, release_year) VALUES (?, ?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$title, $release_year]);
}

$stmt = $conn->query("SELECT * FROM Books");
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Book reviews</h1>

    <form action="process_review.php" method="POST">
        <label for="book_title">Book Title:</label>
        <input type="text" id="book_title" name="book_title" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="review">Review:</label>
        <textarea id="review" name="review" required></textarea>

        <input type="submit" value="Submit">
    </form>

</body>

</html>