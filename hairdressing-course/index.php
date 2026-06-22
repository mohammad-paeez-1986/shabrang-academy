<?php
$pageTitle = 'دوره های درجه یک و دو آرایشگری مردانه، دریافت مدرک فنی حرفه ای';
$pageDescription = 'دریافت مدرک فنی حرفه ای، پیرایش درجه یک و دو آرایشگری مردانه، تشریح دوره های اصلی پیرایش مردانه';
$pageImage = '/assets/images/hairdressing-course.jpg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">دوره پیرایش</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">دوره های آرایشگری پیرایش درجه یک و دو</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    مهم ترین امر در آموزش درجه دو تسلط کافی به تمام مدل ها و نحوه اصلاح آنها میباشد. دوره درجه یک تلفیقی از اصلاح کلاسیک آرایشگری و اصلاح به روشهای نوین میباشد.
                </p>

                <h2 class="text-xl font-bold text-gray-900 mb-4">مراحل آموزش دوره پیرایش درجه دو</h2>
                <div class="space-y-4 mb-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0"><span class="text-brand-900 font-bold">۱</span></div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">جلسات تئوری (۴ جلسه)</h4>
                            <p class="text-gray-600 text-sm">شناخت ابزار آرایشگری، ایمنی و بهداشت، علم مورفولوژی یا چهره شناسی و نحوه تقسیم بندی سر و صورت.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0"><span class="text-brand-900 font-bold">۲</span></div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">مرحله عملی</h4>
                            <p class="text-gray-600 text-sm">ورود به سالن و آموزش اصلاح روی سر طبیعی. در جلسات ابتدایی مربی بالای سر کارآموز نکات لازم را آموزش می‌دهد.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-brand-100 rounded-xl flex items-center justify-center flex-shrink-0"><span class="text-brand-900 font-bold">۳</span></div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">آموزش مدل موهای مختلف</h4>
                            <p class="text-gray-600 text-sm">در ماه دوم آموزش مدل موهای مختلف و روی سرعت عمل کارآموز کار می‌شود.</p>
                        </div>
                    </div>
                </div>

                <img src="<?= $basePath ?>/assets/images/hairdressing-course.jpg" alt="دوره پیرایشگری" class="w-full rounded-xl mb-6" />

                <h2 class="text-xl font-bold text-gray-900 mb-4">دریافت مدرک فنی حرفه ای (درجه دو)</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    کار آموزان بعد از اتمام دوره درجه دو مدرک معتبر سازمان فنی حرفه ای را دریافت می کنند که این مدرک دارای اعتبار بالایی در اکثر کشورهای دنیا می باشد و قابل ترجمه جهت مهاجرت میباشد. جهت کسب جواز کار داشتن فقط مدرک درجه ۲ کفایت می‌کند.
                </p>

                <h2 class="text-xl font-bold text-gray-900 mb-4">آموزش دوره پیرایش درجه یک</h2>
                <p class="text-gray-600 leading-relaxed">
                    کلاسهای درجه یک مکمل کلاسهای درجه ۲ می باشد که برای ارتقای کیفیت و کارایی آرایشگر می باشد. در کلاس‌های درجه یک با پاکسازی های پوست، روش های مراقبت از مو، اصلاح مدل موهای خاص و ژورنالی آشنا می شوید.
                </p>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
