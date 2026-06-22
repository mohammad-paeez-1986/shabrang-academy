<?php
$pageTitle = 'مراقبت از موها، نکات شستن موها، شانه و خشک کردن';
$pageDescription = 'نکاتی در مراقبت ونگهداری از موها، مواردی برای قبل از شستن موها و پس از آن، نکات شانه زدن و خشک کردن موها';
$pageImage = '/assets/images/hair-care.jpg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">مراقبت از مو</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">مراقبت از مو، نکات شستن مو</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    عوامل متعددی وجود دارند که موجب آسیب رساندن به مو، ایجاد شکنندگی و بد حالتی می شوند. در صورت مراقبت صحیح می توان از آسیب دیدن موها پیشگیری کرد. موها از پروتئین تشکیل شده اند و داشتن رژیم غذایی مناسب نقش مهمی در نگهداری از موها ایفا می کند.
                </p>

                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">شستن مو چند بار در هفته؟</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">شستشوی بیش از حد ضرر دارد و موجب صدمه دیدن موها خواهد شد. اگر موهای چربی دارید شستشوی سه بار در هفته مناسب است. هفته ای دو بار برای موهای خشک مفید می باشد.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">نحوه صحیح شانه زدن مو</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">هنگامی که موهای شما خیس است، آن ها را شانه نکنید. موهای خیس شکنندگی بیشتری دارند و شانه کردن باعث میشود موها وز و بد حالت شوند. بهتر است ابتدا آب موهای خود را با دست بگیرید سپس حوله ای نرم را به مدت چند دقیقه دور موها بپیچید.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">خشک کردن مو</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">تا جایی که ممکن است اجازه دهید موها به شکل طبیعی خشک شوند. استفاده از سشوار با درجه حرارت بالا میتواند باعث آسیب دیدن مو گردد.</p>
                    </div>
                </div>

                <img src="<?= $basePath ?>/assets/images/hair-care.jpg" alt="مراقبت از موها" class="w-full rounded-xl my-6" />

                <div class="bg-gray-50 rounded-xl p-5">
                    <h3 class="font-bold text-brand-900 mb-3">نکاتی دیگر در نگهداری از مو</h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-start gap-2"><span class="text-brand-900 mt-1">•</span> از رنگ کردن مداوم موها بپرهیزید</li>
                        <li class="flex items-start gap-2"><span class="text-brand-900 mt-1">•</span> داشتن رژیم غذایی مناسب نقش مهمی در نگهداری از موها دارد</li>
                        <li class="flex items-start gap-2"><span class="text-brand-900 mt-1">•</span> تغذیه مناسب حاوی پروتئین و ویتامین ها باعث رویش موهای با کیفیت تر خواهد شد</li>
                        <li class="flex items-start gap-2"><span class="text-brand-900 mt-1">•</span> روزانه در حدود هشت لیوان آب مصرف کنید</li>
                        <li class="flex items-start gap-2"><span class="text-brand-900 mt-1">•</span> استرس میتواند تاثیر منفی روی موها گردد</li>
                    </ul>
                </div>

                <div class="bg-gray-50 rounded-xl p-5 mt-6">
                    <p class="text-sm text-gray-500">
                        <strong>منبع:</strong>
                        <a target="_blank" href="https://www.wikihow.com/Take-Care-of-Your-Hair" class="text-brand-900 hover:underline">Take Care of Your Hair</a>
                    </p>
                </div>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
