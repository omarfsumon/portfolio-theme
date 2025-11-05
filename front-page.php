<?php get_header(); ?>

<!-- Start Home -->
<section class="flex items-center bg-center bg-cover lg:h-screen py-24 relative dizme_tm_header" id="home" style="background-image: url('<?php echo OMAR_URI . '/assets/img/slider/1.webp'?>');">
    <div class="container grid lg:grid-cols-2 items-center gap-[25px]">
        <div class="order-2 lg:order-1">
            <h3 class="text-custom text-[21px] text-center lg:text-left lg:text-[25px] xl:text-[45px] leading-[1.3] font-medium font-secondary">Hello, I'm</h3>
            <h1 class="text-[42px] lg:text-[60px] xl:text-[85px] text-center lg:text-left mb-[11px] lg:mb-[18px] leading-[1.3] font-medium font-secondary">Omar F Sumon</h1>
            <p class="lg:mb-9 mb-[15px] text-lg lg:text-[19px] xl:text-[28px] text-center lg:text-left font-medium">
                A <span class="text-[#1cbe59]">Web Developer</span> From <span class="text-[#8067f0] dark:text-[#f0c45c]">Bangladesh</span>
            </p>
            <p class="lg:mb-[42px] text-muted dark:text-white mb-[30px] text-base text-center lg:text-left xl:text-[23px] leading-[1.5] max-w-[640px] mx-auto lg:ml-0">
                I'm creative designer based in New York, and I'm very passionate and dedicated to my work.
            </p>
            <div class="flex items-center justify-center lg:justify-start gap-[25px]">
                <a href="#about" class="btn-custom relative">About Me</a>
                <ul class="flex items-center gap-2">
                    <li>
                        <a href="#"><i class="icon-facebook-1"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-twitter-1"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-linkedin-1"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-behance"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="order-1 lg:order-2">
            <div class="relative">
                <img src="<?php echo OMAR_URI . '/assets/img/slider/sumon.webp'?>" etchpriority="high" loading="lazy" decoding="async"
                    class="mx-auto max-w-[250px] lg:max-w-[400px] xl:max-w-[650px]" alt="Omar F Sumon" />
                <span class="left-24 shadow-[24px_0px_72px_rgb(54,32,152,0.3)] top-5 rounded-lg hidden lg:flex items-center justify-center bg-[#00749c] text-white w-[75px] h-[75px] absolute anim_moveBottom">
                    <?php get_template_part('assets/img/svg/skills/wordpress'); ?>
                </span>
                <span class="right-[110px] shadow-[24px_0px_72px_rgb(54,32,152,0.3)] top-20 hidden lg:flex items-center justify-center rounded-lg bg-[#7c7eb5] text-white w-[75px] h-[75px] absolute anim_moveBottom">
                    <?php get_template_part('assets/img/svg/skills/php'); ?>
                </span>
                <span class="left-[100px] shadow-[24px_0px_72px_rgb(54,32,152,0.3)] bottom-20 hidden lg:flex items-center justify-center rounded-lg bg-white text-[#38bdf8] w-[75px] h-[75px] absolute anim_moveBottom">
                    <?php get_template_part('assets/img/svg/skills/tailwind'); ?>
                </span>
            </div>
        </div>
    </div>
    <div class="dizme_tm_down text-center max-[1024px]:!bottom-6">
        <a class="anchor inline-block" href="#process">
            <svg
                width="26px"
                height="100%"
                viewBox="0 0 247 390"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                style="fill-rule: evenodd; clip-rule: evenodd; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 1.5;"
            >
                <path id="wheel" d="M123.359,79.775l0,72.843" fill="none" class="stroke-[20px] stroke-dark dark:stroke-white" />
                <path
                    id="mouse"
                    fill="none"
                    d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                    class="stroke-[20px] stroke-dark dark:stroke-white"
                />
            </svg>
        </a>
    </div>
</section>
<!-- End Home -->

