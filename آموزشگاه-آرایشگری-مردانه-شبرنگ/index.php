<?php
$pageTitle = 'آموزشگاه آرایشگری مردانه شبرنگ، هزینه، مدرک فنی حرفه ای';
$pageDescription = 'آموزشگاه آرایشگری مردانه شبرنگ در تهران، دسترسی آسان، اقساط، پشتیبانی آموزش دوره های مختلف، دریافت مدرک معتبر فنی حرفه ای';
$pageImage = '/assets/images/shabrang.jpeg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold mb-4">آموزشگاه آرایشگری مردانه شبرنگ</h1>
        <p class="text-white/80 max-w-2xl mx-auto">آموزش تخصصی آرایشگری مردانه با رویکرد بازار کار، پشتیبانی آموزشی و مدرک فنی حرفه ای</p>
    </div>
</section>

<!-- ABOUT -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-4">معرفی آموزشگاه</h2>
                <p class="text-gray-600 leading-relaxed">آموزشگاه آرایشگری مردانه شبرنگ در تهران (میدان خراسان) زیر نظر سازمان فنی و حرفه ای کشور بوده و دارای کادری مجرب می باشد.</p>
            </div>
            <img src="<?= $basePath ?>/assets/images/shabrang.jpeg" alt="آموزشگاه شبرنگ" class="rounded-2xl shadow-lg" />
        </div>
    </div>
</section>

<!-- COURSES -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-extrabold text-gray-900 mb-8 text-center">دوره های آموزشی</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mx-auto mb-4"><span class="text-brand-900 font-bold">۱</span></div>
                <h3 class="font-bold text-gray-900 mb-2">پیرایش درجه دو</h3>
                <p class="text-gray-600 text-sm">ابتدایی ترین رشته آرایشگری مردانه</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mx-auto mb-4"><span class="text-brand-900 font-bold">۲</span></div>
                <h3 class="font-bold text-gray-900 mb-2">پیرایش درجه یک</h3>
                <p class="text-gray-600 text-sm">مکمل دوره درجه دو</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mx-auto mb-4"><span class="text-brand-900 font-bold">۳</span></div>
                <h3 class="font-bold text-gray-900 mb-2">مواد شیمیایی</h3>
                <p class="text-gray-600 text-sm">کاربرد مواد در آرایشگری</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 text-center">
                <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mx-auto mb-4"><span class="text-brand-900 font-bold">۴</span></div>
                <h3 class="font-bold text-gray-900 mb-2">متعادل سازی چهره</h3>
                <p class="text-gray-600 text-sm">گریم و میکاپ</p>
            </div>
        </div>
    </div>
</section>

<!-- LICENSE -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-extrabold text-gray-900 mb-8 text-center">مدرک فنی حرفه ای</h2>
        <div class="max-w-3xl mx-auto bg-gray-50 rounded-3xl p-8">
            <p class="text-gray-600 leading-relaxed mb-4">هنرجویان پس از طی دوره آموزش در آموزشگاه جهت شرکت در آزمون های فنی حرفه ای معرفی می شوند. آزمون ها در دو قسمت تئوری و عملی گرفته می شوند.</p>
            <p class="text-gray-600 leading-relaxed">پس از قبولی در هر دو آزمون تقریبا بعد از یک الی دو هفته گواهینامه مهارت هنرجویان آماده می باشد و با داشتن این گواهینامه میتوانند جهت جواز کسب و دریافت وام اقدام نمایند.</p>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-extrabold text-gray-900 mb-8 text-center">تماس با ما</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-4">شماره های تماس</h3>
                <p class="text-gray-600 mb-2">شماره ثابت: <a href="tel:02133444301" class="text-brand-900 font-bold">۰۲۱-۳۳۴۴۴۳۰۱</a></p>
                <p class="text-gray-600">شماره همراه: <a href="tel:09125864597" class="text-brand-900 font-bold">۰۹۱۲۵۸۶۴۵۹۷</a></p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="font-bold text-gray-900 mb-4">آدرس</h3>
                <p class="text-gray-600">تهران - میدان خراسان - خیابان هفده شهریور شمالی - جنب درمانگاه خاتم الانبیا - ساختمان همشهری - طبقه اول</p>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
