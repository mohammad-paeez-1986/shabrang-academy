<?php

$url = $_GET['url'] ?? '';

if ($url === '') {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
    if ($base !== '' && strpos($path, $base . '/') === 0) {
        $path = substr($path, strlen($base) + 1);
    }
    $url = $path;
}

$url = trim($url, '/');
$projectSlug = trim(basename(__DIR__), '/');
if ($projectSlug !== '' && strpos($url, $projectSlug . '/') === 0) {
    $url = substr($url, strlen($projectSlug) + 1);
    $url = trim($url, '/');
}
$parts = explode('/', $url);

// Homepage
if ($url === '') {
    require 'main.php';
    exit;
}

// Generic page routing: /slug -> slug/index.php (if folder route exists)
$pageFile = $url . '/index.php';
if ($url !== '' && preg_match('/^[^\/]+$/u', $url) && is_file($pageFile)) {
    require $pageFile;
    exit;
}

// Blog page: /blog
if ($parts[0] === 'blog' && count($parts) === 1) {
    require 'pages/blog.php';
    exit;
}

// Blog post: /blog/how-to-learn-php
if ($parts[0] === 'blog' && isset($parts[1])) {
    $slug = $parts[1];
    require 'pages/blog-post.php';
    exit;
}

// Product page: /product/iphone-15
if ($parts[0] === 'product' && isset($parts[1])) {
    $slug = $parts[1];
    require 'pages/product.php';
    exit;
}

// 404
http_response_code(404);
require 'not-found.php';
