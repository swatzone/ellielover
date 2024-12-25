<?php
header('Content-Type: application/json');

// Set the directory to scan
$directory = './';

// Get all PNG files
$images = glob($directory . "*.png");

// Clean up the file paths
$images = array_map(function($path) {
    return basename($path);
}, $images);

// Return the list of images
echo json_encode($images);
