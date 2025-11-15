<?php get_header(); ?>

<!-- Start Home -->
<section class="flex items-center bg-center bg-cover lg:h-screen pt-28 relative dizme_tm_header overflow-hidden z-0" id="home" style="background-image: url('<?php echo OMAR_URI . '/assets/img/slider/1.webp'?>');">
    <div class="container grid lg:grid-cols-2 items-center gap-[25px]">
        <div class="order-2 lg:order-1">
            <h3 class="text-custom text-[21px] text-center lg:text-left lg:text-[25px] xl:text-[45px] leading-[1.3] font-medium font-secondary">Hello, I'm</h3>
            <h1 class="text-[42px] lg:text-[60px] xl:text-[85px] text-center lg:text-left mb-[11px] lg:mb-[18px] leading-[1.3] font-medium font-secondary">Omar F Sumon</h1>
            <p class="lg:mb-9 mb-[15px] text-lg lg:text-[19px] xl:text-[28px] text-center lg:text-left font-medium">
                A <span class="text-[#1cbe59]">Web Developer</span> From <span class="text-[#8067f0]">Bangladesh</span>
            </p>
            <p class="lg:mb-[42px] text-muted mb-[30px] text-base lg:text-xl text-center lg:text-left leading-[1.5] max-w-[640px] mx-auto lg:ml-0">
                I build clean, modern, and high-performing websites that help businesses grow. I’ve already worked with clients across the USA, Europe, and Asia — <br>and I’m ready to build something amazing for you too.
            </p>
            <a href="#about" class="btn-custom relative">Hire Me</a>
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
                <path id="wheel" d="M123.359,79.775l0,72.843" fill="none" class="stroke-[20px] stroke-dark" />
                <path
                    id="mouse"
                    fill="none"
                    d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                    class="stroke-[20px] stroke-dark"
                />
            </svg>
        </a>
    </div>
</section>
<!-- End Home -->

<!-- Start Process -->
<section class="md:pt-[190px] pt-[135px] pb-[70px] overflow-hidden z-0" id="process">
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
                    <h3 class="text-2xl">Pixel-Perfect Design</h3>
                    <p class="mx-auto text-muted mt-5 leading-[30px]">Beautiful, modern, and user-friendly designs crafted with attention to detail.</p>
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
                    <p class="mx-auto text-muted mt-5 leading-[30px]">Your website will look flawless on every device — especially mobile.</p>
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
                    <h3 class="text-2xl">Performance Focused</h3>
                    <p class="mx-auto text-muted mt-5 leading-[30px]">Fast loading, SEO-friendly, and optimized for the best user experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Process -->

