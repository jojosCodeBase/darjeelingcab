<?php
session_start();

$countFile = 'visitorCount.txt';

// Check if the visitor has already been counted in this session
if (!isset($_SESSION['counted'])) {
    // Check if the count file exists
    if (file_exists($countFile)) {
        // Read the current count from the file
        $count = (int)file_get_contents($countFile);
        // Increment the count
        $count++;
    } else {
        // If the count file doesn't exist, start from 1
        $count = 1;
    }

    // Write the updated count back to the file
    file_put_contents($countFile, $count);

    // Set a session variable to mark this visitor as counted
    $_SESSION['counted'] = true;
} else {
    // If the visitor has already been counted in this session, retrieve the count without incrementing
    $count = (int)file_get_contents($countFile);
}

// Echo the visitor count
// echo $count;
?>
