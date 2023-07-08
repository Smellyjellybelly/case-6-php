<?php
// Retrieve form data
$bookTitle = $_POST['book_title'];
$author = $_POST['author'];
$review = $_POST['review'];

// Sanitize inputs (optional but recommended)
$bookTitle = htmlspecialchars($bookTitle);
$author = htmlspecialchars($author);
$review = htmlspecialchars($review);

// Validate inputs (perform any necessary validation checks)

// Store the review in your database or perform further processing

// Redirect the user back to the review page or show a success message
header("Location: review_page.php");
exit();
?>