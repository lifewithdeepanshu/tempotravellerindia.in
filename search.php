<?php

$q = $_GET['q'] ?? 'no title';
$page = $_GET['page'] ?? 0;
echo "<h1>Search Results for: " . htmlspecialchars($q) . "</h1>";
echo "<p>Page: " . htmlspecialchars($page) . "</p>";
?>