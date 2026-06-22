<?php
$pageTitle = 'چگونه یک آرایشگر حرفه ای شویم؟';
$pageDescription = 'نیازمندی ها و مراحل مورد نیاز برای تبدیل شدن به یک آرایشگر حرفه ای، چگونگی برخورد حرفه ای برای جذب و حفظ مشتری ها';
$pageImage = '/assets/images/how-to-become-hairdresser.jpg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">آرایشگر حرفه ای</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">چگونه در شغل آرایشگری حرفه ای و نمونه باشیم؟</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    آرایشگری نیازمند اندکی آموزش آکادمیک است و نیازمند مدتی طولانی تر آموزش عملی. آرایشگری می تواند پتانسیل مناسبی برای کسب درآمد داشته باشد.
                </p>
                <img src="<?= $basePath ?>/assets/images/how-to-become-hairdresser.jpg" alt="آرایشگر حرفه ای" class="w-full rounded-xl mb-6" />

                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">انتخاب آموزشگاه مناسب</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">آموزشگاه آرایشگری مناسبی انتخاب نمایید. یکی از آموزشگاه ها <a href="<?= $basePath ?>/" class="text-brand-900 hover:underline font-bold">آموزشگاه آرایشگری مردانه شبرنگ</a> است.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">آمادگی برای امتحان فنی حرفه ای</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">پس از گذراندن دوره ی عملی خود را برای امتحان فنی حرفه ای آماده نمایید. سوالات گذشته را دوره کنید.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">استفاده از تجربه افراد موفق</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">از آرایشگران موفق غافل نشوید. داستان موفقیتشان را جویا شوید و از تجربه آنها استفاده کنید.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">شروع حرفه ای</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">مکانی را انتخاب نمایید که موقعیت مناسبی برای شما داشته باشد. به طور مناسب لباس بپوشید و ظاهری تمیز و مرتب داشته باشید.</p>
                    </div>
                </div>

                <h2 class="text-xl font-bold text-gray-900 mt-8 mb-4">نحوه و طرز برخورد با مشتری</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    آداب معاشرت متناسبی با مشتریان داشته باشید. شما باید از یک مشتری تازه وارد یک مشتری دائم بسازید. با مشتری های خود صحبت کنید اما بدانید تا کجا باید پیش بروید.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    نسبت به تمیزی محل کارتان حساس باشید. همواره خود را به روز نگه دارید. مدل موهای پرطرفدار را بشناسید و مهارت های جدید بیاموزید.
                </p>

                <div class="bg-gray-50 rounded-xl p-5 mt-6">
                    <p class="text-sm text-gray-500">
                        <strong>منبع:</strong>
                        <a target="_blank" href="https://www.wikihow.com/Be-a-Hairdresser" class="text-brand-900 hover:underline">Be a Hairdresser</a>
                    </p>
                </div>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
