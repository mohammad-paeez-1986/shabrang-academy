<?php
$pageTitle = 'آیا آرایشگری شغل خوبی است؟';
$pageDescription = 'نکاتی در مورد شغل آرایشگری، قبل از آنکه بخواهید وارد این شغل شوید، آیا این شغل می تواند برای شما مناسب باشد؟';
$pageImage = '/assets/images/hairdressing-job.jpg';
require __DIR__ . '/../header.php';
?>

<!-- HERO -->
<section class="bg-gradient-to-br from-brand-900 to-brand-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center gap-2 text-white/60 text-sm mb-4">
            <a href="<?= $basePath ?>/" class="hover:text-white transition-colors">خانه</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            <span class="text-white">شغل آرایشگری</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold">آیا آرایشگری شغل خوبی است؟</h1>
    </div>
</section>

<!-- CONTENT -->
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <article class="flex-1 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    شغل آرایشگری ممکن است برای شما حرفه ای عالی به حساب آید. قبل از اینکه به سمت شغل آرایشگری بروید، مشخص کنید آیا این شغل میتواند برای شما انتخاب درستی باشد یا خیر؟
                </p>

                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">داشتن علاقه و اشتیاق</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">برای موفق شدن در حرفه ی آرایشگری شما باید عاشق این نوع کار باشید. در صورت وجود اشتیاق و علاقه یادگیری شما سریعتر و بهتر خواهد بود و این شغل میتواند برای شما آینده ی خوبی بهمراه داشته باشد.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">ارتباط با مردم</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">از خصوصیات این شغل ارتباط مداوم با مردم است. اگر شما به کار با مردم علاقه مند هستید این تمایل یکی از محرک هایی خواهد بود که شما را به سمت شغل آرایشگری سوق خواهد داد.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">خوش مشرب بودن</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">برقرای ارتباط با مردم میتواند مشتری های بیشتری را به سمت شما جذب کند و باعث رونق بیشتر کارتان شود. یک آرایشگر به شدت نیاز دارد شخصیتی مناسب از خود ارائه دهد.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">فعالیت فیزیکی</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">برای فعالیت فیزیکی مورد نیاز این شغل آماده باشید. معمولا آرایشگران مدت زیادی از زمان کاری خود را باید سر پا بایستند. سعی کنید ورزش هایی که استقامت شما را در ایستادن طولانی مدت بالا ببرد انجام دهید.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-5">
                        <h3 class="font-bold text-brand-900 mb-2">آموزش درست</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">برای آموزش دیدن آموزشگاهی را انتخاب کنید که میتوانید در آنجا راحت باشید. شغل آرایشگری شغلی عملی است و تنها با مطالعه نمی توانید آرایشگر خوبی باشید. برای شروع حرفه ای شما نیاز به مدرک معتبر فنی حرفه ای دارید.</p>
                    </div>
                </div>

                <img src="<?= $basePath ?>/assets/images/hairdressing-job.jpg" alt="شغل آرایشگری" class="w-full rounded-xl my-6" />

                <div class="bg-brand-50 rounded-xl p-5 border border-brand-100">
                    <p class="text-gray-700 text-sm leading-relaxed">
                        <strong class="text-brand-900">نکته مهم:</strong> یکی از آموزشگاه های مناسب
                        <a href="<?= $basePath ?>/" class="text-brand-900 hover:underline font-bold">آموزشگاه آرایشگری مردانه شبرنگ</a>
                        می باشد. برای دریافت مشاوره رایگان همین امروز تماس بگیرید.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-xl p-5 mt-6">
                    <p class="text-sm text-gray-500">
                        <strong>منبع:</strong>
                        <a target="_blank" href="https://www.wikihow.com/Become-a-Hair-Stylist" class="text-brand-900 hover:underline">Become a Hair Stylist</a>
                    </p>
                </div>
            </article>

            <?php require __DIR__ . '/../sidebar.php'; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../footer.php'; ?>
