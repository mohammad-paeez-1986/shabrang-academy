<?php
$pageTitle = 'چه مدل مویی بهم میاد، مدل موی مناسب صورت بیضی، گرد و ...';
$pageDescription = 'با توجه به فرم صورت و ویژگی های ظاهری، چه مدل مویی برای من مناسب تر است؟ مدل موی بلند بهم میاد یا مدل کوتاه';
$pageImage = '/assets/images/suitable-hairstyle.jpg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">مدل موی مناسب</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">چه مدل مویی بهم میاد؟</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    گاها مدل موی متفاوت می تواند تاثیر زیادی روی چهره شما بگذارد. بنابراین تشخیص اینکه کدام مدل مو با توجه به سایر ویژگی های ظاهری شما مناسب است، می تواند در خوش ظاهرتر به نظر رسیدن شما موثر باشد.
                </p>
                <img src="<?= $basePath ?>/assets/images/suitable-hairstyle.jpg" alt="مدل موی مناسب" class="w-full rounded-xl mb-6" />

                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">تشخیص فرم و شکل صورت</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">جلوی آینه بایستید و موهای خود را تا جایی که میشود کنار بکشید. به زاویه های صورت خود نگاه کنید. خصوصا اطراف پیشانی، استخوان های گونه و خط فک.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">موی کوتاه یا بلند؟</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">فاصله بین چانه و گوش خود را اندازه بگیرید. اگر فاصله کمتر از ۵ سانتیمتر و ۷ میلیمتر بود مدل موی کوتاه مناسب است، در غیر این صورت مدل موی بلندتر را امتحان کنید.</p>
                    </div>
                </div>

                <h2 class="text-xl font-bold text-gray-900 mt-8 mb-4">مدل موی مناسب برای فرم های مختلف صورت</h2>
                <div class="space-y-4 mb-6">
                    <div class="border-r-4 border-brand-900 pr-4">
                        <h4 class="font-bold text-gray-900 mb-1">صورت گرد</h4>
                        <p class="text-gray-600 text-sm">اگر مدل موی شما به صورتی باشد که بالای آن حجم اضافه تری نسبت به اطراف داشته باشد، میتواند با صورت گرد شما تناسب ایجاد کند.</p>
                    </div>
                    <div class="border-r-4 border-brand-900 pr-4">
                        <h4 class="font-bold text-gray-900 mb-1">صورت بیضی</h4>
                        <p class="text-gray-600 text-sm">هر مدلی را که دوست دارید انتخاب کنید. صورت های بیضی بیشترین تطابق را با مدل موهای مختلف دارند.</p>
                    </div>
                    <div class="border-r-4 border-brand-900 pr-4">
                        <h4 class="font-bold text-gray-900 mb-1">صورت کشیده</h4>
                        <p class="text-gray-600 text-sm">مدلی با اطراف کوتاه و قسمت بالا حجیم تر و به شکل موجدار میتواند برای شما مناسب باشد.</p>
                    </div>
                    <div class="border-r-4 border-brand-900 pr-4">
                        <h4 class="font-bold text-gray-900 mb-1">صورت قلبی</h4>
                        <p class="text-gray-600 text-sm">موهای خود را کمی بلندتر نگه دارید. موهای کوتاه عریض بودن پیشانی را بیشتر نمایش خواهد داد.</p>
                    </div>
                </div>

                <div class="bg-brand-50 rounded-xl p-5 border border-brand-100">
                    <p class="text-gray-700 text-sm leading-relaxed">
                        یک آرایشگر خوب میتواند به شما در پیدا کردن بهترین مدل متناسب با شما کمک نماید. اگر شما در انتخاب مدل مویی مناسب مردد هستید، از یک آرایشگر خبره کمک بگیرید.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-xl p-5 mt-6">
                    <p class="text-sm text-gray-500">
                        <strong>منبع:</strong>
                        <a target="_blank" href="https://www.wikihow.com/Decide-Between-Cutting-Your-Hair-or-Not" class="text-brand-900 hover:underline">Decide Between Cutting Your Hair or Not</a>
                    </p>
                </div>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
