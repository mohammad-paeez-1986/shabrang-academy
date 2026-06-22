<?php

// Compute app base path so URLs work both in domain root and subfolders.
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$basePath = preg_replace('#/[^/]+/index\.php$#', '', $scriptName);
$basePath = preg_replace('#/index\.php$#', '', $basePath);
$basePath = rtrim((string) $basePath, '/');