<!-- Start About -->
<section class="md:pt-[112px] pt-16 relative overflow-hidden z-0" id="about">
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
                    I mix creative design with solid development skills to build websites that not only look great but also perform exceptionally well. 
                    Whether it's a landing page or a complete website, I make sure everything feels smooth, intuitive, and conversion-ready.
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
<section class="pt-[113px] md:pt-[185px] pb-[88px] md:pb-[165px] relative overflow-hidden" id="portfolio">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="text-center max-w-[680px] mx-auto">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Portfolio</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">My Amazing Works</h3>
                <p class="text-muted text-lg leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
            </div>
        </div>
        <div class="dizme_tm_portfolio_titles"></div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <?php
                $args = array(
                    'post_type'      => 'portfolio',
                    'posts_per_page' => 6,
                    'post_status'    => 'publish',
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) : 
                    while ( $query->have_posts() ) : $query->the_post(); 
                    
                    // ACF PDF ফিল্ড (Array রিটার্ন)
                    $pdf_field = get_field('full_page'); // অথবা 'full_pdf' যদি নতুন ফিল্ড হয়
                    $pdf_url   = is_array($pdf_field) ? $pdf_field['url'] : $pdf_field;
                    $pdf_url   = $pdf_url ?: ''; // খালি হলে ফলব্যাক

                    $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'large' ) : OMAR_URI . '/assets/img/placeholder.jpg';
                    $title     = get_the_title();
            ?>

            <div class="rounded-xl overflow-hidden group relative shadow-md">
                <div 
                    class="main-img-box cursor-pointer" 
                    data-title="<?php echo esc_attr( $title ); ?>"
                >
                    <!-- ক্লিকে পপআপ ট্রিগার (PDF URL পাস করুন) -->
                    <a 
                        class="pdf-popup-link block" 
                        href="#" 
                        data-pdf-url="<?php echo esc_url( $pdf_url ); ?>"
                        data-pdf-title="<?php echo esc_attr( $title ); ?>"
                    >
                        <div class="main group-hover:scale-110 overflow-hidden transition-transform duration-500">
                            <img 
                                src="<?php echo esc_url( $thumb_url ); ?>" 
                                class="object-cover w-full h-full aspect-square" 
                                alt="<?php echo esc_attr( $title ); ?>" 
                            />
                        </div>
                    </a>
                </div>
            </div>

            <?php 
                endwhile; 
                wp_reset_postdata(); 
            endif; 
            ?>  
            <div id="pdf-popup" class="fixed inset-0 z-[99999] hidden overflow-hidden">
              
                <div id="pdf-overlay" class="absolute inset-0 bg-black/60 backdrop-blur-md cursor-pointer"></div>

                <div class="absolute inset-0 flex items-center justify-center p-4">
                    <div class="pdf-container bg-white rounded-2xl shadow-2xl w-full max-w-[1295px] h-[90vh] flex flex-col overflow-hidden relative">
                        <ul class="flex justify-center items-center absolute top-3 left-3">
                            <li class="text-[#fc615d]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                </svg>
                            </li>
                            <li class="text-[#fcbf41]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                </svg>
                            </li>
                            <li class="text-[#34ca4a]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                </svg>
                            </li>
                        </ul>
                        <button id="pdf-close" class="absolute top-4 right-4 leading-[1] text-[#444444] hover:text-[#fc615d] text-2xl z-10">&times;</button>

                        <h3 id="pdf-title" class="text-2xl font-bold text-center p-4 border-b border-[#d6dbe5]"></h3>
                        
                        <div id="pdf-error" class="text-red-500 text-center p-4 hidden"></div>

                        <div class="flex-1 overflow-y-auto no-scrollbar flex justify-center items-start bg-gray-50">
                            <canvas id="pdf-canvas" class="shadow-lg max-w-full"></canvas>
                        </div>
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
<section class="overflow-hidden z-0">
    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[200px] items-center">
            <div>
                <div class="mb-[23px] wow fadeInUp" data-wow-duration="1s">
                    <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Design is Life</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mt-1.5">I Develop Skills Regularly to Stay Updated</h3>
                </div>
                <p class="text-muted lg:max-w-[485px] leading-[30px] wow fadeInUp" data-wow-duration="1s">Tech evolves every day, so I keep leveling up. 
                    Here’s my current skill lineup:</p>
                <div class="pt-[30px] space-y-[22px] wow fadeInUp" data-wow-duration="1s">
                    <div class="w-full mb-[22px] relative" data-value="95" data-color="#f75023">
                        <div class="mb-[9px] block"><span class="text-lg font-medium font-secondary inline-block">HTML</span><span class="absolute right-[5%] text-custom">95%</span></div>
                        <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                            <div class="bg-custom h-2 rounded-full" style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="w-full mb-[22px] relative" data-value="90" data-color="#f75023">
                        <div class="mb-[9px] block"><span class="text-lg font-medium font-secondary inline-block">CSS</span><span class="absolute right-[10%] text-custom">90%</span></div>
                        <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                            <div class="bg-[#1cbe59] h-2 rounded-full" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="w-full mb-[22px] relative" data-value="75" data-color="#f75023">
                        <div class="mb-[9px] block"><span class="text-lg font-medium font-secondary inline-block">JavaScript</span><span class="absolute right-[25%] text-custom">75%</span></div>
                        <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                            <div class="bg-[#f7e025] h-2 rounded-full" style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="w-full mb-[22px] relative" data-value="85" data-color="#f75023">
                        <div class="mb-[9px] block"><span class="text-lg font-medium font-secondary inline-block">PHP</span><span class="absolute right-[15%] text-custom">85%</span></div>
                        <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                            <div class="bg-[#8067f0] h-2 rounded-full" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div class="w-full mb-[22px] relative" data-value="95" data-color="#f75023">
                        <div class="mb-[9px] block"><span class="text-lg font-medium font-secondary inline-block">WordPress</span><span class="absolute right-[5%] text-custom">95%</span></div>
                        <div class="w-full bg-[#e7e5f1] rounded-full h-2">
                            <div class="bg-[#00749c] h-2 rounded-full" style="width: 95%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <picture>
                    <source srcset="<?php echo OMAR_URI . '/assets/img/skills/1.webp'?>" type="image/webp">
                    <img src="<?php echo OMAR_URI . '/assets/img/skills/1.webp'?>" class="max-h-[800px] mx-auto !z-0" alt="" />
                </picture>
            </div>
        </div>
    </div>
