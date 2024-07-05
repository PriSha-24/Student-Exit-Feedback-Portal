<?php
// File to store the visitor count
$countFile = "visitor_count.txt";

// Read the current count
$count = (file_exists($countFile)) ? (int)file_get_contents($countFile) : 0;

// Increment the count
$count++;

// Save the updated count
file_put_contents($countFile, $count);

// Display the count
// Display the count
echo '<div class="visitor-count"><span class="label">Visitor Count : </span> <span class="count">' . $count . '</span></div>';
?>
<style>
    /* Style the "Visitor Count" label */
    .visitor-count .label {
    color: black; /* Label text color */
    font-weight: bold; /* Label font weight */
    font-size: 20px; /* Label font size */
}

/* Style the count */
   .visitor-count .count {
    color: black; /* Count text color */
    font-weight: bold; /* Count font weight */
    font-size: 24px; /* Count font size */
}

</style>