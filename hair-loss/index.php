<?php
$pageTitle = 'ریزش مو ، جلوگیری علل و عوامل آن';
$pageDescription = 'عوامل موثر در ریزش موها، راه کار هایی برای جلوگیری از ریزش مو، کم خونی، عوامل ارثی، کم کاری و یا پرکاری غده تیروئید، استرس، کمبود پروتئین و رژیم غذایی نامناسب';
$pageImage = '/assets/images/hair-loss.jpg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">ریزش مو</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">ریزش مو ، جلوگیری علل و عوامل آن</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- MAIN CONTENT -->
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    این روزها داشتن موهایی زیبا و پرپشت برای خیلی از افراد حائز اهمیت می باشد و ریزش مو و کم پشت شدن موها باعث نگرانی خیلی از افراد می‌شود. کسانی که دچار ریزش مو می شوند قبل از هر اقدامی ابتدا باید علل ریزش موی خود را بدانند سپس برای درمان آن اقدام کنند.
                </p>
                <img src="<?= $basePath ?>/assets/images/hair-loss.jpg" alt="ریزش موها" class="w-full rounded-xl mb-6" />

                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">کم خونی</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">معمولاً افرادی که دچار کم خونی می شوند کم کم دچار ریزش مو می‌شوند. در خانم ها شایع تر می باشد. در این صورت می توان با برطرف کردن کم خونی و جذب آهن به کمتر شدن ریزش موها کمک کرد. اگر دچار خواب آلودگی و خستگی و در مواقعی سرگیجه شده اید ممکن است که مبتلا به فقر آهن باشید.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">عوامل ارثی و وراثتی</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">فولیکول حساس به هورمون جنسی در مردان تستسترون به دی هیدرو تستسترون تبدیل می شود که روی فولیکول های حساس تاثیر می گذارد و باعث نازک شدن موها و در آخر باعث ریزش موها می شود. بهترین روش برای ریزش ارثی کاشت مو و یا پیوند مو می باشد.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">کم کاری و یا پرکاری غده تیروئید</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">اختلال در غده تیروئید باعث نازک شدن موها و در نهایت ریزش مو می‌شود. غده تیروئید در جلوی گردن قرار دارد که وظایف اصلی آن تنظیم سوخت و ساز بدن می باشد. با انجام آزمایش و مصرف داروهای روزانه قابل درمان می باشد.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">استرس</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">درون پوست سر همه افراد فولیکول های مو وجود دارد. استرس تاثیر مستقیمی بر روی این سلولها می گذارد. زمانی که فرد دچار استرس می شود ماده ای به نام رادیکال در بدن تولید می‌شود که با حمله کردن به سلولها باعث ریزش مو می گردد.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">کمبود پروتئین و رژیم غذایی نامناسب</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">یکی دیگر از علل ریزش مو کمبود پروتئین بدن میباشد. برخی از افراد پس از گرفتن رژیم و کاهش وزن دچار ریزش مو می شوند. بنابراین تغذیه مناسب و وجود پروتئین کافی درون بدن باعث استحکام و قوای بیشتر موها و از ریزش مو جلوگیری میکند.</p>
                    </div>
                </div>
            </article>

            <!-- SIDEBAR -->
            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