</section>
<!-- End Skills -->

<!-- Start Services -->
<section class="md:pt-[178px] pt-[120px] pb-[98px] md:pb-[160px] relative overflow-hidden z-0" id="service">
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
                        <h3 class="text-[30px] mb-4">Landing Page Design</h3>
                        <p class="text-[21px] mb-5 font-medium font-secondary text-dark ">
                            <span>Starts from <span class="text-2xl text-custom">$99</span></span>
                        </p>
                        <p class="text-muted text-lg leading-[30px]">
                            landing page design is a type of website design that is focused on a single page, typically a landing page, that is designed to convert visitors into customers.
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
                        <h3 class="text-[30px] mb-4">Website Design</h3>
                        <p class="text-[21px] mb-5 font-medium font-secondary text-dark">
                            <span>Starts from <span class="text-2xl text-custom">$299</span></span>
                        </p>
                        <p class="text-muted text-lg leading-[30px]">
                            website design is a type of website design that is focused on a single page, typically a landing page, that is designed to convert visitors into customers.
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
                        <h3 class="text-[30px] mb-4">Website Development</h3>
                        <p class="text-[21px] mb-5 font-medium font-secondary text-dark">
                            <span>Starts from <span class="text-2xl text-custom">$399</span></span>
                        </p>
                        <p class="text-muted text-lg leading-[30px]">
                            website development is a type of website design that is focused on a single page, typically a landing page, that is designed to convert visitors into customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="shadow-[18px_0px_87px_rgba(10,15,17,0.07)] bg-white p-8 lg:p-[65px] rounded-xl space-y-6 lg:space-y-0 lg:flex items-start gap-12 tilt-effect">
                    <div class="shrink-0 relative inline-block">
                        <img class="top-1/2 -translate-y-1/2 absolute inset-x-0 w-[45px] h-[45px] mx-auto" src="<?php echo OMAR_URI . '/assets/img/svg/service/web.svg'?>" alt="" />
                        <img src="<?php echo OMAR_URI . '/assets/img/brushes/service/4.png'?>" class="dark:hidden" alt="" />
                    </div>
                    <div>
                        <h3 class="text-[30px] mb-4">Website Maintenance</h3>
                        <p class="text-[21px] mb-5 font-medium font-secondary text-dark">
                            <span>Starts from <span class="text-2xl text-custom">$50</span></span>
                        </p>
                        <p class="text-muted text-lg leading-[30px]">
                            website maintenance is a type of website design that is focused on a single page, typically a landing page, that is designed to convert visitors into customers.
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
<section class="relative pb-[127px] md:pb-[187px] overflow-hidden z-0">
    <div class="px-4 lg:px-0 relative z-10">
        <!-- Header -->
        <div class="grid grid-cols-1">
            <div class="text-center max-w-[680px] mx-auto">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Testimonials</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">What My Clients Say</h3>
                <p class="text-muted text-lg leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
            </div>
        </div>

        <!-- Carousel -->
        <div class="flex items-center justify-center mt-20 relative bg-cover bg-top" 
             style="background-image: url('<?php echo OMAR_URI . '/assets/img/testimonials/bg-client.webp'?>');">
             
            <div id="owl-demo" class="owl-carousel owl-theme max-w-[900px] mx-auto">

                <?php
                $args = array(
                    'post_type'      => 'testimonial',
                    'posts_per_page' => 6,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) : 
                    while ( $query->have_posts() ) : $query->the_post(); 
                        $review     = get_field('review');
                        $location   = get_field('client_location');
                        $client_img = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'thumbnail' ) : OMAR_URI . '/assets/img/placeholder.webp';
                ?>

                        <!-- প্রতিটি স্লাইড -->
                        <div class="item text-center">
                            <!-- Quote Icon -->
                            <div class="mb-[35px]">
                                <?php get_template_part( 'assets/img/svg/quote' ); ?>
                            </div>

                            <!-- Review Text -->
                            <div>
                                <p class="md:text-[30px] text-xl text-muted italic leading-[1.6]">
                                    <?php echo wp_kses_post( $review ); ?>
                                </p>
                            </div>

                            <!-- Client Info -->
                            <div class="flex items-center gap-[25px] mt-[51px] justify-center">
                                <img 
                                    src="<?php echo esc_url( $client_img ); ?>" 
                                    class="!w-[60px] !h-[60px] rounded-full object-cover" 
                                    alt="<?php the_title_attribute(); ?>" 
                                />
                                <div class="text-start">
                                    <h5 class="font-secondary text-2xl font-medium">
                                        <?php the_title(); ?>
                                    </h5>
                                    <span class="text-muted text-base leading-7">
                                        <?php echo esc_html( $location ); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- /item -->

                <?php 
                    endwhile; 
                    wp_reset_postdata(); 
                endif; 
                ?>

            </div>
            <!-- /owl-carousel -->
        </div>
    </div>

    <!-- Decorative Image -->
    <div class="absolute right-5 -top-[120px] hidden lg:block wow fadeInRight" data-wow-duration="1s">
        <img src="<?php echo OMAR_URI . '/assets/img/brushes/testimonials/1.png'?>" alt="" />
    </div>
