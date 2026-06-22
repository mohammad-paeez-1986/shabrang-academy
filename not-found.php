<?php
$pageTitle = 'این صفحه وجود ندارد';
$pageDescription = 'صفحه مورد نظر شما یافت نشد';
require __DIR__ . '/header.php';
?>

<section class="py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-12 max-w-2xl mx-auto">
            <div class="w-20 h-20 bg-brand-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-brand-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h1 class="text-3xl font-extrabold text-gray-900 mb-4">صفحه یافت نشد</h1>
            <p class="text-gray-600 mb-8">متأسفانه صفحه مورد نظر شما وجود ندارد یا حذف شده است.</p>
            <a href="<?= $basePath ?>/" class="inline-flex items-center gap-2 px-6 py-3 bg-brand-900 text-white font-medium rounded-xl hover:bg-brand-800 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                بازگشت به صفحه اصلی
            </a>
            <div class="mt-8 pt-6 border-t border-gray-100">
                <p class="text-sm text-gray-500 mb-4">یا از صفحات زیر دیدن کنید:</p>
                <div class="flex flex-wrap justify-center gap-2">
                    <a href="<?= $basePath ?>/hair-care" class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-lg hover:bg-brand-50 hover:text-brand-900 transition-colors">مراقبت از مو</a>
                    <a href="<?= $basePath ?>/hair-loss" class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-lg hover:bg-brand-50 hover:text-brand-900 transition-colors">ریزش مو</a>
                    <a href="<?= $basePath ?>/hairdressing-job" class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-lg hover:bg-brand-50 hover:text-brand-900 transition-colors">شغل آرایشگری</a>
                    <a href="<?= $basePath ?>/hairdressing-course" class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-lg hover:bg-brand-50 hover:text-brand-900 transition-colors">دوره پیرایش</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
