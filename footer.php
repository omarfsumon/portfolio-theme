<!-- Start Footer -->
<section class="py-[50px] bg-[#f2f5fb]">
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
        <p class="text-muted dark:text-darkmuted text-base text-center md:text-left">Copyright &copy; 2019 - <?php echo date('Y'); ?> All rights reserved by Omar F Sumon</p>
        <ul class="flex items-center gap-10 justify-center md:justify-end text-base">
            <li>
                <a href="#" class="text-muted dark:text-darkmuted hover:text-custom duration-300">Terms & Condition </a>
            </li>
            <li>
                <a href="#" class="text-muted dark:text-darkmuted hover:text-custom duration-300">Privacy Policy</a>
            </li>
        </ul>
    </div>
</section>
<!-- End Footer -->

<!-- Start Cursor -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- End Cursor -->

<!-- Start Totop -->
<div class="fixed h-[100px] w-px bottom-[25px] -right-[25px] bg-dark/10 z-10 duration-300 progressbar">
    <a href="#" class="no-underline text-dark"><span class="absolute bottom-[100px] left-0 text-[13px] text">To Top</span></a>
    <span class="line"></span>
</div>
<!-- End Totop -->

<?php wp_footer(); ?>
</body>
</html>