<!-- Start Process -->
<section class="md:pt-[190px] pt-[135px] pb-[70px]" id="process">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[50px]">
            <div class="text-center wow fadeInUp" data-wow-duration="1s">
                <div>
                    <span class="relative inline-block">
                        <img src="<?php echo OMAR_URI . '/assets/img/brushes/process/1.png'?>" class="md:max-w-[125px] max-w-[90px] mx-auto" alt="" />
                        <img src="<?php echo OMAR_URI . '/assets/img/svg/process/target.svg'?>" class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto" alt="" />
                    </span>
                </div>
                <div class="mt-[30px]">
                    <h3 class="text-2xl">Pixel Perfect Design</h3>
                    <p class="mx-auto text-muted dark:text-darkmuted mt-5 leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <div>
                    <span class="relative inline-block">
                        <img src="<?php echo OMAR_URI . '/assets/img/brushes/process/2.png'?>" class="md:max-w-[125px] max-w-[90px] mx-auto" alt="" />
                        <img src="<?php echo OMAR_URI . '/assets/img/svg/process/brush.svg'?>" class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto" alt="" />
                    </span>
                </div>
                <div class="mt-[30px]">
                    <h3 class="text-2xl">Mobile First Design</h3>
                    <p class="mx-auto text-muted dark:text-darkmuted mt-5 leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div>
                    <span class="relative inline-block">
                        <img src="<?php echo OMAR_URI . '/assets/img/brushes/process/3.png'?>" class="md:max-w-[125px] max-w-[90px] mx-auto" alt="" />
                        <img src="<?php echo OMAR_URI . '/assets/img/svg/process/energy.svg'?>" class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] md:w-[60px] h-[45px] md:h-[60px] mx-auto" alt="" />
                    </span>
                </div>
                <div class="mt-[30px]">
                    <h3 class="text-2xl">Performance Priority</h3>
                    <p class="mx-auto text-muted dark:text-darkmuted mt-5 leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Process -->

<!-- Start About -->
<section class="md:pt-[112px] pt-16 relative" id="about">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[90px] items-center">
            <div class="relative space-y-4 md:space-y-0">
                <picture>
                    <source srcset="<?php echo OMAR_URI . '/assets/img/about/1.webp'?>" />
                    <img src="<?php echo OMAR_URI . '/assets/img/about/1.webp'?>" class="mx-auto" alt="Sumon About" />
                </picture>

                <div class="top-[120px] -left-20 md:absolute">
                    <div class="flex gap-[17px] items-center pt-[25px] pr-[30px] pb-[21px] pl-[26px] bg-white shadow-[25px_0px_65px_rgba(54,32,152,0.11)] rounded-lg">
                        <h3 class="text-[50px] text-[#1cbe59]"><span class="dizme_tm_counter stop" data-from="0" data-to="18" data-speed="2000">4+</span></h3>
                        <span class="name text-lg font-secondary leading-[1.3] font-medium">
                            Years of<br />
                            Success
                        </span>
                    </div>
                </div>
                <div class="bottom-[70px] -right-[30px] md:absolute">
                    <div class="flex gap-[17px] items-center pt-[25px] pr-[30px] pb-[21px] pl-[26px] bg-white shadow-[25px_0px_65px_rgba(54,32,152,0.11)] rounded-lg">
                        <h3 class="text-[50px] text-[#6e50f0]"><span class="dizme_tm_counter stop" data-from="0" data-to="9" data-speed="2000">1</span>K+</h3>
                        <span class="name text-lg font-secondary leading-[1.3] font-medium">
                            Total<br />
                            Projects
                        </span>
                    </div>
                </div>
            </div>
            <div class="text-center md:text-left">
                <div class="mb-[25px] lg:max-w-[440px]">
                    <p class="text-custom text-xl md:text-2xl font-medium font-secondary wow fadeInUp" data-wow-duration="1s">I'm a Designer</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mt-1.5 wow fadeInUp" data-wow-duration="1s">I Can Design Anything You Want</h3>
                </div>
                <p class="text-muted lg:max-w-[485px] leading-[30px] mb-[47px] wow fadeInUp" data-wow-duration="1s">
                    Hello there! I'm a web designer, and I'm very passionate and dedicated to my work. With 20 years experience as a professional web developer, I have acquired the skills and knowledge necessary to make your project
                    a success. I enjoy every step of the design process, from discussion and collaboration.
                </p>
                <div class="wow fadeInUp" data-wow-duration="1s">
                    <a href="#contact" class="btn-custom">Hire Me</a>
                </div>
            </div>
        </div>
    </div>
    <div class="left-10 top-5 absolute hidden lg:block wow fadeInLeft" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/about/1.png'?>" alt="" /></div>
    <div class="-bottom-[50px] right-0 absolute hidden lg:block wow fadeInRight" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/about/2.png'?>" alt="" /></div>