</section>
<!-- End Testimonial -->

<!-- Start Partners -->
<section class="relative pb-16 overflow-hidden z-0">
    <div class="container relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 border-2 border-[#eee] rounded-[10px]">
            <div class="border-b-2 border-[#eee] opacity-50 hover:opacity-100 cursor-pointer duration-300 flex items-center h-[180px] wow fadeIn" data-wow-duration="1s">
                <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/1.png'?>" class="mx-auto max-w-[80%]" alt="" />
            </div>
            <div class="border-l-2 border-b-2 border-[#eee] opacity-50 hover:opacity-100 cursor-pointer duration-300 flex items-center h-[180px] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/2.png'?>" class="mx-auto max-w-[80%]" alt="" />
            </div>
            <div class="md:border-l-2 border-b-2 border-[#eee] opacity-50 hover:opacity-100 cursor-pointer duration-300 flex items-center h-[180px] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/3.png'?>" class="mx-auto max-w-[80%]" alt="" />
            </div>
            <div class="border-l-2 border-b-2 border-[#eee] opacity-50 hover:opacity-100 cursor-pointer duration-300 flex items-center h-[180px] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/4.png'?>" class="mx-auto max-w-[80%]" alt="" />
            </div>
            <div class="border-[#eee] border-b-2 md:border-b-0 opacity-50 hover:opacity-100 cursor-pointer duration-300 flex items-center h-[180px] wow fadeIn" data-wow-duration="1s">
                <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/5.png'?>" class="mx-auto max-w-[80%]" alt="" />
            </div>
            <div class="border-l-2 border-[#eee] border-b md:border-b-0 opacity-50 hover:opacity-100 cursor-pointer duration-300 flex items-center h-[180px] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/6.png'?>" class="mx-auto max-w-[80%]" alt="" />
            </div>
            <div class="md:border-l-2 border-[#eee] border-b md:border-b-0 opacity-50 hover:opacity-100 cursor-pointer duration-300 flex items-center h-[180px] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/7.png'?>" class="mx-auto max-w-[80%]" alt="" />
            </div>
            <div class="border-l-2 border-[#eee] border-b md:border-b-0 opacity-50 hover:opacity-100 cursor-pointer duration-300 flex items-center h-[180px] wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <img src="<?php echo OMAR_URI . '/assets/img/partners/dark/8.png'?>" class="mx-auto max-w-[80%]" alt="" />
            </div>
        </div>
    </div>
    <div class="-top-[170px] left-0 absolute hidden lg:block" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/partners/1.png'?>" alt="" /></div>
