<?php
$city = $_GET['city'];
$area = $_GET['area'];
echo "<h1>Local Area: " . htmlspecialchars($area) . " in " . htmlspecialchars($city) . "</h1>";
?>