</section>
<!-- End About -->

<!-- Start Portfolio -->
<section class="pt-[113px] md:pt-[185px] pb-[88px] md:pb-[165px] relative" id="portfolio">
    <div class="container relative z-10">
        <div class="grid grid-cols-1">
            <div class="text-center max-w-[680px] mx-auto">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Portfolio</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">My Amazing Works</h3>
                <p class="text-muted text-lg leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="md:pt-[78px] pt-[53px] pb-[46px] md:pb-[56px]">
                <ul class="flex items-center gap-4 flex-wrap lg:gap-[50px] justify-center" id="menu-filter">
                    <li class="shrink-0">
                        <a href="#" class="hover:text-custom active text-base duration-300" data-filter="*">All</a>
                    </li>
                    <li class="shrink-0">
                        <a href="#" class="hover:text-custom text-base duration-300" data-filter=".youtube">Youtube</a>
                    </li>
                    <li class="shrink-0">
                        <a href="#" class="hover:text-custom text-base duration-300" data-filter=".vimeo">Vimeo</a>
                    </li>
                    <li class="shrink-0">
                        <a href="#" class="hover:text-custom text-base duration-300" data-filter=".soundcloud">Soundcloud</a>
                    </li>
                    <li class="shrink-0">
                        <a href="#" class="hover:text-custom text-base duration-300" data-filter=".popup">Popup</a>
                    </li>
                    <li class="shrink-0">
                        <a href="#" class="hover:text-custom text-base duration-300" data-filter=".detail">Detail</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dizme_tm_portfolio_titles"></div>
        <div class="md:flex flex-wrap justify-center md:justify-start work-filter wow fadeInUp" data-wow-duration="1s">
            <div class="lg:w-1/3 md:w-1/3 p-3 youtube">
                <div class="rounded-xl overflow-hidden group relative">
                    <div class="main-img-box" data-title="Mockup Shape" data-category="Youtube">
                        <a class="img-zoom relative" href="<?php echo OMAR_URI . '/assets/img/portfolio/1.jpg'?>">
                            <div class="main group-hover:scale-110 overflow-hidden">
                                <img src="<?php echo OMAR_URI . '/assets/img/portfolio/1.jpg'?>" class="object-cover w-full h-full" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 p-3 vimeo">
                <div class="rounded-xl overflow-hidden group relative">
                    <div class="main-img-box" data-title="Ave Bottle" data-category="Vimeo">
                        <a class="img-zoom relative" href="<?php echo OMAR_URI . '/assets/img/portfolio/2.jpg'?>">
                            <div class="main group-hover:scale-110 overflow-hidden">
                                <img src="<?php echo OMAR_URI . '/assets/img/portfolio/2.jpg'?>" class="object-cover w-full h-full" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 p-3 soundcloud">
                <div class="rounded-xl overflow-hidden group relative">
                    <div class="main-img-box" data-title="Magic Art" data-category="Soundcloud">
                        <a class="img-zoom relative" href="<?php echo OMAR_URI . '/assets/img/portfolio/3.jpg'?>">
                            <div class="main group-hover:scale-110 overflow-hidden">
                                <img src="<?php echo OMAR_URI . '/assets/img/portfolio/2.jpg'?>" class="object-cover w-full h-full" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 p-3 popup">
                <div class="rounded-xl overflow-hidden group relative">
                    <div class="main-img-box" data-title="Blue Lemon" data-category="Popup">
                        <a class="img-zoom relative" href="<?php echo OMAR_URI . '/assets/img/portfolio/4.jpg'?>">
                            <div class="main group-hover:scale-110 overflow-hidden">
                                <img src="<?php echo OMAR_URI . '/assets/img/portfolio/5.jpg'?>" class="object-cover w-full h-full" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 p-3 detail">
                <div class="rounded-xl overflow-hidden group relative">
                    <div class="main-img-box" data-title="Art Stone" data-category="Popup">
                        <a class="img-zoom relative" href="<?php echo OMAR_URI . '/assets/img/portfolio/5.jpg'?>">
                            <div class="main group-hover:scale-110 overflow-hidden">
                                <img src="<?php echo OMAR_URI . '/assets/img/portfolio/3.jpg'?>" class="object-cover w-full h-full" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 p-3 youtube">
                <div class="rounded-xl overflow-hidden group relative">
                    <div class="main-img-box" data-title="Global Evolution" data-category="Detail">
                        <a class="img-zoom relative" href="<?php echo OMAR_URI . '/assets/img/portfolio/6.jpg'?>">
                            <div class="main group-hover:scale-110 overflow-hidden">
                                <img src="<?php echo OMAR_URI . '/assets/img/portfolio/6.jpg'?>" class="object-cover w-full h-full" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="left-[50px] top-[150px] absolute hidden lg:block wow zoomIn" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/portfolio/1.png'?>" alt="" /></div>
    <div class="right-[10px] bottom-[51px] absolute hidden lg:block wow fadeInRight" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/portfolio/2.png'?>" alt="" /></div>
