<?php
// Retrieve book reviews from your database or any other data source
$reviews = [
    ['title' => 'Book 1', 'author' => 'Author 1', 'review' => 'Review 1'],
    ['title' => 'Book 2', 'author' => 'Author 2', 'review' => 'Review 2'],
    ['title' => 'Book 3', 'author' => 'Author 3', 'review' => 'Review 3'],
    // Additional reviews...
];

// Iterate over each review and display them
foreach ($reviews as $review) {
    $title = $review['title'];
    $author = $review['author'];
    $reviewText = $review['review'];

    // Display the review using HTML structure
    echo "<div class='review'>";
    echo "<h2>$title</h2>";
    echo "<p><strong>Author:</strong> $author</p>";
    echo "<p><strong>Review:</strong> $reviewText</p>";
    echo "</div>";
}
?>
