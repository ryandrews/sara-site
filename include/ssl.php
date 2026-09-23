<?php
// Centralized HTTPS redirection helper compatible with PHP 8.x
$host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '';
$parsedHost = parse_url('http://' . $host, PHP_URL_HOST);

// Bypass redirect during local development and CLI executions
$isLocal = in_array($parsedHost, ['localhost', '127.0.0.1', '::1'], true)
    || (php_sapi_name() === 'cli-server')
    || (php_sapi_name() === 'cli');

if (!$isLocal) {
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
        || (!empty($_SERVER['HTTP_X_FORWARDED_SSL']) && strtolower($_SERVER['HTTP_X_FORWARDED_SSL']) === 'on')
        || (!empty($_SERVER['SERVER_PORT']) && (int)$_SERVER['SERVER_PORT'] === 443);

    if (!$isHttps && !empty($host)) {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        header("Location: https://" . $host . $uri, true, 301);
        exit;
    }
}