</section>
<!-- End Portfolio -->

<!-- Start Skills -->
<section>
    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[200px] items-center">
            <div>
                <div class="mb-[23px] wow fadeInUp" data-wow-duration="1s">
                    <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Design is Life</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mt-1.5">I Develop Skills Regularly to Keep Me Update</h3>
                </div>
                <p class="text-muted lg:max-w-[485px] leading-[30px] wow fadeInUp" data-wow-duration="1s">Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
                <div class="pt-[30px] space-y-[22px] wow fadeInUp" data-wow-duration="1s">
                    <div class="w-full mb-[22px] relative" data-value="85" data-color="#f75023">
                        <div class="mb-[9px] block"><span class="text-lg font-medium font-secondary inline-block">Illustrator</span><span class="absolute right-[15%] text-custom">85%</span></div>
                        <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                            <div class="bg-custom h-2 rounded-full" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div class="w-full mb-[22px] relative" data-value="95" data-color="#f75023">
                        <div class="mb-[9px] block"><span class="text-lg font-medium font-secondary inline-block">Photoshop</span><span class="absolute right-[5%] text-custom">95%</span></div>
                        <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                            <div class="bg-[#1cbe59] h-2 rounded-full" style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="w-full mb-[22px] relative" data-value="75" data-color="#f75023">
                        <div class="mb-[9px] block"><span class="text-lg font-medium font-secondary inline-block">Figma</span><span class="absolute right-[25%] text-custom">75%</span></div>
                        <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                            <div class="bg-[#8067f0] h-2 rounded-full" style="width: 75%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <picture>
                    <source srcset="<?php echo OMAR_URI . '/assets/img/skills/1.jpg'?>" type="image/jpeg">
                    <img src="<?php echo OMAR_URI . '/assets/img/skills/1.jpg'?>" class="max-h-[800px] mx-auto" alt="" />
                </picture>
            </div>
        </div>
    </div>
</section>
<!-- End Skills -->

