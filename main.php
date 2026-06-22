<?php require_once __DIR__ . "/app_bootstrap.php"; ?>
<?php
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$canonical = $scheme . '://' . $host . $path;
$absoluteBase = $scheme . '://' . $host . $basePath;
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= $basePath ?>/assets/images/favicon.png" type="image/x-icon">
    <title>آموزشگاه آرایشگری مردانه شبرنگ، هزینه دوره ها، مدرک فنی حرفه ای</title>
    <meta name="description" content="آموزشگاه آرایشگری مردانه شبرنگ در تهران، دسترسی آسان، اقساط، پشتیبانی آموزش دوره های مختلف، دریافت مدرک معتبر فنی حرفه ای، مزایا و معایب شغل آرایشگری">
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <meta name="theme-color" content="#a02c03" />
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="آموزشگاه آرایشگری مردانه شبرنگ | دوره تخصصی + مدرک فنی حرفه ای" />
    <meta property="og:description" content="دوره های تخصصی آرایشگری مردانه در تهران با امکان پرداخت اقساطی، آموزش عملی و دریافت مدرک فنی حرفه ای." />
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($absoluteBase . '/assets/images/shabrang.jpeg', ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="آموزشگاه آرایشگری مردانه شبرنگ" />
    <meta name="twitter:description" content="آموزش تخصصی آرایشگری مردانه و دریافت مدرک فنی حرفه ای در تهران." />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BeautySalon",
            "name": "آموزشگاه آرایشگری مردانه شبرنگ",
            "url": "<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>",
            "image": "<?= htmlspecialchars($absoluteBase . '/assets/images/shabrang.jpeg', ENT_QUOTES, 'UTF-8'); ?>",
            "telephone": ["+98-21-33444301", "+98-912-5864597", "+98-910-4946213"],
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "IR",
                "addressLocality": "تهران",
                "streetAddress": "میدان خراسان، ابتدای خیابان هفده شهریور شمالی، ساختمان همشهری، طبقه اول، واحد دو"
            },
            "areaServed": "Tehran",
            "priceRange": "$$"
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'vazir': ['Vazirmatn', 'sans-serif'],
                    },
                    colors: {
                        'brand': {
                            50: '#fef2f0',
                            100: '#fde1dc',
                            200: '#fcc8bd',
                            300: '#f9a393',
                            400: '#f47058',
                            500: '#eb4d2f',
                            600: '#d9351a',
                            700: '#b62814',
                            800: '#972415',
                            900: '#a02c03',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Vazirmatn', sans-serif; }
        html { scroll-behavior: smooth; }
        .fade-in { animation: fadeIn 0.6s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased">

    <!-- NAVIGATION -->
    <nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="<?= $basePath ?>/" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-brand-900 rounded-xl flex items-center justify-center text-white font-bold text-lg transition-transform group-hover:scale-105">
                        S
                    </div>
                    <span class="font-bold text-gray-800 text-lg hidden sm:block">Shabrang</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-1">
                    <a href="#about" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">معرفی</a>
                    <a href="#courses" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">دوره ها</a>
                    <a href="#prices" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">شهریه</a>
                    <a href="#licence" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">مدرک</a>
                    <a href="#articles" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">مقالات</a>
                    <a href="#contact-us" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-brand-900 transition-colors rounded-lg hover:bg-gray-50">تماس</a>
                    <a href="#contact-us" class="mr-2 px-5 py-2 bg-brand-900 text-white text-sm font-medium rounded-xl hover:bg-brand-800 transition-all hover:shadow-lg hover:shadow-brand-900/25">ثبت نام</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-gray-100 mt-2 pt-4">
                <div class="flex flex-col gap-1">
                    <a href="#about" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">معرفی</a>
                    <a href="#courses" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">دوره ها</a>
                    <a href="#prices" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">شهریه</a>
                    <a href="#licence" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">مدرک</a>
                    <a href="#articles" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">مقالات</a>
                    <a href="#contact-us" class="px-4 py-3 text-sm font-medium text-gray-600 hover:text-brand-900 hover:bg-gray-50 rounded-lg transition-colors">تماس</a>
                    <a href="#contact-us" class="mx-4 mt-2 px-5 py-3 bg-brand-900 text-white text-sm font-medium rounded-xl text-center hover:bg-brand-800 transition-all">ثبت نام</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
   <header class="pt-16">
        <section class="relative bg-gradient-to-br from-brand-900 via-brand-800 to-brand-700 text-white overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="./assets/images/shabrang.jpg" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-brand-900/60 via-brand-800/65 to-brand-700/80"></div>
            </div>
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-20 right-20 w-72 h-72 bg-white rounded-full blur-3xl"></div>
                <div class="absolute bottom-10 left-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            </div>
            <div class="relative max-w-6xl mx-auto px-4 py-20 md:py-32">
                <div class="text-center">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        <span class="text-sm font-medium">ثبت نام دوره های جدید آغاز شد</span>
                    </div>
                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                        آموزشگاه آرایشگری مردانه شبرنگ
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-10 leading-relaxed">
                        آموزش تخصصی آرایشگری مردانه با رویکرد بازار کار، پشتیبانی آموزشی و مدرک فنی حرفه ای
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                        <a href="#prices" class="w-full sm:w-auto px-8 py-4 bg-white text-brand-900 font-bold rounded-2xl hover:bg-gray-100 transition-all hover:shadow-xl hover:shadow-black/10 text-center">
                            مشاهده شهریه دوره ها
                        </a>
                        <a href="#contact-us" class="w-full sm:w-auto px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-bold rounded-2xl border border-white/20 hover:bg-white/20 transition-all text-center">
                            مشاوره و ثبت نام
                        </a>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-3">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            مدرک رسمی فنی حرفه ای
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            پرداخت شهریه اقساطی
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            آموزش عملی بازار محور
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <main>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block text-brand-900 font-bold text-sm mb-3">درباره آموزشگاه</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 leading-tight">
                        معرفی آموزشگاه آرایشگری مردانه شبرنگ
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        آموزشگاه آرایشگری مردانه شبرنگ در تهران (میدان خراسان) زیر نظر سازمان فنی و حرفه ای کشور بوده و دارای کادری مجرب می باشد. این آموزشگاه پیرایش مردانه، با ارایه دوره های آرایشگری مردانه، شما را تا دریافت مدرک فنی حرفه ای همراهی خواهد کرد و همچنین برای رسیدن به مقصد کسب و کار و ایجاد شغل.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        آموزشگاه آرایشگری مردانه یک مکان بسیار مناسب برای افرادی است که علاقه‌مند به کسب مهارت در زمینه آرایشگری مردانه هستند. این آموزشگاه از بهترین مربیان و متخصصین در زمینه آرایشگری مردانه تشکیل شده است.
                    </p>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-brand-100 rounded-3xl transform rotate-3"></div>
                    <img src="./assets/images/shabrang.jpeg" alt="آموزشگاه آرایشگری مردانه شبرنگ" class="relative rounded-2xl shadow-xl right-10 object-cover" />
                </div>
            </div>
        </div>
    </section>

    <!-- WHY US SECTION -->
    <section id="courses" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">چرا شبرنگ؟</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    چرا باید به آموزشگاه آرایشگری مردانه برویم؟
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    در گذشته بسیاری از علاقه مندان به آرایشگری جهت یادگیری این هنر و حرفه مجبور بودند مدت زمانی را در کنار افرادی که مشغول به شغل آرایشگری بودند سپری کنند.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <img src="./assets/images/shabrang-coach.jpg" alt="آموزشگاه آرایشگری مردانه شبرنگ" class="rounded-2xl shadow-lg w-full" />
                    <p class="text-sm text-gray-500 mt-3 text-center">داوری مسابقات آرایشگری مردانه توسط مربی آموزشگاه</p>
                </div>
                <div class="order-1 md:order-2 space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">آموزش علمی و تجربی</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">در آموزشگاه شبرنگ شما می توانید به صورت علمی و تجربی با این هنر و حرفه آشنا شوید و به تدریج به آن تسلط پیدا کنید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">محیط صمیمی</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">یکی از نکاتی که می‌تواند شما را در آموزش آرایشگری کمک نماید، محیط صمیمی آموزشگاه است و یادگیری سریع تر خواهد شد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">مربیان مجرب</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">آموزش صحیح و روانشناسی شده در همه حرفه ها، خصوصا در آموزش آرایشگری مردانه باعث ایجاد اعتماد به نفس و مهارت در فرد خواهد شد.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COSTS SECTION -->
    <section id="costs" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">هزینه دوره ها</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    هزینه آموزش آرایشگری مردانه چقدر است؟
                </h2>
            </div>
            <div class="max-w-3xl mx-auto bg-gray-50 rounded-3xl p-8 md:p-12">
                <p class="text-gray-600 leading-relaxed mb-6">
                    هر شخصی که علاقه‌مند به آرایشگری و پیرایش می باشد ابتدا باید از طریق آموزشگاه های آرایشگری مردانه که تحت نظر سازمان فنی و حرفه ای می باشد دوره های مربوطه را بگذراند.
                </p>
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 mb-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">پرداخت اقساطی</h3>
                            <p class="text-sm text-gray-500">امکان پرداخت شهریه به صورت اقساط</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        هزینه آموزش آرایشگری مردانه (دوره درجه ۲ و دیگر دوره ها) را کارآموزان در آموزشگاه شبرنگ می‌توانند به صورت اقساط طی دو ماه پرداخت نمایند.
                    </p>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    پس از اتمام این دوره و گذراندن امتحانات تئوری و عملی می توانند مدرک رسمی و بین المللی سازمان فنی و حرفه ای و مجوز بازگشایی سالن آرایشگری مردانه خود را دریافت نمایند.
                </p>
            </div>
        </div>
    </section>

    <!-- BEST ACADEMY SECTION -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">انتخاب بهترین</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    بهترین آموزشگاه آرایشگری مردانه در تهران
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">مدرک معتبر</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">دریافت مدرک رسمی و بین المللی سازمان فنی و حرفه ای کشور</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">آموزش حرفه ای</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">دوره های تئوری و عملی زیر نظر مربیان مجرب و با تجربه</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">اقساط بدون بهره</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">امکان پرداخت شهریه به صورت اقساط طی دو ماه</p>
                </div>
            </div>
            <div class="mt-12 bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100">
                <p class="text-gray-600 leading-relaxed">
                    دوره ای که شما در هر یک از آموزشگاه های آرایشگری مردانه می گذرانید،‌ روی دیدگاه شما نسبت به شغل آرایشگری تاثیر خواهد داشت. محیطی که در آنجا حضور خواهید داشت، مربیانی که در کنار آنها به یادگیری می پردازید. اگر مربیان حاضر در آموزشگاه تجربه شغل آرایشگری را داشته باشند، تا چه اندازه میتوانند راهنمای مناسبی برای شما در آینده کاریتان باشند؟
                </p>
            </div>
        </div>
    </section>

    <!-- FREE COURSE SECTION -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="bg-gradient-to-br from-brand-900 to-brand-700 rounded-3xl p-8 md:p-12 text-white relative overflow-hidden">
                <div class="absolute top-0 left-0 w-40 h-40 bg-white/10 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 right-0 w-64 h-64 bg-white/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
                <div class="relative">
                    <span class="inline-block bg-white/20 rounded-full px-4 py-1 text-sm font-medium mb-4">ویژه هنرجویان</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold mb-4">
                        دوره تکمیلی رایگان آموزشگاه شبرنگ
                    </h2>
                    <p class="text-white/80 leading-relaxed mb-6 max-w-3xl">
                        خبر خوش برای آن دسته از هنرجویان که آشنایی حدودی با آرایشگری دارند یا مدرک درجه دو خود را گرفته اما بدلیل دوری از میادین آرایشگری فراموش کرده یا به اصطلاح دستشان خوابیده است.
                    </p>
                    <p class="text-white/80 leading-relaxed mb-6 max-w-3xl">
                        آموزشگاه آرایشگری مردانه شبرنگ در تهران در نظر دارد برای این دسته از هنرجویان دوره تکمیلی برگزار نماید. این دوره که مدت آن حدود یک ماه هست، هنرجو از ابتدا با مدل موها کار میشود سپس مدل موهای جدید مانند اسپایکی و زیزو و ... به آنها آموزش داده میشود.
                    </p>
                    <div class="inline-flex items-center gap-2 bg-green-500/20 rounded-full px-4 py-2 text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        در ضمن دوره اضافه شده بطور رایگان می‌باشد
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COURSES SECTION -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">دوره های آموزشی</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    دوره های قابل ارایه در آموزشگاه
                </h2>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-brand-900 font-bold">۱</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">دوره پیرایش درجه دو</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        ابتدایی ترین رشته در آموزش آرایشگری مردانه پیرایش درجه دو می باشد. برای عزیزانی که تا به حال هیچ شناختی نسبت به آرایشگری ندارند گذراندن این دوره ضروری می باشد.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-brand-900 font-bold">۲</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">دوره پیرایش درجه یک</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        کلاسهای دوره درجه یک مکمل کلاسهای درجه دو می باشد که برای ارتقای کیفیت و کارایی آرایشگر و جهت انجام خدمات بیشتر به مشتریان می باشد.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-brand-900 font-bold">۳</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">کاربرد مواد شیمیایی</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        در این دوره هنر‌آموزان عزیز در ابتدا با مواد شیمیایی مورد استفاده در آرایشگری آشنا می شوند و کاربرد هر کدام از آنها را آموزش می بینند.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-brand-900 font-bold">۴</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">متعادل سازی چهره</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        در این دوره هنر‌آموزان عزیز شناخت کامل با ابزار میکاپ و انواع میکاپ ها و گریم ها و مدل موهای مختلف و متعادل سازی چهره پیدا می‌کنند.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICES SECTION -->
    <section id="prices" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">لیست قیمت ها</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    شهریه دوره های مختلف
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">در آموزشگاه آرایشگری مردانه شبرنگ شهریه میتواند به صورت اقساطی در چندین قسط پرداخت شود</p>
            </div>
            <div class="max-w-3xl mx-auto">
                <div class="bg-gray-50 rounded-3xl overflow-hidden">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-brand-900 text-white">
                                <th class="px-6 py-4 text-right font-bold">عنوان دوره</th>
                                <th class="px-6 py-4 text-left font-bold">قیمت (تومان)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                <td class="px-8 py-4 text-gray-800 font-medium">پیرایش درجه ۲</td>
                                <td class="px-8 py-4 text-brand-900 font-bold text-left">۱۰,۰۰۰,۰۰۰</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                <td class="px-8 py-4 text-gray-800 font-medium">پیرایش درجه ۱</td>
                                <td class="px-8 py-4 text-brand-900 font-bold text-left ">۶,۰۰۰,۰۰۰</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                <td class="px-8 py-4 text-gray-800 font-medium">متعادل سازی چهره</td>
                                <td class="px-8 py-4 text-brand-900 font-bold text-left ">۷,۰۰۰,۰۰۰</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                <td class="px-8 py-4 text-gray-800 font-medium">چهره پردازی</td>
                                <td class="px-8 py-4 text-brand-900 font-bold text-left ">۷,۰۰۰,۰۰۰</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                <td class="px-8 py-4 text-gray-800 font-medium">ترمیم و پروتز مو</td>
                                <td class="px-8 py-4 text-brand-900 font-bold text-left ">۶,۰۰۰,۰۰۰</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                <td class="px-8 py-4 text-gray-800 font-medium">کاربرد مواد شیمیایی</td>
                                <td class="px-8 py-4 text-brand-900 font-bold text-left ">۹,۸۰۰,۰۰۰</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                <td class="px-8 py-4 text-gray-800 font-medium">بهداشت کار ناخن</td>
                                <td class="px-8 py-4 text-brand-900 font-bold text-left ">۴,۵۰۰,۰۰۰</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-center text-gray-500 text-sm mt-6">
                    برای ورود به شغل آرایشگری مردانه، و دریافت جواز کسب باید حداقل دوره پیرایش درجه ۲ مردانه را در یکی از آموزشگاه های آرایشگری مردانه بگذرانید.
                </p>
            </div>
        </div>
    </section>

    <!-- LICENSE SECTION -->
    <section id="licence" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">مدرک فنی حرفه ای</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    دریافت مدرک فنی حرفه ای آرایشگری مردانه
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">مدرک بین المللی سازمان فنی و حرفه ای کشور</p>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <span class="w-8 h-8 bg-brand-100 rounded-lg flex items-center justify-center text-brand-900 text-sm">۱</span>
                        آزمون تئوری و عملی
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        هنرجویان پس از طی دوره آموزش در آموزشگاه جهت شرکت در آزمون های فنی حرفه ای معرفی می شوند. آزمون ها در دو قسمت تئوری و عملی گرفته می شوند.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <span class="w-8 h-8 bg-brand-100 rounded-lg flex items-center justify-center text-brand-900 text-sm">۲</span>
                        منابع مطالعاتی
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        هنرجویان جهت قبولی در امتحان تئوری ملزم به خواندن کتاب مربوط به رشته هستند. سوالات تئوری ۴۰ سوال در زمان ۴۰ دقیقه می باشد.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <span class="w-8 h-8 bg-brand-100 rounded-lg flex items-center justify-center text-brand-900 text-sm">۳</span>
                        آزمون عملی
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        در این آزمون هنرجویان موظف به انجام یک اصلاح کامل می باشند. ممتحن برای هر قسمت نمره خاصی در نظر میگیرد.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <span class="w-8 h-8 bg-brand-100 rounded-lg flex items-center justify-center text-brand-900 text-sm">۴</span>
                        دریافت مدرک
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        پس از قبولی در هر دو آزمون تقریبا بعد از یک الی دو هفته گواهینامه مهارت هنرجویان آماده می باشد.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <span class="w-8 h-8 bg-brand-100 rounded-lg flex items-center justify-center text-brand-900 text-sm">۵</span>
                        حداقل نمره قبولی
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        حداقل نمره جهت قبولی ۵۰ از ۱۰۰ می باشد.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <span class="w-8 h-8 bg-brand-100 rounded-lg flex items-center justify-center text-brand-900 text-sm">۶</span>
                        در صورت مردودی
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        در صورت مردودی در امتحان و یا غیبت، هنرجویان موظف به پرداخت دوباره هزینه فیش مجدد می باشند.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- STEPS SECTION -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">مراحل آموزش</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    مراحل آموزش و دریافت مدرک
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-brand-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-extrabold text-brand-900">۱</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">مشاوره رایگان و ثبت‌نام</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        علاقمندان عزیز میتوانند برای دریافت مشاوره رایگان، گرفتن پاسخ سوال هایشان در مورد آموزشگاه، دوره ها، مراحل و یا موارد مرتبط دیگر با ما تماس بگیرند.
                    </p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-brand-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-extrabold text-brand-900">۲</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">گذراندن دوره آموزش</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        ابتدا چهار جلسه به صورت تئوری خواهد بود. پس از گذراندن آن و آشنایی با نحوه اصلاح، خط بندی و دیگر مفاهیم آرایشگری مردانه بقیه جلسه ها به صورت عملی خواهند بود.
                    </p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-brand-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-extrabold text-brand-900">۳</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">شرکت در امتحان و دریافت مدرک</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        پس از پایان یافتن کلاس های تئوری و عملی کارآموزان به سازمان فنی حرفه ای معرفی می‌شوند و پس از قبولی مدرک معتبر فنی حرفه ای را دریافت می‌نمایند.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS SECTION -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">مزیت های ما</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    مزیت های آموزشگاه شبرنگ
                </h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">شهریه اقساطی</h3>
                    <p class="text-gray-600 text-sm">پرداخت شهریه به صورت اقساط</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">زمان‌بندی دلخواه</h3>
                    <p class="text-gray-600 text-sm">انتخاب زمان مناسب کلاس</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">دسترسی آسان</h3>
                    <p class="text-gray-600 text-sm">نزدیک به مترو</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-brand-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">مربی‌های مجرب</h3>
                    <p class="text-gray-600 text-sm">مربیان جوان و باتجربه</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REGISTRATION INFO -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-3xl p-8">
                    <h3 class="font-bold text-gray-900 text-xl mb-6 flex items-center gap-3">
                        <span class="w-10 h-10 bg-brand-100 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </span>
                        مدارک لازم برای ثبت نام
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <span class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </span>
                            کپی شناسنامه
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <span class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </span>
                            کپی کارت ملی
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <span class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </span>
                            یک قطعه عکس ۴×۳
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-3xl p-8">
                    <h3 class="font-bold text-gray-900 text-xl mb-6 flex items-center gap-3">
                        <span class="w-10 h-10 bg-brand-100 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </span>
                        ساعت کاری آموزشگاه
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between bg-white p-4 rounded-xl">
                            <span class="text-gray-700 font-medium">شنبه تا چهارشنبه</span>
                            <span class="text-brand-900 font-bold">۹ صبح تا ۷ غروب</span>
                        </div>
                        <div class="flex items-center justify-between bg-white p-4 rounded-xl">
                            <span class="text-gray-700 font-medium">پنج شنبه ها</span>
                            <span class="text-brand-900 font-bold">۱۰ صبح تا ۱ عصر</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact-us" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">تماس با ما</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    آدرس و تلفن آموزشگاه
                </h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-3xl p-8">
                    <h3 class="font-bold text-gray-900 text-xl mb-6">شماره های تماس</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">شماره ثابت</p>
                                <a href="tel:02133444301" class="text-lg font-bold text-gray-900 hover:text-brand-900 transition-colors">۰۲۱-۳۳۴۴۴۳۰۱</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">شماره همراه</p>
                                <div class="flex gap-4">
                                    <a href="tel:09125864597" class="text-lg font-bold text-gray-900 hover:text-brand-900 transition-colors">۰۹۱۲۵۸۶۴۵۹۷</a>
                                    <a href="tel:09104946213" class="text-lg font-bold text-gray-900 hover:text-brand-900 transition-colors">۰۹۱۰۴۹۴۶۲۱۳</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-3xl p-8">
                    <h3 class="font-bold text-gray-900 text-xl mb-6">آدرس آموزشگاه</h3>
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            تهران - میدان خراسان - ابتدای خیابان هفده شهریور شمالی - روبروی بانک کشاورزی - ساختمان همشهری - طبقه اول واحد دو
                        </p>
                    </div>
                    <a href="https://www.google.com/maps/place/%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DA%AF%D8%A7%D9%87+%D8%A2%D8%B1%D8%A7%DB%8C%D8%B4%DA%AF%D8%B1%DB%8C+%D9%85%D8%B1%D8%AF%D8%A7%D9%86%D9%87+%D8%B4%D8%A8%D8%B1%D9%86%DA%AF%E2%80%AD/@35.667065,51.4456684,17z/data=!4m14!1m7!3m6!1s0x3f91fdca15c24849:0xeb1ab3a576fc3435!2z2KLZhdmI2LLYtNqv2KfZhyDYotix2KfbjNi02q_YsduMINmF2LHYr9in2YbZhyDYtNio2LHZhtqv!8m2!3d35.667065!4d51.4456684!16s%2Fg%2F11llj0g09t!3m5!1s0x3f91fdca15c24849:0xeb1ab3a576fc3435!8m2!3d35.667065!4d51.4456684!16s%2Fg%2F11llj0g09t?entry=ttu&g_ep=EgoyMDI2MDIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="inline-flex items-center gap-2 bg-brand-900 text-white px-6 py-3 rounded-xl font-medium hover:bg-brand-800 transition-all hover:shadow-lg hover:shadow-brand-900/25">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        مشاهده روی نقشه
                    </a>
                    <div class="mt-6 p-4 bg-white rounded-xl border border-gray-100">
                        <p class="text-sm text-gray-600 flex items-center gap-2">
                            <svg class="w-5 h-5 text-brand-900 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            به وسیله ایستگاه متروی هفده شهریور در خط ۷، یا ایستگاه میدان خراسان در خط ۶ به راحتی با مترو می توانید به آموزشگاه دسترسی داشته باشید.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLES SECTION -->
    <section id="articles" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block text-brand-900 font-bold text-sm mb-3">مقالات</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
                    مقاله های مرتبط به آرایشگری
                </h2>
            </div>
            <div class="grid max-md:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                <a href="hair-care" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/hair-care-thumb.jpg" alt="مراقبت از موها" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">مراقبت از موها، نکات شستن موها</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">شستن مو چند بار در هفته؟، نحوه صحیح شانه زدن مو، خشک کردن موها با روش مناسب</p>
                    </div>
                </a>
                <a href="hair-loss" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/hair-loss-thumb.jpg" alt="ریزش مو" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">ریزش مو، جلوگیری و علل آن</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">عوامل موثر در ریزش موها، کم خونی، عوامل ارثی، استرس، کمبود پروتئین</p>
                    </div>
                </a>
                <a href="how-to-become-hairdresser" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/how-to-become-hairdresser.thumb.jpg" alt="آرایشگر حرفه ای" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">چگونه یک آرایشگر حرفه ای شویم؟</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">الزامات برای ورود به شغل آرایشگری، نحوه و طرز برخورد با مشتری</p>
                    </div>
                </a>
                <a href="suitable-hairstyle" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/suitable-hairstyle.thumb.jpg" alt="مدل موی مناسب" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">چه مدل مویی بهم میاد؟</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">تشخیص فرم و شکل صورت، مدل موی مناسب برای صورت های گرد، بیضی</p>
                    </div>
                </a>
                <a href="style-curly-hair" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/curly-hair.thumb.jpeg" alt="حالت دادن موهای فر" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">چگونه موهای فر را حالت دهیم؟</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">نحوه شانه کردن موهای فر، استفاده از مواد حالت دهنده</p>
                    </div>
                </a>
                <a href="hairdressing-job" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/hairdressing-job.thumb.jpg" alt="آرایشگری شغل خوبی است؟" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">آیا آرایشگری شغل خوبی است؟</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">آیا این شغل میتواند برای شما انتخاب درستی باشد؟</p>
                    </div>
                </a>
                <a href="hairdressing-course" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/hairdressing-course.thumb.jpg" alt="دوره پیرایش" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">دوره پیرایش درجه یک و دو</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">مراحل آموزش آرایشگری دوره پیرایش درجه دو و یک</p>
                    </div>
                </a>
                <a href="dandruff" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/dandruff.thumb.jpeg" alt="شوره سر" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">شوره سر، راه های درمان</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">شوره سر چیست، چه عواملی باعث ایجاد شوره سر می شود</p>
                    </div>
                </a>
                <a href="skin-care" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/skin-care-thumbnail.jpg" alt="مراقبت از پوست" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">مراقبت از پوست، روش ها و محصولات</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">روش های مختلف مراقبت از پوست، محصولات مراقبت از پوست</p>
                    </div>
                </a>
                <a href="skin-cleaning" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-video overflow-hidden">
                        <img src="./assets/images/skin-cleaning.jpeg" alt="پاکسازی پوست" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-brand-900 transition-colors">پاکسازی پوست</h3>
                        <p class="text-gray-600 text-sm line-clamp-2">توضیح چندین روش مختلف برای پاکسازی پوست</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-brand-900 rounded-xl flex items-center justify-center text-white font-bold">
                        S
                    </div>
                    <div>
                        <p class="font-bold">آموزشگاه آرایشگری مردانه شبرنگ</p>
                        <p class="text-gray-400 text-sm">آموزش تخصصی پیرایش مردانه در تهران</p>
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <a href="#prices" class="text-gray-400 hover:text-white transition-colors text-sm">شهریه دوره ها</a>
                    <a href="#licence" class="text-gray-400 hover:text-white transition-colors text-sm">مدرک فنی حرفه ای</a>
                    <a href="#contact-us" class="text-gray-400 hover:text-white transition-colors text-sm">تماس با آموزشگاه</a>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-500 text-sm">© تمامی حقوق برای آموزشگاه آرایشگری مردانه شبرنگ محفوظ است.</p>
            </div>
        </div>
    </footer>

    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-md');
            } else {
                nav.classList.remove('shadow-md');
            }
        });
    </script>
</body>

</html>
