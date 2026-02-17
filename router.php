<?php

$request = trim($_SERVER['REQUEST_URI'], '/');

// 1. Check if page exists in new structure
// $page = findPageInDatabase($request);
if ($request == "hello-world") {
    $page = ['new_url' => '/search/hello-world']; // Mocked for demonstration

}

if ($page) {
    header("Location: " . $page['new_url'], true, 301);
    exit;
}

// 2. Try search
$searchResult = searchInDatabase($request);

if ($searchResult) {
    header("Location: /search/" . urlencode($request));
    exit;
}

// 3. If nothing found → 404
http_response_code(404);
include("404.php");
exit;

?>