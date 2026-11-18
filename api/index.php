<?php

// Prepare writable /tmp storage directories for serverless Vercel environment
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

// Forward Vercel serverless requests to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
