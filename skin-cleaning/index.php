<?php
$pageTitle = 'روش های پاکسازی پوست، پاکسازی عمیق';
$pageDescription = 'روشهایی برای پاکسازی پوست، انجام پاکسازی عمیق پوست، رعایت بهداشت پوست';
$pageImage = '/assets/images/skin-cleaning.jpeg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">پاکسازی پوست</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">روش های پاکسازی پوست، پاکسازی عمیق</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    پاکسازی پوست صورت، یکی از مراحل مهمی است که برای حفظ سلامت پوست صورت باید انجام شود.
                </p>
                <img src="<?= $basePath ?>/assets/images/skin-cleaning.jpeg" alt="پاکسازی پوست" class="w-full rounded-xl mb-6" />

                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">استفاده از شوینده‌های خاص</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">شما می‌توانید از شوینده‌های خاصی مانند ژل شوینده، صابون‌های خاص استفاده کنید. این شوینده‌ها به خوبی آلودگی‌ها، روغن و مواد آرایشی را از پوست صورت شما پاک می‌کنند.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">انجام پاکسازی عمیق</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">برای انجام پاکسازی عمیق پوست صورت، می‌توانید از ماسک‌های خاص، اسکراب‌های پوستی استفاده کنید. این روش‌ها سلول‌های مرده پوست را از بین می‌برند و پوست را نرم و شفاف می‌کنند.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">استفاده از بخاری صورت</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">بخاری صورت باعث گشودن منافذ پوستی و افزایش جریان خون در پوست می‌شود و باعث پاکسازی پوست می‌شود.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">استفاده از پنبه و آب گلاب</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">شما می‌توانید با استفاده از پنبه و آب گلاب، پوست صورت خود را پاکسازی کنید. پنبه را در آب گلاب خیس کرده و روی پوست صورت خود استفاده کنید.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">رعایت بهداشت پوست</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">برای حفظ سلامت پوست صورت، باید شستشوی منظم، استفاده از محصولات ضدآفتاب، مصرف غذاهای سالم را رعایت کنید.</p>
                    </div>
                </div>

                <div class="bg-brand-50 rounded-xl p-5 mt-6 border border-brand-100">
                    <p class="text-gray-700 text-sm leading-relaxed">
                        در نهایت، پاکسازی پوست صورت باید به صورت منظم و با استفاده از روش‌های مناسبی که به پوست صورت شما مناسبتر است، انجام شود.
                    </p>
                </div>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
