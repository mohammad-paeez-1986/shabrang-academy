<?php require_once __DIR__ . "/app_bootstrap.php"; ?>
<?php
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$canonical = $scheme . '://' . $host . $path;
$absoluteBase = $scheme . '://' . $host . $basePath;
$pageTitle = $pageTitle ?? 'آموزشگاه آرایشگری مردانه شبرنگ';
$pageDescription = $pageDescription ?? 'آموزشگاه آرایشگری مردانه شبرنگ در تهران';
$pageImage = $pageImage ?? '/assets/images/shabrang.jpeg';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= $basePath ?>/assets/images/favicon.png" type="image/x-icon">
    <title><?= $pageTitle ?></title>
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <meta name="theme-color" content="#a02c03" />
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $pageTitle ?>" />
    <meta property="og:description" content="<?= $pageDescription ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($absoluteBase . $pageImage, ENT_QUOTES, 'UTF-8'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { 'vazir': ['Vazirmatn', 'sans-serif'] },
                    colors: {
                        'brand': {
                            50: '#fef2f0', 100: '#fde1dc', 200: '#fcc8bd', 300: '#f9a393',
                            400: '#f47058', 500: '#eb4d2f', 600: '#d9351a', 700: '#b62814',
                            800: '#972415', 900: '#a02c03',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Vazirmatn', sans-serif; }
        html { scroll-behavior: smooth; }
        .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

<!-- NAVIGATION -->
<nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm z-50 border-b border-gray-100 shadow-sm">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <a href="<?= $basePath ?>/" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-brand-900 rounded-xl flex items-center justify-center text-white font-bold text-lg transition-transform group-hover:scale-105">S</div>
                <span class="font-bold text-gray-800 text-lg hidden sm:block">Shabrang</span>
            </a>
            <div class="hidden md:flex items-center gap-1">
                <a href="<?= $basePath ?>/#about" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">معرفی</a>
                <a href="<?= $basePath ?>/#courses" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">دوره ها</a>
                <a href="<?= $basePath ?>/#prices" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">شهریه</a>
                <a href="<?= $basePath ?>/#licence" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">مدرک</a>
                <a href="<?= $basePath ?>/#articles" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">مقالات</a>
                <a href="<?= $basePath ?>/#contact-us" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">تماس</a>
                <a href="<?= $basePath ?>/#contact-us" class="mr-2 px-5 py-2 bg-brand-900 text-white text-sm font-medium rounded-xl hover:bg-brand-800 transition-all hover:shadow-lg hover:shadow-brand-900/25">ثبت نام</a>
            </div>
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-gray-100 mt-2 pt-4">
            <div class="flex flex-col gap-1">
                <a href="<?= $basePath ?>/#about" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">معرفی</a>
                <a href="<?= $basePath ?>/#courses" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">دوره ها</a>
                <a href="<?= $basePath ?>/#prices" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">شهریه</a>
                <a href="<?= $basePath ?>/#licence" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">مدرک</a>
                <a href="<?= $basePath ?>/#articles" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">مقالات</a>
                <a href="<?= $basePath ?>/#contact-us" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">تماس</a>
                <a href="<?= $basePath ?>/#contact-us" class="mx-4 mt-2 px-5 py-3 bg-brand-900 text-white text-sm font-medium rounded-xl text-center hover:bg-brand-800 transition-all">ثبت نام</a>
            </div>
        </div>
    </div>
</nav>

<main class="pt-16">
