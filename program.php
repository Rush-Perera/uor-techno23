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
    <link href="css/header-home.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="js/script.js"></script>
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
                            <!-- <a href="#home" aria-label="logo" class="flex items-center space-x-2 px-0">

                                <img src="images/main_logo.svg" width="60" height="60" />


                            </a> -->

                            <div class="relative flex max-h-10 items-center lg:hidden">
                                <button type="button" aria-label="humburger" id="hamburger" class="relative -mr-6 p-6">
                                    <div aria-hidden="true" id="line"
                                        class="m-auto h-0.5 w-5 rounded bg-sky-900 transition duration-300 dark:bg-gray-300">
                                    </div>
                                    <div aria-hidden="true" id="line2"
                                        class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 transition duration-300 dark:bg-gray-300">
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div id="navLayer" aria-hidden="true"
                            class="fixed inset-0 z-10 h-screen w-screen origin-bottom scale-y-0 bg-white/70 backdrop-blur-2xl transition duration-500 dark:bg-gray-900/70 lg:hidden">
                        </div>
                        <div id="navlinks"
                            class="invisible absolute top-full left-0 z-20 w-full origin-top-right translate-y-1 scale-90 flex-col flex-wrap justify-end gap-6 rounded-3xl border border-gray-100 bg-white p-8 opacity-0 shadow-2xl shadow-gray-600/10 transition-all duration-300 dark:border-gray-700 dark:bg-gray-800 dark:shadow-none lg:visible lg:relative lg:flex lg:w-7/12 lg:translate-y-0 lg:scale-100 lg:flex-row lg:items-center lg:gap-0 lg:border-none lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none">
                            <div class="w-full text-gray-600 dark:text-gray-200 lg:w-auto lg:pr-4 lg:pt-0">
                                <ul
                                    class="flex flex-col gap-6 tracking-wide lg:flex-row lg:justify-center lg:gap-0 lg:text-sm">
                                    <li>
                                        <a href="#features"
                                            class="flex items-center transition hover:text-primary dark:hover:text-white md:px-4">
                                            <span class="text-base lg:text-sm lg:font-thin">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#solution"
                                            class="flex items-center transition hover:text-primary dark:hover:text-white md:px-4">
                                            <span class="text-base lg:text-sm lg:font-thin">About Us</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#reviews"
                                            class="flex items-center transition hover:text-primary dark:hover:text-white md:px-4">
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
                                    <div class="c66wr c4dav" data-aos="fade-down">
                                        <div class="c910c cex2t c85im c3tia c78uy cdqpw">
                                            <a class="csi51 c910c cmbi4 cvgqz c23lh cqlg5 cl1vv cl17h crc38 cux88 c85im c3tia cr5is cbeus c4a6x car0u"
                                                href="<?php echo $program["website"] ?>>
                                                <span class="c910c cex2t c7n90">
                                                Visit Us<span
                                                        class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

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
                    

                    <!-- Particles animation -->
                    <div class="clm9l crjl7 c82l3 ckx8h cl9xt csj8y">
                        <div class="clm9l crjl7 cbati" aria-hidden="true">
                            <canvas data-particle-animation="" data-particle-quantity="5"></canvas>
                        </div>
                    </div>

                    <?php 
                    if($program["project_count"] > 0){
?>
                    <h3 class="cqbmj cyvm0 c1wf5 cj15g ctvzo cnu2b cvbxf c3btc cv4rp">Recent Research And Projects</h3>

<?php
                    }
                    ?>

                    <!--Project 1-->
                    <?php 
                        for ($i = 1; $i <= $program["project_count"]; $i++) {
?>
<div class="cvgrh c910c c3ztf cqkfc cvitu cbok3 cxfql cux88 c85im chpt4 cl006 c8bq2 cnnxg cdtjx ciw8g cyaau cr5is c78uy cys3t cq0d5 cdnbd co67a croff cuwru clpi6 c1whm c91wt c4v01 c3zjn cngr8 cbjp0 cdt9a">
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
                                                            <h3 class="cex2t cyvm0 c1wf5 cj15g ctvzo cnu2b cleoa ck8oc c0hcy c3btc"><?php echo $program["project".$i.""] ?></h3>
                                                            <p class="cwx0r"><?php echo $program["project".$i."_description"] ?></p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="csi51 c910c cvgqz cqlg5 cl1vv cl17h cxli6 cux88 c85im c3tia cr5is cxnq1 c4a6x car0u" href="project.php?project=<?php echo $program["short"]."P".$i?>">
                                                            <span class="c910c cex2t c7n90">
                                                                Learn more <span class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Image -->
                                                <div class="c910c cdrsb c0l3r cqkfc cbwl6">
                                                    <img class="clm9l cj9ju ck1c9 c82l3 cl1mx c22q0 c270x cgo1b ci2v4" src='<?php echo $program["project".$i."_image"] ?>' width="504" height="400" alt="Feature 01">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<?php
                        }
                    ?>
                                    
                          

       
                
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

                                <?php 
                                for ($i = 1; $i <= $program["society_count"]; $i++) {
?>
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
                                            <img class="ca0bb" src=<?php echo $program["society".$i."_image"] ?> width="56" height="56" alt="Icon 01">
                                            <div class="cmm3x">
                                                <div class="cnc21 cabeq c0hcy"><?php echo $program["society".$i.""] ?></div>
                                                <div class="ca0bb cwx0r"><?php echo $program["society".$i."_description"] ?></div>
                                            </div>
                                            <div class="cbtot">
                                                <a class="cex2t c7n90 crcb7 c1xbd cvgqz cqlg5 cl1vv cl17h c4a6x car0u" href="#0">Learn More <span class="cqbh5 c52y9 ckvr2 ceydo cl1vv cl17h cbzrl">-&gt;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
<?php
                                }
                                ?>
                                
                                
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
                                        <img src="images/main_logo.svg" width="38" height="38" alt="Stellar">
                                    </a>
                                </div>
                                <div class="crcb7 cvgqz">© Faculty of Engineering, University of Ruhuna<span
                                        class="c2ckl">-</span> All Rights Reserved.
                                </div>
                            </div>
                            <!-- Social links -->
                            <ul class="cx3hx">
                                <li>
                                    <a class="cx3hx c7n90 c16i7 ckvr2 cqlg5 cl1vv cl17h c8q9c" href="https://www.facebook.com/EfacUOR"
                                        aria-label="Facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="30px" height="30px"><linearGradient id="rhA40cqBlsJ1wx2ZjgJTqa" x1="32.526" x2="32.526" y1="16.627" y2="56.834" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#rhA40cqBlsJ1wx2ZjgJTqa)" d="M35.52,38.891h6.729l1.057-6.835H35.52v-3.736c0-2.839,0.928-5.358,3.584-5.358h4.268v-5.966c-0.75-0.101-2.335-0.323-5.332-0.323c-6.258,0-9.926,3.305-9.926,10.834v4.548h-6.433v6.835h6.433v17.788C29.385,56.869,30.676,57,32,57c1.197,0,2.366-0.109,3.52-0.266V38.891z"/><linearGradient id="rhA40cqBlsJ1wx2ZjgJTqb" x1="32" x2="32" y1="58" y2="6" gradientTransform="matrix(1 0 0 -1 0 64)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"/><stop offset="1" stop-color="#c822ff"/></linearGradient><path fill="none" stroke="url(#rhA40cqBlsJ1wx2ZjgJTqb)" stroke-miterlimit="10" stroke-width="2" d="M32 7A25 25 0 1 0 32 57A25 25 0 1 0 32 7Z"/></svg>                                    </a>
                                </li>
                                <li class="cmk82">
                                    <a class="cx3hx c7n90 c16i7 ckvr2 cqlg5 cl1vv cl17h c8q9c" href="https://www.linkedin.com/company/faculty-of-engineering-university-of-ruhuna/"
                                        aria-label="Linkedin">
                                        
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="30px" height="30px" clip-rule="evenodd"><linearGradient id="SUJNhpmDQDF27Y3OfwgfYa" x1="19" x2="19" y1="24.858" y2="49.041" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#SUJNhpmDQDF27Y3OfwgfYa)" fill-rule="evenodd" d="M22 48L22 26 16 26 16 48 22 48z" clip-rule="evenodd"/><linearGradient id="SUJNhpmDQDF27Y3OfwgfYb" x1="19.382" x2="19.382" y1="15.423" y2="23.341" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#SUJNhpmDQDF27Y3OfwgfYb)" fill-rule="evenodd" d="M19.358,23c2.512,0,4.076-1.474,4.076-3.554 c-0.047-2.126-1.564-3.649-4.028-3.649c-2.465,0-4.076,1.475-4.076,3.601c0,2.08,1.563,3.602,3.981,3.602H19.358L19.358,23z" clip-rule="evenodd"/><linearGradient id="SUJNhpmDQDF27Y3OfwgfYc" x1="37.386" x2="37.386" y1="14.125" y2="49.525" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#SUJNhpmDQDF27Y3OfwgfYc)" fill-rule="evenodd" d="M26.946,48H34V35.911c0-0.648,0.122-1.295,0.313-1.758 c0.52-1.295,1.877-2.635,3.867-2.635c2.607,0,3.821,1.988,3.821,4.901V48h6V35.588c0-6.657-3.085-9.498-7.826-9.498 c-3.886,0-5.124,1.91-6.072,3.91H34v-4h-7.054c0.095,2-0.175,22-0.175,22H26.946z" clip-rule="evenodd"/><linearGradient id="SUJNhpmDQDF27Y3OfwgfYd" x1="32" x2="32" y1="6.5" y2="57.5" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"/><stop offset="1" stop-color="#c822ff"/></linearGradient><path fill="url(#SUJNhpmDQDF27Y3OfwgfYd)" d="M50,57H14c-3.859,0-7-3.141-7-7V14c0-3.859,3.141-7,7-7h36c3.859,0,7,3.141,7,7v36 C57,53.859,53.859,57,50,57z M14,9c-2.757,0-5,2.243-5,5v36c0,2.757,2.243,5,5,5h36c2.757,0,5-2.243,5-5V14c0-2.757-2.243-5-5-5H14z"/></svg>
                                    </a>
                                </li>
                                <li class="cmk82">
                                    <a class="cx3hx c7n90 c16i7 ckvr2 cqlg5 cl1vv cl17h c8q9c" href="https://github.com/Rush-Perera"
                                        aria-label="Github">
                                       
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64" width="30px" height="30px"><linearGradient id="KpzH_ttTMIjq8dhx1zD2pa" x1="30.999" x2="30.999" y1="16" y2="55.342" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#KpzH_ttTMIjq8dhx1zD2pa)" d="M25.008,56.007c-0.003-0.368-0.006-1.962-0.009-3.454l-0.003-1.55 c-6.729,0.915-8.358-3.78-8.376-3.83c-0.934-2.368-2.211-3.045-2.266-3.073l-0.124-0.072c-0.463-0.316-1.691-1.157-1.342-2.263 c0.315-0.997,1.536-1.1,2.091-1.082c3.074,0.215,4.63,2.978,4.694,3.095c1.569,2.689,3.964,2.411,5.509,1.844 c0.144-0.688,0.367-1.32,0.659-1.878C20.885,42.865,15.27,40.229,15.27,30.64c0-2.633,0.82-4.96,2.441-6.929 c-0.362-1.206-0.774-3.666,0.446-6.765l0.174-0.442l0.452-0.144c0.416-0.137,2.688-0.624,7.359,2.433 c1.928-0.494,3.969-0.749,6.074-0.759c2.115,0.01,4.158,0.265,6.09,0.759c4.667-3.058,6.934-2.565,7.351-2.433l0.451,0.145 l0.174,0.44c1.225,3.098,0.813,5.559,0.451,6.766c1.618,1.963,2.438,4.291,2.438,6.929c0,9.591-5.621,12.219-10.588,13.087 c0.563,1.065,0.868,2.402,0.868,3.878c0,1.683-0.007,7.204-0.015,8.402l-2-0.014c0.008-1.196,0.015-6.708,0.015-8.389 c0-2.442-0.943-3.522-1.35-3.874l-1.73-1.497l2.274-0.253c5.205-0.578,10.525-2.379,10.525-11.341c0-2.33-0.777-4.361-2.31-6.036 l-0.43-0.469l0.242-0.587c0.166-0.401,0.894-2.442-0.043-5.291c-0.758,0.045-2.568,0.402-5.584,2.447l-0.384,0.259l-0.445-0.123 c-1.863-0.518-3.938-0.796-6.001-0.806c-2.052,0.01-4.124,0.288-5.984,0.806l-0.445,0.123l-0.383-0.259 c-3.019-2.044-4.833-2.404-5.594-2.449c-0.935,2.851-0.206,4.892-0.04,5.293l0.242,0.587l-0.429,0.469 c-1.536,1.681-2.314,3.712-2.314,6.036c0,8.958,5.31,10.77,10.504,11.361l2.252,0.256l-1.708,1.49 c-0.372,0.325-1.03,1.112-1.254,2.727l-0.075,0.549l-0.506,0.227c-1.321,0.592-5.839,2.162-8.548-2.485 c-0.015-0.025-0.544-0.945-1.502-1.557c0.646,0.639,1.433,1.673,2.068,3.287c0.066,0.19,1.357,3.622,7.28,2.339l1.206-0.262 l0.012,3.978c0.003,1.487,0.006,3.076,0.009,3.444L25.008,56.007z"/><linearGradient id="KpzH_ttTMIjq8dhx1zD2pb" x1="32" x2="32" y1="5" y2="59.167" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"/><stop offset="1" stop-color="#c822ff"/></linearGradient><path fill="url(#KpzH_ttTMIjq8dhx1zD2pb)" d="M32,58C17.663,58,6,46.337,6,32S17.663,6,32,6s26,11.663,26,26S46.337,58,32,58z M32,8 C18.767,8,8,18.767,8,32s10.767,24,24,24s24-10.767,24-24S45.233,8,32,8z"/></svg>
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