</section>
<!-- End Partners -->

<!-- Start Subcribe -->
<section class="overflow-hidden z-0">
    <div class="container">
        <div class="rounded-xl overflow-hidden" style="background-image: url('<?php echo OMAR_URI . '/assets/img/subscribe/dots.jpg'?>');">
            <div class="bg-[#8067f0]/90 py-[90px] px-7 md:px-[86px] grid grid-cols-1 lg:grid-cols-2 relative gap-y-10 lg:gap-y-0 items-center gap-4">
                <div class="text-white wow fadeInLeft" data-wow-duration="1s">
                    <p class="md:text-[21px] text-[19px] font-medium font-secondary">Subscribe Now</p>
                    <h4 class="mt-4 text-[35px] md:text-5xl">Get My Newsletter</h4>
                    <p class="mt-4 text-lg">Get latest news, updates, tips and trics in your inbox</p>
                </div>
                <div class="relative wow fadeInRight" data-wow-duration="1s">
                    <input type="email" class="form-input custom-mail" placeholder="Your email here" />
                    <input type="submit" value="Send Now" class="sub-btn" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subcribe -->

<!-- Start Contact -->
<section class="md:py-[150px] py-[100px] relative overflow-hidden z-0" id="contact">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="text-center max-w-[680px] mx-auto">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Contact Me</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">I Want To Hear From You</h3>
                <p class="text-muted text-lg leading-[30px]">Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-20 gap-[25px]">
            <div class="space-y-[50px] wow fadeInLeft" data-wow-duration="1s">
                <div class="flex items-center gap-[25px]">
                    <div class="h-[88px] w-[88px] rounded-full bg-[#fedfd7] inline-flex items-center justify-center text-[#f75023]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                <circle cx="12" cy="10" r="3" />
                            </g>
                        </svg>
                    </div>
                    <div>
                        <h5 class="md:text-[30px] text-[25px]">Address</h5>
                        <p class="text-lg mt-1.5 text-muted leading-8">Savar, Dhaka, Bangladesh</p>
                    </div>
                </div>
                <div class="flex items-center gap-[25px]">
                    <div class="h-[88px] w-[88px] rounded-full inline-flex items-center justify-center text-[#1cbe59] bg-[#ddf5e6]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M11 19H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6" />
                                <path d="m3 7l9 6l9-6m-1 14l2-2l-2-2m-3 0l-2 2l2 2" />
                            </g>
                        </svg>
                    </div>
                    <div>
                        <h5 class="md:text-[30px] text-[25px]">Email</h5>
                        <p class="text-lg mt-1.5 text-muted leading-8">hello@omarfsumon.com</p>
                    </div>
                </div>
                <div class="flex items-center gap-[25px]">
                    <div class="h-[88px] w-[88px] rounded-full inline-flex items-center justify-center bg-[#ece8fd] text-[#8067f0]">
                       <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M8.656 3c-.523 0-1.039.188-1.469.531l-.062.031l-.031.032l-3.125 3.219l.031.03a3.13 3.13 0 0 0-.844 3.376c.004.008-.004.023 0 .031c.848 2.426 3.016 7.11 7.25 11.344c4.25 4.25 8.996 6.332 11.344 7.25h.031a3.59 3.59 0 0 0 3.469-.688L28.406 25c.828-.828.828-2.266 0-3.094l-4.062-4.062l-.032-.063c-.828-.828-2.296-.828-3.125 0l-2 2a16.2 16.2 0 0 1-4.093-2.812c-1.637-1.563-2.473-3.36-2.781-4.063l2-2c.84-.84.855-2.238-.032-3.062l.031-.032l-.093-.093l-4-4.125l-.031-.031l-.063-.032A2.36 2.36 0 0 0 8.656 3m0 2a.35.35 0 0 1 .219.094l4 4.093l.094.094c-.008-.008.058.098-.063.219l-2.5 2.5l-.469.438l.22.624s1.148 3.075 3.562 5.376l.219.187C16.261 20.746 19 21.906 19 21.906l.625.282l2.969-2.97c.172-.171.14-.171.312 0L27 23.314c.172.171.172.109 0 .28l-3.063 3.063c-.46.395-.949.477-1.53.282c-2.266-.891-6.669-2.825-10.595-6.75c-3.957-3.958-6.023-8.446-6.78-10.625c-.153-.407-.044-1.008.312-1.313l.062-.063l3.032-3.093A.35.35 0 0 1 8.655 5z" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="md:text-[30px] text-[25px]">Phone</h5>
                        <p class="text-lg mt-1.5 text-muted leading-8">+880 1986 837385</p>
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
    <div class="top-[100px] absolute left-0 hidden lg:block wow fadeInLeft" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/contact/1.png'?>" alt="" /></div>
    <div class="absolute bottom-[100px] right-[150px] hidden lg:block wow fadeInRight" data-wow-duration="1s"><img src="<?php echo OMAR_URI . '/assets/img/brushes/contact/2.png'?>" alt="" /></div>