<!-- Start Services -->
<section class="md:pt-[178px] pt-[120px] pb-[98px] md:pb-[160px] relative" id="service">
    <div class="container relative z-10">
        <div class="grid grid-cols-1">
            <div class="text-center max-w-[680px] mx-auto">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Services</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">What I Do for Clients</h3>
                <p class="text-muted text-lg leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 pt-[86px] gap-[25px]">
            <div class="wow fadeInLeft" data-wow-duration="1s">
                <div class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                    <div class="shrink-0 relative inline-block">
                        <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto" src="<?php echo OMAR_URI . '/assets/img/svg/service/anchor.svg'?>" alt="" />
                        <img src="<?php echo OMAR_URI . '/assets/img/brushes/service/1.png'?>" alt="" />
                    </div>
                    <div>
                        <h3 class="text-[30px] mb-4">Creative Design</h3>
                        <p class="text-[21px] mb-5 font-medium font-secondary text-dark ">
                            <span>Starts from <span class="text-2xl text-custom">$99</span></span>
                        </p>
                        <p class="text-muted text-lg leading-[30px]">
                            Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development
                        </p>
                    </div>
                </div>
            </div>
            <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                    <div class="shrink-0 relative inline-block">
                        <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto" src="<?php echo OMAR_URI . '/assets/img/svg/service/physics.svg'?>" alt="" />
                        <img src="<?php echo OMAR_URI . '/assets/img/brushes/service/2.png'?>" alt="" />
                    </div>
                    <div>
                        <h3 class="text-[30px] mb-4">Graphic Design</h3>
                        <p class="text-[21px] mb-5 font-medium font-secondary text-dark">
                            <span>Starts from <span class="text-2xl text-custom">$199</span></span>
                        </p>
                        <p class="text-muted text-lg leading-[30px]">
                            Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development
                        </p>
                    </div>
                </div>
            </div>
            <div class="wow fadeInLeft" data-wow-duration="1s">
                <div class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                    <div class="shrink-0 relative inline-block">
                        <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto" src="<?php echo OMAR_URI . '/assets/img/svg/service/contact.svg'?>" alt="" />
                        <img src="<?php echo OMAR_URI . '/assets/img/brushes/service/3.png'?>" alt="" />
                    </div>
                    <div>
                        <h3 class="text-[30px] mb-4">UI/UX Design</h3>
                        <p class="text-[21px] mb-5 font-medium font-secondary text-dark dark:text-white">
                            <span>Starts from <span class="text-2xl text-custom">$299</span></span>
                        </p>
                        <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">
                            Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development
                        </p>
                    </div>
                </div>
            </div>
            <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white dark:bg-semilight p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                    <div class="shrink-0 relative inline-block">
                        <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto" src="<?php echo OMAR_URI . '/assets/img/svg/service/web.svg'?>" alt="" />
                        <img src="<?php echo OMAR_URI . '/assets/img/brushes/service/4.png'?>" class="dark:hidden" alt="" />
                    </div>
                    <div>
                        <h3 class="text-[30px] mb-4">Web Design</h3>
                        <p class="text-[21px] mb-5 font-medium font-secondary text-dark dark:text-white">
                            <span>Starts from <span class="text-2xl text-custom">$399</span></span>
                        </p>
                        <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">
                            Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-[300px] left-0 absolute hidden lg:block wow fadeInLeft" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/service/5.png'?>" alt="" /></div>
    <div class="top-0 right-0 absolute hidden lg:block wow zoomIn" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/service/6.png'?>" alt="" /></div>
</section>
<!-- End Services -->

<!-- Start Testimonial -->
<section class="relative pb-[127px] md:pb-[187px]">
    <div class="px-4 lg:px-0 relative z-10">
        <div class="grid grid-cols-1">
            <div class="text-center max-w-[680px] mx-auto">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Testimonials</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">What My Clients Say</h3>
                <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
            </div>
        </div>
        <div class="flex items-center justify-center mt-20 relative bg-cover bg-top" 
            style="background-image: url('<?php echo OMAR_URI . '/assets/img/testimonials/bg-client.webp'?>');">
            <div id="owl-demo" class="owl-carousel">
                <div class="text-center max-w-[900px] mx-auto">
                    <div class="mb-[35px]">
                        <img class="!w-[65px] mx-auto" src="<?php echo OMAR_URI . '/assets/img/svg/testimonials/quote.svg'?>" alt="" />
                    </div>
                    <div>
                        <p class="md:text-[30px] text-xl text-muted dark:text-darkmuted italic leading-[1.6]">
                            I rarely like to write reviews, but the Marketify team truly deserve a standing ovation for their customer support, customisation and most importantly, friendliness and professionalism. Many thanks once
                            again for everything and hope that I get to deal with you again in the near future.
                        </p>
                    </div>
                    <div class="flex items-center gap-[25px] mt-[51px] justify-center">
                        <img src="<?php echo OMAR_URI . '/assets/img/testimonials/4.jpg'?>" class="!w-[60px] rounded-full" alt="" />
                        <div class="text-start">
                            <h5 class="font-secondary text-2xl font-medium">Mike Anderson</h5>
                            <p class="text-muted dark:text-darkmuted text-base leading-7">Vivaco Studio</p>
                        </div>
                    </div>
                </div>
                <div class="text-center max-w-[900px] mx-auto">
                    <div class="mb-[35px]">
                        <img class="!w-[65px] mx-auto" src="assets/img/svg/testimonials/quote.svg" alt="" />
                    </div>
                    <div>
                        <p class="md:text-[30px] text-xl text-muted dark:text-darkmuted italic leading-[1.6]">
                            I rarely like to write reviews, but the Marketify team truly deserve a standing ovation for their customer support, customisation and most importantly, friendliness and professionalism. Many thanks once
                            again for everything and hope that I get to deal with you again in the near future.
                        </p>
                    </div>
                    <div class="flex items-center gap-[25px] mt-[51px] justify-center">
                        <img src="assets/img/testimonials/4.jpg" class="!w-[60px] rounded-full" alt="" />
                        <div class="text-start">
                            <h5 class="font-secondary text-2xl font-medium">Mike Anderson</h5>
                            <p class="text-muted dark:text-darkmuted text-base leading-7">Vivaco Studio</p>
                        </div>
                    </div>
                </div>
                <div class="text-center max-w-[900px] mx-auto">
                    <div class="mb-[35px]">
                        <img class="!w-[65px] mx-auto" src="assets/img/svg/testimonials/quote.svg" alt="" />
                    </div>
                    <div>
                        <p class="md:text-[30px] text-xl text-muted dark:text-darkmuted italic leading-[1.6]">
                            I rarely like to write reviews, but the Marketify team truly deserve a standing ovation for their customer support, customisation and most importantly, friendliness and professionalism. Many thanks once
                            again for everything and hope that I get to deal with you again in the near future.
                        </p>
                    </div>
                    <div class="flex items-center gap-[25px] mt-[51px] justify-center">
                        <img src="assets/img/testimonials/4.jpg" class="!w-[60px] rounded-full" alt="" />
                        <div class="text-start">
                            <h5 class="font-secondary text-2xl font-medium">Mike Anderson</h5>
                            <p class="text-muted dark:text-darkmuted text-base leading-7">Vivaco Studio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute right-5 -top-[120px] hidden lg:block wow fadeInRight" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/testimonials/1.png'?>" alt="" /></div>
