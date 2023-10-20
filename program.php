<?php
include "functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Degree Program - FOE-UOR | Techno 2023</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <script defer="" data-domain="preview.cruip.com,rollup.cruip.com" src="js/script.js"></script>
</head>

<body class="cxs0p c8fn4 cqrjt cklvb cb0rx">

    <!-- Page wrapper -->
    <div class="cx3hx ctkta c1yb0 cqkfc">

        <!-- Site header -->
        <header class="astro-ES6RJE63">
            <nav class="absolute z-10 w-full border-b border-black/5 dark:border-white/5 lg:border-transparent">
                <div class="mx-auto max-w-6xl px-6 md:px-12 lg:px-6 xl:px-0">
                    <div class="relative flex flex-wrap items-center justify-between gap-6 py-2 md:gap-0 md:py-4">
                        <div class="relative z-20 flex w-full justify-between md:px-0 lg:w-max">
                            <a href="#home" aria-label="logo" class="flex items-center space-x-2 px-0">
                                
                                <img src="images/main_logo.svg" width="60" height="60"/>

                                
                            </a>

                            <div class="relative flex max-h-10 items-center lg:hidden">
                                <button type="button" aria-label="humburger" id="hamburger" class="relative -mr-6 p-6">
                                    <div aria-hidden="true" id="line" class="m-auto h-0.5 w-5 rounded bg-sky-900 transition duration-300 dark:bg-gray-300"></div>
                                    <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 transition duration-300 dark:bg-gray-300"></div>
                                </button>
                            </div>
                        </div>
                        <div id="navLayer" aria-hidden="true" class="fixed inset-0 z-10 h-screen w-screen origin-bottom scale-y-0 bg-white/70 backdrop-blur-2xl transition duration-500 dark:bg-gray-900/70 lg:hidden"></div>
                        <div id="navlinks" class="invisible absolute top-full left-0 z-20 w-full origin-top-right translate-y-1 scale-90 flex-col flex-wrap justify-end gap-6 rounded-3xl border border-gray-100 bg-white p-8 opacity-0 shadow-2xl shadow-gray-600/10 transition-all duration-300 dark:border-gray-700 dark:bg-gray-800 dark:shadow-none lg:visible lg:relative lg:flex lg:w-7/12 lg:translate-y-0 lg:scale-100 lg:flex-row lg:items-center lg:gap-0 lg:border-none lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none">
                            <div class="w-full text-gray-600 dark:text-gray-200 lg:w-auto lg:pr-4 lg:pt-0">
                                <ul class="flex flex-col gap-6 tracking-wide lg:flex-row lg:justify-center lg:gap-0 lg:text-sm">
                                    <li>
                                        <a href="#features" class="flex items-center transition hover:text-primary dark:hover:text-white md:px-4">
                                            <span class="text-base lg:text-sm lg:font-thin">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#solution" class="flex items-center transition hover:text-primary dark:hover:text-white md:px-4">
                                            <span class="text-base lg:text-sm lg:font-thin">About Us</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#reviews" class="flex items-center transition hover:text-primary dark:hover:text-white md:px-4">
                                            <span class="text-base lg:text-sm lg:font-thin">Contact Us</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </div>

                    
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Page content -->
        <main class="cmm3x">

            <!-- Hero -->
            <section>
                <div class="c910c c82l3 ckx8h cl9xt csj8y">

                    <!-- Particles animation -->
                    <div class="clm9l crjl7 cbati" aria-hidden="true">
                        <canvas data-particle-animation=""></canvas>
                    </div>

                    <!-- Illustration -->
                    <div class="cd3pv clm9l crjl7 cbati c0n2e cqkfc cifrt" aria-hidden="true">
                        <div class="clm9l cj9ju ck1c9 cbati c22q0">
                            <img src="images/glow-bottom.svg" class="cl1mx" width="2146" height="774"
                                alt="Hero Illustration">
                        </div>
                    </div>

                    
                </div>

                 
            </section>


            <!-- Features -->
            <section>
                <div class="c910c c82l3 ckx8h cl9xt csj8y">

                    <!-- Illustration -->
                    <div class="cd3pv clm9l crjl7 cbati c0n2e cqkfc ci14e" aria-hidden="true">
                        <div class="clm9l ck1c9 cto33 cbati c22q0">
                            <img src="images/glow-top.svg" class="cl1mx" width="1404" height="658"
                                alt="Features Illustration">
                        </div>
                    </div>

                    <div class="ch0mu c9b6d c6ftu c1gox">

                        <div x-data="{ tab: '1' }">

                            <!-- Section content -->
                            <div class="c82l3 cx3hx cbywq c1yb0 cw977 ckwfp cik1e cxp2a c7lcb cj1ja cc6yz crj76">

                                <!-- Content -->
                                <div class="clx9g c810o cls9d" data-aos="fade-down">
                                    <!-- Content #1 -->
                                    

                                    <h3 class="cqbmj cyvm0 c1wf5 cj15g ctvzo cnu2b cvbxf c3btc"><?php echo $program["department_name"] ?>


                                    </h3>
                                    <p class="c4dav cabeq cwx0r"><?php echo $program["department_description"] ?></p>
                

                                </div>

                                <!-- Carousel -->
                                

                                
                                <br>

                               

                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- Projects list header -->
            <section>
                <div class="c910c c82l3 ckx8h cl9xt csj8y">
                <div class="cw4bu aos-init aos-animate" data-aos="fade-down" style="--mouse-x: 523.2265014648438px; --mouse-y: 14.394500732421875px;">
                                    <div class="c910c c3ztf cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cdt9a">
                                        <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                            <div class="cx3hx c1yb0 cxp2a c3mep c4c5u">
                                                <!-- Blurred shape -->
                                                <div class="clm9l cmcb7 cto33 cf1fs" aria-hidden="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="342" height="393">
                                                        <defs>
                                                            <linearGradient id="bs-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                                                <stop offset="0%" stop-color="#6366F1" data-darkreader-inline-stopcolor="" style="--darkreader-inline-stopcolor: #0d0f8c;"></stop>
                                                                <stop offset="100%" stop-color="#6366F1" stop-opacity="0" data-darkreader-inline-stopcolor="" style="--darkreader-inline-stopcolor: #0d0f8c;"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <path fill="url(#bs-a)" fill-rule="evenodd" d="m104 .827 461 369-284 58z" transform="translate(0 -112.827)" opacity=".7"></path>
                                                    </svg>
                                                </div>
                                                <!-- Radial gradient -->
                                                <div class="cd3pv clm9l cj9ju ck1c9 cbati cx3hx c6prr c3ztf c22q0 cht4j c7n90 c16i7" aria-hidden="true">
                                                    <div class="c0ddw clm9l crjl7 c1rz6 cytct c05st cdbh6"></div>
                                                    <div class="c0ddw clm9l c2axp cwtr9 c1rz6 cs33t czb29"></div>
                                                </div>
    
    
                                                <!-- Text -->
                                                <div class="clx9g c7f0g c47li cgzap cls9d chb5s cha6t cxsq4">
                                                    <div class="c0o0c">
                                                        <div>
                                                            <h3 class="cex2t cyvm0 c1wf5 cj15g ctvzo cnu2b cleoa ck8oc c0hcy c3btc">Optimized for security</h3>
                                                            <p class="cwx0r">Optimize for user experience and privacy. Use social login integrations, lower user friction, incorporate rich user profiling, and facilitate more transactions.</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="csi51 c910c cvgqz cqlg5 cl1vv cl17h cxli6 cux88 c85im c3tia cr5is cxnq1 c4a6x car0u" href="#0">
                                                            <span class="c910c cex2t c7n90">
                                                                Learn more <span class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Image -->
                                                <div class="c910c cdrsb c0l3r cqkfc cbwl6">
                                                    <img class="clm9l cj9ju ck1c9 c82l3 cl1mx c22q0 c270x cgo1b ci2v4" src="./images/feature-image-01.png" width="504" height="400" alt="Feature 01">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    <!-- Particles animation -->
                    <div class="clm9l crjl7 c82l3 ckx8h cl9xt csj8y">
                        <div class="clm9l crjl7 cbati" aria-hidden="true">
                            <canvas data-particle-animation="" data-particle-quantity="5"></canvas>
                        </div>
                    </div>

                    <h3 class="cqbmj cyvm0 c1wf5 cj15g ctvzo cnu2b cvbxf c3btc">Recent Research And Projects
                    </h3>

                    <!--Project 1-->
                    <div class="cegmx" data-aos="fade-down">
                        <div class="c910c c3ztf cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cdt9a">
                            <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                <div class="cx3hx c1yb0">
                                    <!-- Radial gradient -->
                                    <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr cp4qc c22q0 cht4j" aria-hidden="true">
                                        <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cdhkg"></div>
                                    </div>
                                    <!-- Text -->
                                    <div class="clx9g c7f0g c47li cgzap cls9d chb5s cha6t">
                                        <div>
                                            <h3 class="cex2t cyvm0 c1wf5 cj15g ctvzo cnu2b cleoa ck8oc c0hcy c3btc"><?php echo $program["project1"] ?></h3>
                                            <p class="cwx0r"><?php echo $program["project1_description"] ?></p>
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <div class="c910c cdrsb c0l3r cqkfc cbwl6 ccp8y">
                                        <img class="clm9l cj9ju ck1c9 c82l3 cl1mx c22q0 c270x cgo1b c6nyy ci2v4" src=<?php echo $program["project1_image"] ?> width="536" height="230" alt="Feature 02">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Project 1-->
                    <div class="cegmx" data-aos="fade-down" style="margin-top: 40px;">
                        <div class="c910c c3ztf cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cdt9a">
                            <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                <div class="cx3hx c1yb0">
                                    <!-- Radial gradient -->
                                    <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr cp4qc c22q0 cht4j" aria-hidden="true">
                                        <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cdhkg"></div>
                                    </div>
                                    <!-- Text -->
                                    <div class="clx9g c7f0g c47li cgzap cls9d chb5s cha6t">
                                        <div>
                                            <h3 class="cex2t cyvm0 c1wf5 cj15g ctvzo cnu2b cleoa ck8oc c0hcy c3btc"><?php echo $program["project2"] ?></h3>
                                            <p class="cwx0r"><?php echo $program["project2_description"] ?></p>
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <div class="c910c cdrsb c0l3r cqkfc cbwl6 ccp8y">
                                        <img class="clm9l cj9ju ck1c9 c82l3 cl1mx c22q0 c270x cgo1b c6nyy ci2v4" src=<?php echo $program["project2_image"] ?> width="536" height="230" alt="Feature 02">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Project 2-->
                    <div class="cegmx" data-aos="fade-down" style="margin-top: 40px;">
                        <div class="c910c c3ztf cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cdt9a">
                            <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                <div class="cx3hx c1yb0">
                                    <!-- Radial gradient -->
                                    <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr cp4qc c22q0 cht4j" aria-hidden="true">
                                        <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cdhkg"></div>
                                    </div>
                                    <!-- Text -->
                                    <div class="clx9g c7f0g c47li cgzap cls9d chb5s cha6t">
                                        <div>
                                            <h3 class="cex2t cyvm0 c1wf5 cj15g ctvzo cnu2b cleoa ck8oc c0hcy c3btc"><?php echo $program["project3"] ?></h3>
                                            <p class="cwx0r"><?php echo $program["project3_description"] ?></p>
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <div class="c910c cdrsb c0l3r cqkfc cbwl6 ccp8y">
                                        <img class="clm9l cj9ju ck1c9 c82l3 cl1mx c22q0 c270x cgo1b c6nyy ci2v4" src=<?php echo $program["project3_image"] ?> width="536" height="230" alt="Feature 02">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Project 3-->
                    <div class="cegmx" data-aos="fade-down" style="margin-top: 40px;">
                        <div class="c910c c3ztf cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cdt9a">
                            <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                <div class="cx3hx c1yb0">
                                    <!-- Radial gradient -->
                                    <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr cp4qc c22q0 cht4j" aria-hidden="true">
                                        <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cdhkg"></div>
                                    </div>
                                    <!-- Text -->
                                    <div class="clx9g c7f0g c47li cgzap cls9d chb5s cha6t">
                                        <div>
                                            <h3 class="cex2t cyvm0 c1wf5 cj15g ctvzo cnu2b cleoa ck8oc c0hcy c3btc"><?php echo $program["project4"] ?></h3>
                                            <p class="cwx0r"><?php echo $program["project4_description"] ?></p>
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <div class="c910c cdrsb c0l3r cqkfc cbwl6 ccp8y">
                                        <img class="clm9l cj9ju ck1c9 c82l3 cl1mx c22q0 c270x cgo1b c6nyy ci2v4" src=<?php echo $program["project4_image"] ?> width="536" height="230" alt="Feature 02">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </section>

            <!-- Society list header -->
            <section>
                <div class="c910c c82l3 ckx8h cl9xt csj8y" style="margin-top: 40px;">

                    <!-- Particles animation -->
                    <div class="clm9l crjl7 c82l3 ckx8h cl9xt csj8y">
                        <div class="clm9l crjl7 cbati" aria-hidden="true">
                            <canvas data-particle-animation="" data-particle-quantity="5"></canvas>
                        </div>
                    </div>

                    <h3 class="cqbmj cyvm0 c1wf5 cj15g ctvzo cnu2b cvbxf c3btc">Student Socities
                    </h3>

                    <div class="c910c c85im c3tia c1qoc cg349 c3ud2 cstoe cacen cho2n croff cuwru c0fcr cz26n co83o ch9nl c3inc cdwz0">
                        <div class="testimonials-carousel swiper-container car0u">
                            <div class="swiper-wrapper cdfzo" data-highlighter="">
                                <!-- Carousel items -->
                                <div class="swiper-slide c910c c6skp cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cjz9y cdt9a">
                                    <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                        <!-- Particles animation -->
                                        <div class="clm9l crjl7 cbati cazhe clyql cpvha cl17h cri0w c5bh9" aria-hidden="true">
                                            <canvas data-particle-animation="" data-particle-quantity="3"></canvas>
                                        </div>                                            
                                        <!-- Radial gradient -->
                                        <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr c8t6z c22q0 cht4j" aria-hidden="true">
                                            <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cpmj6 chfxh cpvha cl17h cxxj9"></div>
                                        </div>
                                        <div class="cx3hx c3ztf c1yb0 c47li">
                                            <img class="ca0bb" src=<?php echo $program["society1_image"] ?> width="56" height="56" alt="Icon 01">
                                            <div class="cmm3x">
                                                <div class="cnc21 cabeq c0hcy"><?php echo $program["society1"] ?></div>
                                                <div class="ca0bb cwx0r"><?php echo $program["society1_description"] ?></div>
                                            </div>
                                            <div class="cbtot">
                                                <a class="cex2t c7n90 crcb7 c1xbd cvgqz cqlg5 cl1vv cl17h c4a6x car0u" href="#0">Learn More <span class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="swiper-slide c910c c6skp cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cjz9y cdt9a">
                                    <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                        <!-- Particles animation -->
                                        <div class="clm9l crjl7 cbati cazhe clyql cpvha cl17h cri0w c5bh9" aria-hidden="true">
                                            <canvas data-particle-animation="" data-particle-quantity="3"></canvas>
                                        </div>                                            
                                        <!-- Radial gradient -->
                                        <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr c8t6z c22q0 cht4j" aria-hidden="true">
                                            <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cpmj6 chfxh cpvha cl17h cxxj9"></div>
                                        </div>
                                        <div class="cx3hx c3ztf c1yb0 c47li">
                                            <img class="ca0bb" src=<?php echo $program["society2_image"] ?> width="56" height="56" alt="Icon 01">
                                            <div class="cmm3x">
                                                <div class="cnc21 cabeq c0hcy"><?php echo $program["society2"] ?></div>
                                                <div class="ca0bb cwx0r"><?php echo $program["society2_description"] ?></div>
                                            </div>
                                            <div class="cbtot">
                                                <a class="cex2t c7n90 crcb7 c1xbd cvgqz cqlg5 cl1vv cl17h c4a6x car0u" href="#0">Learn More <span class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide c910c c6skp cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cjz9y cdt9a">
                                    <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                        <!-- Particles animation -->
                                        <div class="clm9l crjl7 cbati cazhe clyql cpvha cl17h cri0w c5bh9" aria-hidden="true">
                                            <canvas data-particle-animation="" data-particle-quantity="3"></canvas>
                                        </div>                                            
                                        <!-- Radial gradient -->
                                        <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr c8t6z c22q0 cht4j" aria-hidden="true">
                                            <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cpmj6 chfxh cpvha cl17h cxxj9"></div>
                                        </div>
                                        <div class="cx3hx c3ztf c1yb0 c47li">
                                            <img class="ca0bb" src=<?php echo $program["society3_image"] ?> width="56" height="56" alt="Icon 01">
                                            <div class="cmm3x">
                                                <div class="cnc21 cabeq c0hcy"><?php echo $program["society3"] ?></div>
                                                <div class="ca0bb cwx0r"><?php echo $program["society3_description"] ?></div>
                                            </div>
                                            <div class="cbtot">
                                                <a class="cex2t c7n90 crcb7 c1xbd cvgqz cqlg5 cl1vv cl17h c4a6x car0u" href="#0">Learn More <span class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide c910c c6skp cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cjz9y cdt9a">
                                    <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                        <!-- Particles animation -->
                                        <div class="clm9l crjl7 cbati cazhe clyql cpvha cl17h cri0w c5bh9" aria-hidden="true">
                                            <canvas data-particle-animation="" data-particle-quantity="3"></canvas>
                                        </div>                                            
                                        <!-- Radial gradient -->
                                        <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr c8t6z c22q0 cht4j" aria-hidden="true">
                                            <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cpmj6 chfxh cpvha cl17h cxxj9"></div>
                                        </div>
                                        <div class="cx3hx c3ztf c1yb0 c47li">
                                            <img class="ca0bb" src="images/carousel-icon-04.svg" width="56" height="56" alt="Icon 01">
                                            <div class="cmm3x">
                                                <div class="cnc21 cabeq c0hcy">Progressive Profiling</div>
                                                <div class="ca0bb cwx0r">Incorporate rich user profiling, and facilitate more transactions.</div>
                                            </div>
                                            <div class="cbtot">
                                                <a class="cex2t c7n90 crcb7 c1xbd cvgqz cqlg5 cl1vv cl17h c4a6x car0u" href="#0">Learn More <span class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide c910c c6skp cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cjz9y cdt9a">
                                    <div class="c910c c8yyj c3ztf cqkfc c0a7w cxs0p">
                                        <!-- Particles animation -->
                                        <div class="clm9l crjl7 cbati cazhe clyql cpvha cl17h cri0w c5bh9" aria-hidden="true">
                                            <canvas data-particle-animation="" data-particle-quantity="3"></canvas>
                                        </div>
                                        <!-- Radial gradient -->
                                        <div class="cd3pv clm9l cj9ju ck1c9 cbati c6prr c8t6z c22q0 cht4j" aria-hidden="true">
                                            <div class="c0ddw clm9l crjl7 c1rz6 cbok3 cpmj6 chfxh cpvha cl17h cxxj9"></div>
                                        </div>
                                        <div class="cx3hx c3ztf c1yb0 c47li">
                                            <img class="ca0bb" src="images/carousel-icon-05.svg" width="56" height="56" alt="Icon 05">
                                            <div class="cmm3x">
                                                <div class="cnc21 cabeq c0hcy">Secure Access</div>
                                                <div class="ca0bb cwx0r">Incorporate rich user profiling, and facilitate more transactions.</div>
                                            </div>
                                            <div class="cbtot">
                                                <a class="cex2t c7n90 crcb7 c1xbd cvgqz cqlg5 cl1vv cl17h c4a6x car0u" href="#0">Learn More <span class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Arrows -->
                    <div class="cv4rp cx3hx csqfb">
                        <button class="carousel-prev c910c c8yyj cx3hx cn1b5 cgyy1 c7n90 c16i7 car0u">
                            <span class="cocd1">Previous</span>
                            <svg class="cx7b5 cwppz c7h3f cqlg5 cl1vv cl17h cmcgw" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z"></path>
                            </svg>
                        </button>
                        <button class="carousel-next c910c c8yyj cx3hx cn1b5 cgyy1 c7n90 c16i7 car0u">
                            <span class="cocd1">Next</span>
                            <svg class="cx7b5 cwppz c7h3f cqlg5 cl1vv cl17h cmcgw" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.3 14.7l-1.4-1.4L12.2 9H0V7h12.2L7.9 2.7l1.4-1.4L16 8z"></path>
                            </svg>
                        </button>
                    </div>

                
                </div>

               
    

            </section>


        </main>

        <!-- Site footer -->
        <footer>
            <div class="c82l3 ckx8h cl9xt csj8y">

                <!-- Blocks -->
                <div class="cb706 c60rs cpc70 cmiva c6m48">

                    <!-- 1st block -->
                    <div class="clx9g c3vqb c78ko cqbuh">
                        <div class="cx3hx c3ztf c1yb0 cajqb c8f6d cr3pf">
                            <div class="cgbi5 c2ly0">
                                <div class="cgbi5">
                                    <!-- Logo -->
                                    <a class="c84xd" href="index.html" aria-label="Cruip">
                                        <img src="images/logo.svg" width="38" height="38" alt="Stellar">
                                    </a>
                                </div>
                                <div class="crcb7 cvgqz">© Faculty of Engineering, University of Ruhuna<span
                                        class="c2ckl">-</span> All Rights Reserved.
                                </div>
                            </div>
                            <!-- Social links -->
                            <ul class="cx3hx">
                                <li>
                                    <a class="cx3hx c7n90 c16i7 ckvr2 cqlg5 cl1vv cl17h c8q9c" href="#0"
                                        aria-label="Twitter">
                                        <svg class="cv56c c2ntj ck57s" viewBox="0 0 32 32"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m13.063 9 3.495 4.475L20.601 9h2.454l-5.359 5.931L24 23h-4.938l-3.866-4.893L10.771 23H8.316l5.735-6.342L8 9h5.063Zm-.74 1.347h-1.457l8.875 11.232h1.36l-8.778-11.232Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="cmk82">
                                    <a class="cx3hx c7n90 c16i7 ckvr2 cqlg5 cl1vv cl17h c8q9c" href="#0"
                                        aria-label="Dev.to">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                                            <path class="cv56c c2ntj ck57s"
                                                d="M12.29 14.3a.69.69 0 0 0-.416-.155h-.623v3.727h.623a.689.689 0 0 0 .416-.156.543.543 0 0 0 .21-.466v-2.488a.547.547 0 0 0-.21-.462ZM22.432 8H9.568C8.704 8 8.002 8.7 8 9.564v12.872A1.568 1.568 0 0 0 9.568 24h12.864c.864 0 1.566-.7 1.568-1.564V9.564A1.568 1.568 0 0 0 22.432 8Zm-8.925 9.257a1.631 1.631 0 0 1-1.727 1.687h-1.657v-5.909h1.692a1.631 1.631 0 0 1 1.692 1.689v2.533ZM17.1 14.09h-1.9v1.372h1.163v1.057H15.2v1.371h1.9v1.056h-2.217a.72.72 0 0 1-.74-.7v-4.471a.721.721 0 0 1 .7-.739H17.1v1.054Zm3.7 4.118c-.471 1.1-1.316.88-1.694 0l-1.372-5.172H18.9l1.058 4.064 1.056-4.062h1.164l-1.378 5.17Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="cmk82">
                                    <a class="cx3hx c7n90 c16i7 ckvr2 cqlg5 cl1vv cl17h c8q9c" href="#0"
                                        aria-label="Github">
                                        <svg class="cv56c c2ntj ck57s" viewBox="0 0 32 32"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- 2nd block -->
                    <div class="cp4p0 cywcr cihm4">
                        <h6 class="ccmhz crcb7 c1xbd c2cw1">Degree Programs</h6>
                        <ul class="c7axt crcb7">
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">Computer Engineering</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">Electrical & Infomation
                                    Engineering</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">Mechanical & Manufacturing
                                    Engineering</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">Civil & Environmental Engineering</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">Marine Science & Naval
                                    Architecture</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 3rd block -->
                    <div class="cp4p0 cywcr cihm4">
                        <h6 class="ccmhz crcb7 c1xbd c2cw1">Socities</h6>
                        <ul class="c7axt crcb7">
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">IEEE</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">EIES</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">MMESS</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">CEES</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">IET</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 4th block -->
                    <div class="cp4p0 cywcr cihm4">
                        <h6 class="ccmhz crcb7 c1xbd c2cw1">Faculty</h6>
                        <ul class="c7axt crcb7">
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">About Us</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">Contact Us</a>
                            </li>

                        </ul>
                    </div>

                    <!-- 5th block -->
                    <div class="cp4p0 cywcr cihm4">
                        <h6 class="ccmhz crcb7 c1xbd c2cw1">Resources</h6>
                        <ul class="c7axt crcb7">
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">University of Ruhuna</a>
                            </li>
                            <li>
                                <a class="cwx0r cqlg5 cl1vv cl17h cxovy" href="#0">Faculty of Engineering</a>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
        </footer>

    </div>

    <script src="js/alpinejs.min.js" defer=""></script>
    <script src="js/aos.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>



    <script>console.log("%cImportant!", "color: blue; font-size: x-large"); console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script>
    <script>const pagesList = [{ "name": "Home", "url": "https://preview.cruip.com/stellar/index.html", "active": true }, { "name": "Sign in", "url": "https://preview.cruip.com/stellar/signin.html", "active": false }, { "name": "Sign up", "url": "https://preview.cruip.com/stellar/signup.html", "active": false }, { "name": "Reset password", "url": "https://preview.cruip.com/stellar/reset-password.html", "active": false }]; if (window != top) { window.parent.postMessage(pagesList, "https://cruip.com") };</script>
    <script defer=""
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        data-cf-beacon="{"
        rayid":"81302398af6965fc","version":"2023.8.0","r":1,"token":"59cc17d45d734f9ba118c63036ab1b84","si":100}"=""
        crossorigin="anonymous"></script>

        <script>
                                   
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1 }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }





        </script>

        <script>
            (function(){const l=document.createElement("link").relList;if(l&&l.supports&&l.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))o(e);new MutationObserver(e=>{for(const t of e)if(t.type==="childList")for(const d of t.addedNodes)d.tagName==="LINK"&&d.rel==="modulepreload"&&o(d)}).observe(document,{childList:!0,subtree:!0});function i(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerpolicy&&(t.referrerPolicy=e.referrerpolicy),e.crossorigin==="use-credentials"?t.credentials="include":e.crossorigin==="anonymous"?t.credentials="omit":t.credentials="same-origin",t}function o(e){if(e.ep)return;e.ep=!0;const t=i(e);fetch(e.href,t)}})();let c=!1;const a=document.querySelector("#navlinks"),u=document.querySelector("#hamburger"),n=document.querySelector("#navLayer"),y=[...a.querySelector("ul").children];function f(){c?(a.classList.remove("invisible","scale-90","opacity-0","translate-y-"),a.classList.add("!visible","!scale-100","!opacity-100","!lg:translate-y-0"),u.classList.add("toggled"),n.classList.remove("origin-bottom","scale-y-0"),n.classList.add("origin-top","scale-y-100")):(a.classList.remove("!visible","!scale-100","!opacity-100","!lg:translate-y-0"),a.classList.add("invisible","scale-90","opacity-0","translate-y-"),u.classList.remove("toggled"),n.classList.remove("origin-top","scale-y-100"),n.classList.add("origin-bottom","scale-y-0"))}u.addEventListener("click",()=>{c=!c,f()});y.forEach(s=>{s.addEventListener("click",()=>{c=!c,f()})});const r=document.querySelectorAll(".faq");for(let s=0;s<r.length;s++){const l=r[s].querySelector(".faq-answer"),i=r[s].querySelector(".arrow-down");r[s].addEventListener("click",()=>{for(let o=0;o<r.length;o++){const e=r[o].querySelector(".faq-answer"),t=r[o].querySelector(".arrow-down");r[s]!=r[o]&&(e.style.maxHeight="0px",t.classList.replace("rotate-180","rotate-0"))}i.classList.contains("rotate-180")?(l.style.maxHeight=0+"px",i.classList.replace("rotate-180","rotate-0")):(l.style.maxHeight=l.scrollHeight+"px",i.classList.replace("rotate-0","rotate-180"))})}
        </script>

</body>

</html>