</main>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-brand-900 rounded-xl flex items-center justify-center text-white font-bold">S</div>
                <div>
                    <p class="font-bold">آموزشگاه آرایشگری مردانه شبرنگ</p>
                    <p class="text-gray-400 text-sm">آموزش تخصصی پیرایش مردانه در تهران</p>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <a href="<?= $basePath ?>/#prices" class="text-gray-400 hover:text-white transition-colors text-sm">شهریه دوره ها</a>
                <a href="<?= $basePath ?>/#licence" class="text-gray-400 hover:text-white transition-colors text-sm">مدرک فنی حرفه ای</a>
                <a href="<?= $basePath ?>/#contact-us" class="text-gray-400 hover:text-white transition-colors text-sm">تماس با آموزشگاه</a>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-8 text-center">
            <p class="text-gray-500 text-sm">© تمامی حقوق برای آموزشگاه آرایشگری مردانه شبرنگ محفوظ است.</p>
        </div>
    </div>
</footer>

<script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });
    }
</script>
</body>
</html>