</section>
<!-- End Testimonial -->

<!-- Start Partners -->
<section class="relative pb-8">
    <div class="container relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 border-2 border-[#eee] dark:border-[#555] rounded-[10px]">
            <div class="border-b-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s">
                <a href="#" class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/1.png'?>" class="mx-auto max-w-[88%]" alt="" />
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/light/1.png'?>" class="mx-auto max-w-[88%]" alt="" />
                </a>
            </div>
            <div class="border-l-2 border-b-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#" class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/2.png'?>" class="mx-auto max-w-[88%]" alt="" />
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/light/2.png'?>" class="mx-auto max-w-[88%]" alt="" />
                </a>
            </div>
            <div class="md:border-l-2 border-b-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <a href="#" class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/3.png'?>" class="mx-auto max-w-[88%]" alt="" />
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/light/3.png'?>" class="mx-auto max-w-[88%]" alt="" />
                </a>
            </div>
            <div class="border-l-2 border-b-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <a href="#" class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/4.png'?>" class="mx-auto max-w-[88%]" alt="" />
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/light/4.png'?>" class="mx-auto max-w-[88%]" alt="" />
                </a>
            </div>
            <div class="border-[#eee] dark:border-[#555] border-b-2 md:border-b-0 wow fadeIn" data-wow-duration="1s">
                <a href="#" class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/5.png'?>" class="mx-auto max-w-[88%]" alt="" />
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/light/5.png'?>" class="mx-auto max-w-[88%]" alt="" />
                </a>
            </div>
            <div class="border-l-2 border-[#eee] dark:border-[#555] border-b md:border-b-0 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#" class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/6.png'?>" class="mx-auto max-w-[88%]" alt="" />
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/light/6.png'?>" class="mx-auto max-w-[88%]" alt="" />
                </a>
            </div>
            <div class="md:border-l-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <a href="#" class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/7.png'?>" class="mx-auto max-w-[88%]" alt="" />
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/light/7.png'?>" class="mx-auto max-w-[88%]" alt="" />
                </a>
            </div>
            <div class="border-l-2 border-[#eee] dark:border-[#555] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <a href="#" class="opacity-50 hover:opacity-100 cursor-pointer duration-300 h-[180px] flex items-center">
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/8.png'?>" class="mx-auto max-w-[88%]" alt="" />
                    <img src="<?php echo OMAR_URI . '/assets/img/partners/light/8.png'?>" class="mx-auto max-w-[88%]" alt="" />
                </a>
            </div>
        </div>
    </div>
    <div class="-top-[170px] left-0 absolute hidden lg:block" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/partners/1.png'?>" alt="" /></div>
