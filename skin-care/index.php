<?php
$pageTitle = 'مراقبت از پوست، روش ها و محصولات';
$pageDescription = 'مراقبت از پوست، روش های مختلف مراقبت از پوست، محصولات مراقبت از پوست، مفهوم مراقبت کردن از پوست چیست';
$pageImage = '/assets/images/skin-care.jpg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">مراقبت از پوست</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">مراقبت از پوست، روش ها و محصولات</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    پوست ما منشا، سبک زندگی، سن و وضعیت سلامتی ما را منعکس می کند. صنایع آرایشی وبهداشتی و داروسازی مجموعه وسیعی از محصولات و روشهای مراقبت از پوست را ارائه میکند.
                </p>
                <img src="<?= $basePath ?>/assets/images/skin-care.jpg" alt="مراقبت از پوست" class="w-full rounded-xl mb-6" />

                <h2 class="text-xl font-bold text-gray-900 mb-4">مفهوم مراقبت و محافظت از پوست</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    مفهوم مراقبت از پوست شامل پاکسازی، خوشبو کردن، تغییر ظاهر، محافظت و نگهداشتن پوست در وضعیت خوب می شود. امروزه مراقبت از پوست مدرن شامل پاکسازی، تسکین، ترمیم، تقویت و محافظت می شود.
                </p>

                <h2 class="text-xl font-bold text-gray-900 mb-4">روش های مراقبت از پوست</h2>
                <div class="space-y-3 mb-6">
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">حذف کثیفی، سبوم، میکروارگانیسم ها و سایر مواد غیر ضروری از پوست</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">کاهش علائم ناخوشایند پوستی مانند خارش، سوزش، بو</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">ترمیم پوست آسیب دیده</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">تقویت پوست آسیب دیده اما آسیب پذیر</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">محافظت از پوست در برابر آسیب های مختلف</p>
                    </div>
                </div>

                <img src="<?= $basePath ?>/assets/images/skin-care-products.jpg" alt="محصولات مراقبت از پوست" class="w-full rounded-xl mb-6" />

                <h3 class="text-lg font-bold text-gray-900 mb-3">محصولات پاکسازی پوست</h3>
                <p class="text-gray-600 leading-relaxed">
                    پاکسازی پوست شامل شستن، دوش گرفتن و حمام کردن است. پاک کننده ها محصولاتی هستند که کثیفی، سبوم، میکروارگانیسم ها و سلول های لایه شاخی پوست را از بین می برند.
                </p>

                <div class="bg-gray-50 rounded-xl p-5 mt-6">
                    <p class="text-sm text-gray-500">
                        <strong>منبع:</strong>
                        <a target="_blank" href="https://www.sciencedirect.com" class="text-brand-900 hover:underline">sciencedirect.com</a>
                    </p>
                </div>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
