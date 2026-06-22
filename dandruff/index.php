<?php
$pageTitle = 'شوره سر، راه های درمان و عوامل ایجاد شوره سر';
$pageDescription = 'شوره سر چیست، چه عواملی باعث ایجاد شوره سر می شود، راه های درمان و برطرف کردن شوره سر چیست؟';
$pageImage = '/assets/images/dandruff.jpeg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">شوره سر</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">شوره سر چیست؟</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    شوره سر و درماتیت سبورئیک (SD/D) بیماریهای غیرطبیعی پوستی هستند که با پوسته پوسته شدن و خارش مشخص میشوند.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    در شوره سر، پوسته ها به دلیل چسبندگی، چرب، معمولا با التهاب آشکار همراه نیستند و به پوست سر محدود میشوند. در درماتیت سبورئیک پوسته ها چرب و زرد رنگ بوده و با التهاب مشاهده می شود.
                </p>
                <img src="<?= $basePath ?>/assets/images/dandruff.jpeg" alt="شوره سر" class="w-full rounded-xl mb-6" />

                <h2 class="text-xl font-bold text-gray-900 mb-4">شوره سر به چه عواملی بستگی دارد؟</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    براساس جدیدترین شواهد، به نظر می رسد علت شوره سر به سه عامل بستگی دارد: ترشحات غدد چربی، متابولیسم میکرو فلورال، و حساسیت فردی. شوره سر با رنگ زرد مایل به سفید، پوسته ریزی خشک، شل و خارش خفیف پوست سر مشخص می شود.
                </p>

                <h2 class="text-xl font-bold text-gray-900 mb-4">درمان شوره سر</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    مطالعات نشان می دهد که عوامل ضد پیتیروسپوروم مانند پیریتیون روی، سولفید سلنیوم، کتوکونازول و تربینافین در درمان شوره سر موثر هستند. روغن درخت چای در برابر طیف وسیعی از میکروارگانیسم ها فعال است و ممکن است در درمان شوره سر نیز موثر باشد.
                </p>

                <div class="bg-gray-50 rounded-xl p-5 mt-6">
                    <p class="text-sm text-gray-500">
                        <strong>منبع:</strong> Treatment of dandruff with 5% tea tree oil shampoo
                        <a target="_blank" href="https://www.sciencedirect.com" class="text-brand-900 hover:underline">sciencedirect.com</a>
                    </p>
                </div>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
