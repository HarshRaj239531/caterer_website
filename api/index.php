<?php

// 1. Prepare writable /tmp storage directories for serverless Vercel environment
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// 2. Direct Static Asset Streamer (checks both public and dist)
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$publicFile = __DIR__ . '/../public' . $uri;
$distFile = __DIR__ . '/../dist' . $uri;

$targetFile = (file_exists($publicFile) && is_file($publicFile))
    ? $publicFile
    : ((file_exists($distFile) && is_file($distFile)) ? $distFile : null);

if ($uri !== '/' && $targetFile) {
    $ext = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $mimes = [
        'css'   => 'text/css; charset=UTF-8',
        'js'    => 'application/javascript; charset=UTF-8',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'png'   => 'image/png',
        'webp'  => 'image/webp',
        'svg'   => 'image/svg+xml',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'json'  => 'application/json',
        'ico'   => 'image/x-icon',
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
    }
    header('Cache-Control: public, max-age=31536000');
    readfile($targetFile);
    exit;
}

// 3. Forward all dynamic requests to Laravel public entry point
require __DIR__ . '/../public/index.php';