</section>
<!-- End Contact -->

<!-- FAQ -->
<section id="faq" class="pb-[100px] overflow-hidden">
    <div class="container">
       <h2 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5 text-center">Frequently Asked Questions</h2>
       <div class="accordion max-w-5xl mx-auto">
            <details>
                <summary>Is my data safe and secure with you?
                    <?php get_template_part('assets/img/svg/arrow'); ?>
                </summary>
                <p>Absolutely! Your data and credentials are always 100% confidential.</p>
            </details>
            <details>
                <summary>Will I be able to edit my website later?
                    <?php get_template_part('assets/img/svg/arrow'); ?>
                </summary>
                <p>Yes! I use Elementor, so you can easily update text, images, and layouts without needing to code.</p>
            </details>
            <details>
                <summary>Can you build my project on your own server?
                    <?php get_template_part('assets/img/svg/arrow'); ?>
                </summary>
                <p>Definitely, I can build your project on my own server and later I can transfer it to your server.</p>
            </details>
            <details>
                <summary>Do you customize any provided theme ?
                    <?php get_template_part('assets/img/svg/arrow'); ?>
                </summary>
                <p>Yes, I also. I have already done many websites using almost the maximum number of builders of WordPress. So I am ready for your response.</p>
            </details>
            <details>
                <summary>I am ready to purchase! What do I need to get started?
                    <?php get_template_part('assets/img/svg/arrow'); ?>
                </summary>
                <p>You need hosting & domain name. If you haven’t domain hosting. Don’t get afraid. I will help you with every step. For your existing site give me login access.</p>
            </details>
            <details>
                <summary>Do you have any team for work?
                    <?php get_template_part('assets/img/svg/arrow'); ?>
                </summary>
                <p>Yes, we are a web development agency. I have 8 member web developers. So I can deliver the work timely.</p>
            </details>
       </div>
    </div>
</section>
<!-- End FAQ -->

<?php get_footer(); ?>