<?php
$pageTitle = 'چگونه موهای فر را حالت دهیم؟';
$pageDescription = 'نکاتی در حالت دادن موهای فر، نگه داری و مراقبت از موهای فر، نحوه شانه زدن و جلوگیری از وز شدگی';
$pageImage = '/assets/images/curly-hair.jpeg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">موهای فر</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">چگونه موهای فر را حالت دهیم؟</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    کنترل کردن موهای فر می تواند سخت باشد. اما راه های فراوانی وجود دارد تا موهای فر را مدیریت پذیر یا به حالت پذیر نمایید.
                </p>
                <img src="<?= $basePath ?>/assets/images/curly-hair.jpeg" alt="موهای فر" class="w-full rounded-xl mb-6" />

                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">شانه کردن موهای فر</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">موهای فر را با انگشتان یا شانه هایی با دندانه های پهن و با فاصله حالت دهید. از شانه های دندانه ریز استفاده ننمایید زیرا می تواند بین گره های موها گیر کند و باعث وز شدگی شود.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">استفاده از مواد حالت دهنده</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">مواد حالت دهنده مو را روی موهای نمناک خود استفاده کنید. با استفاده از نوک انگشتان خود کرم را به تمامی قسمت های موهای سرتان برسانید و سعی کنید مواد را به طور مساوی پخش کنید.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">تقویت موهای فر</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">با پیچاندن مو های فر لای انگشتان خود آنها را تقویت کنید. قسمت های کوچکی از موهای فر خود را دور انگشت خود بپیچید و آنها را به جهتی مخالف شکل دهید.</p>
                    </div>

                    <div class="bg-red-50 rounded-xl p-5 border border-red-100">
                        <p class="text-red-700 text-sm font-medium">از ابزاری که برای فر کردن موها استفاده می‌شوند استفاده نکنید زیرا دمای آن ها باعث آسیب دیدن موهای تان خواهد شد!</p>
                    </div>
                </div>

                <h2 class="text-xl font-bold text-gray-900 mt-8 mb-4">شستشوی موهای فر</h2>
                <div class="space-y-3 mb-6">
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">هر سه روز یک بار بشویید</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">از مرطوب کننده هایی بدون سولفات استفاده کنید</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">دفعات استفاده از شامپو را کاهش دهید</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-brand-900 mt-1">•</span>
                        <p class="text-gray-600 text-sm">اجازه دهید موهای شما توسط هوا خشک شوند</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-5">
                    <p class="text-sm text-gray-500">
                        <strong>منبع:</strong>
                        <a target="_blank" href="https://www.wikihow.com/Style-Curly-Hair-(for-Men)" class="text-brand-900 hover:underline">Style Curly Hair (for Men)</a>
                    </p>
                </div>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
