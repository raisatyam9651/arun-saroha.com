<?php
/**
 * Global Configuration
 * Used to calculate root paths and common settings
 */

// Calculate depth based on the number of slashes in the path
$depth = substr_count($_SERVER['PHP_SELF'], '/') - 1;

// Project root path relative to the current file
$root = str_repeat('../', max(0, $depth));

// If isHome is explicitly set, override depth calculation
if (isset($isHome) && $isHome) {
    $root = "./";
}

// Global Site Settings
$siteName = "Dr. Arun Saroha";
$phone = "+91 98187 78811";
$email = "query@drarunsaroha.com";

// SEO Canonical Calculation
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$currentPath = $protocol . "://" . $host . $_SERVER['REQUEST_URI'];
?>