</section>
<!-- End Partners -->

<!-- Start Blog -->
<section class="md:pt-[185px] pt-[120px] pb-[100px] md:pb-[160px] relative" id="blog">
    <div class="container relative z-10">
        <div class="grid grid-cols-1">
            <div class="text-center max-w-[680px] mx-auto">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">From My Blog</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">Our Recent Updates, Blog, Tips, Tricks & More</h3>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pt-[65px] gap-[25px]">
            <div class="wow fadeInUp" data-wow-duration="1s">
                <a href="#">
                    <div class="overflow-hidden group rounded-xl relative">
                        <img src="<?php echo OMAR_URI . '/assets/img/news/1.jpg'?>" class="scale-100 rounded-xl object-cover w-full h-full min-h-[303px] duration-300 group-hover:scale-110" alt="" />
                        <div class="bg-[#1cbe59] top-[18px] right-[18px] z-20 inline-block absolute rounded-xl text-center py-3 px-5">
                            <h3 class="text-2xl text-white leading-[1.2]">23</h3>
                            <span class="text-white text-sm">Dec</span>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="text-custom font-medium font-secondary"><a href="#">Web Development</a></p>
                        <h4 class="mt-1 leading-[1.4] text-[21px]"><a href="#" class="hover:text-custom">Jim Morisson Says when the musics over turn off the light</a></h4>
                    </div>
                </a>
            </div>
            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#">
                    <div class="overflow-hidden group rounded-xl relative">
                        <img src="<?php echo OMAR_URI . '/assets/img/news/2.jpg'?>" class="scale-100 rounded-xl object-cover w-full h-full min-h-[303px] duration-300 group-hover:scale-110" alt="" />
                        <div class="bg-[#1cbe59] top-[18px] right-[18px] z-20 inline-block absolute rounded-xl text-center py-3 px-5">
                            <h3 class="text-2xl text-white leading-[1.2]">23</h3>
                            <span class="text-white text-sm">Dec</span>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="text-custom font-medium font-secondary"><a href="#">Branding</a></p>
                        <h4 class="mt-1 leading-[1.4] text-[21px]"><a href="#" class="hover:text-custom">How to be appreciated for your hard work as a developer</a></h4>
                    </div>
                </a>
            </div>
            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <a href="#">
                    <div class="overflow-hidden group rounded-xl relative">
                        <img src="<?php echo OMAR_URI . '/assets/img/news/3.jpg'?>" class="scale-100 rounded-xl object-cover w-full h-full min-h-[303px] duration-300 group-hover:scale-110" alt="" />
                        <div class="bg-[#1cbe59] top-[18px] right-[18px] z-20 inline-block absolute rounded-xl text-center py-3 px-5">
                            <h3 class="text-2xl text-white leading-[1.2]">23</h3>
                            <span class="text-white text-sm">Dec</span>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="text-custom font-medium font-secondary"><a href="#">Social Media</a></p>
                        <h4 class="mt-1 leading-[1.4] text-[21px]"><a href="#" class="hover:text-custom">How designers and developers can collaborate better</a></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="top-[250px] left-[115px] absolute hidden lg:block wow zoomIn" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/news/1.png'?>" alt="" /></div>
    <div class="top-0 right-0 absolute hidden lg:block wow zoomIn" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/news/2.png'?>" alt="" /></div>
</section>
<!-- End Blog -->

<!-- Start Subcribe -->
<section>
    <div class="container">
        <div class="bg-[url('../img/subscribe/dots.jpg')] relative rounded-xl py-[90px] px-7 md:px-[86px]">
            <div class="bg-[#8067f0]/90 absolute inset-0 rounded-xl"></div>
            <div class="grid grid-cols-1 lg:grid-cols-2 relative gap-y-10 lg:gap-y-0 items-center gap-4">
                <div class="text-white wow fadeInLeft" data-wow-duration="1s">
                    <p class="md:text-[21px] text-[19px] font-medium font-secondary">Subscribe Now</p>
                    <h4 class="mt-4 text-[35px] md:text-5xl">Get My Newsletter</h4>
                    <p class="mt-4 text-lg">Get latest news, updates, tips and trics in your inbox</p>
                </div>
                <div>
                    <div class="relative wow fadeInRight" data-wow-duration="1s">
                        <input type="email" class="form-input custom-mail" placeholder="Your email here" />
                        <input type="submit" value="Send Now" class="sub-btn" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subcribe -->

<!-- Start Contact -->
<section class="md:pt-[190px] pt-[123px] pb-[120px] md:pb-[200px] relative" id="contact">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="text-center max-w-[680px] mx-auto">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Contact Me</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">I Want To Hear From You</h3>
                <p class="text-muted dark:text-darkmuted text-lg leading-[30px]">Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-20 gap-[25px]">
            <div class="space-y-[15px] wow fadeInLeft" data-wow-duration="1s">
                <div class="flex items-center gap-[25px]">
                    <div class="shrink-0 h-[88px] w-[88px] leading-[88px] rounded-full bg-[#fedfd7] inline-block text-center text-2xl">
                        <i class="icon-location text-custom"></i>
                    </div>
                    <div>
                        <h5 class="md:text-[30px] text-[25px]">Address</h5>
                        <p class="text-lg mt-1.5 text-muted dark:text-darkmuted leading-8">20, Somewhere in world</p>
                    </div>
                </div>
                <div class="flex items-center gap-[25px]">
                    <div class="shrink-0 h-[88px] w-[88px] leading-[88px] rounded-full bg-[#ddf5e6] inline-block text-center text-2xl">
                        <i class="icon-mail-1 text-[#1cbe59]"></i>
                    </div>
                    <div>
                        <h5 class="md:text-[30px] text-[25px]">Email</h5>
                        <p class="text-lg mt-1.5 text-muted dark:text-darkmuted leading-8">hello@dizme.com</p>
                    </div>
                </div>
                <div class="flex items-center gap-[25px]">
                    <div class="shrink-0 h-[88px] w-[88px] leading-[88px] rounded-full bg-[#ece8fd] inline-block text-center text-2xl">
                        <i class="icon-phone text-[#8067f0]"></i>
                    </div>
                    <div>
                        <h5 class="md:text-[30px] text-[25px]">Phone</h5>
                        <p class="text-lg mt-1.5 text-muted dark:text-darkmuted leading-8">+123 456 7890</p>
                    </div>
                </div>
            </div>
            <div class="right wow fadeInRight" data-wow-duration="1s">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div>
                            <label class="block">
                                <input type="text" class="form-input" placeholder="Your Name" required="" />
                            </label>
                        </div>
                        <div>
                            <label class="block">
                                <input type="email" class="form-input" placeholder="Your Email" required="" />
                            </label>
                        </div>
                        <div>
                            <label class="block">
                                <input type="text" class="form-input" placeholder="Your Phone" required="" />
                            </label>
                        </div>
                        <div>
                            <label class="block">
                                <input type="text" class="form-input" placeholder="Subject" required="" />
                            </label>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block">
                                <textarea class="form-input h-auto" rows="7" placeholder="Write your message here" required=""></textarea>
                            </label>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block">
                                <a href="#" class="btn-custom"> Submit Now</a>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="top-[100px] absolute left-0 hidden lg:block wow fadeInLeft" data-wow-duration="1s"><img src="assets/img/brushes/contact/1.png" alt="" /></div>
    <div class="absolute bottom-[100px] right-[150px] hidden lg:block wow fadeInRight" data-wow-duration="1s"><img src="assets/img/brushes/contact/2.png" alt="" /></div>
</section>
<!-- End Contact -->

<!-- Start Map -->
<section class="relative pb-[120px] md:pb-[200px]">
    <div class="container">
        <div class="grid grid-cols-1">
            <div>
                <div class="mapouter">
                    <div class="gmap_canvas rounded-xl">
                        <iframe
                            width="100%"
                            height="375"
                            id="gmap_canvas"
                            src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0"
                            scrolling="no"
                            marginheight="0"
                            marginwidth="0"
                        ></iframe>
                        <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon"></a><br />
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 375px;
                                width: 100%;
                            }
                        </style>
                        <a href="https://www.embedgooglemap.net">how to add google map</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 375px;
                                width: 100%;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Map -->
 
<?php get_footer(); ?>