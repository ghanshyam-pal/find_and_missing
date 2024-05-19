<?= view('includes/header', ['title' => 'Missing Person Finder']) ?>

    <main>
        <div class="hero full-height jarallax" data-jarallax-video="mp4:./video/video2.mp4,webm:./video/sunset.webm,mp4:./video/video2.mp4" data-speed="0.2">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                <div class="container">
                    <small class="slide-animated one"> Missing Person Finder</small>
                    <h1 class="slide-animated two">
                        Search your missing persons with the help of Machine Learning and A.I.
                    </h1>
                    <div class="row justify-content-center slide-animated three">
                        <div class="col-xl-10">
                            <div class="row g-0 booking_form">
                                <div class="col-lg-4 ">
                                    <div class="form-group">
                                    <select class="form-select form-control" name="phone" aria-label="Default select example">
                                            <option value="" selected disabled>Select Phone Number</option>
                                            <?php foreach($phone as $p) : ?>
                                                <option value="<?=$p['phone']?>"><?=$p['phone']?> </option>
                                            <?php endforeach ?>
                                            
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 pe-lg-0 pe-sm-1">
                                    <div class="form-group">
                                        <select class="form-select form-control" name="city" aria-label="Default select example">
                                            <option value="" selected disabled>Select City</option>
                                            <?php foreach($city as $c) : ?>
                                                <option value="<?=$c['city']?>"><?=$c['city']?> </option>
                                            <?php endforeach ?>
                                            
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 ps-lg-0 ps-sm-1">
                                    <div class="form-group">
                                        <select class="form-select form-control" name="state" aria-label="Default select example">
                                            <option value="" disabled selected>Select Area</option>
                                            <?php foreach($state as $s) : ?>
                                                <option value="<?=$s['state']?>"><?=$s['state']?> </option>
                                            <?php endforeach ?>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mouse_wp slide-animated four">
                    <a href="#first_section" class="btn_scrollto">
                        <div class="mouse"></div>
                    </a>
                </div>
                <!-- /mouse_wp -->
            </div>
        </div>
        <!-- /jarallax video background -->



        <div>
            <div class="container margin_120_95 mb-2 pb-2" id="first_section">
                <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                    <div class="col-lg-5">
                        <div class="parallax_wrapper">
                            <img src="<?= base_url()?>img/home_2.jpg" alt="" class="img-fluid rounded-img">
                            <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="<?= base_url()?>img/home_1.jpg" alt="" class="rounded-img"></span></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small>About us</small>
                                <h2>Found & Missing</h2>
                            </div>
                            <p class="lead">Welcome to Missing Person Finder, where technology meets compassion in the quest to reunite families.</p>
                            <p> At Missing Person Finder, we are driven by a singular mission: to harness the power of face recognition technology for the noble cause of finding missing persons. Our goal is to provide a platform that leverages cutting-edge technology to assist individuals, families, and law enforcement agencies in locating and reconnecting with their loved ones.</p>
                            <a href="<?=base_url()?>aboutus" class="btn_1 btn_scrollto">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>

        </div>
        <!-- /Pattern  -->

        <section class="bg_white pt-5 pb-5">
            <div class="container">
                <div class="title text-center mb-5">
                    <small data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">Missing Person Finder</small>
                    <h2 data-cue="slideInUp" data-delay="100" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 100ms; animation-direction: normal; animation-fill-mode: both;">Explore New Face Recognition Technology</h2>
                </div>



            </div>
        </section>


        <div class="container">
            <div class="title text-center mb-2 pt-5">
                <small data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">Missing Person Finder</small>
                <h2 data-cue="slideInUp" data-delay="100" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 100ms; animation-direction: normal; animation-fill-mode: both;">How to use Missing Person Finder Website</h2>
            </div>
            <div class="row mt-5 mb-3">
                <div class="col-lg-4 col-md-6">
                    <div class="box_facilities no-border" data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <img src="<?= base_url()?>images/createyourpr.png" alt="#">
                        <h3>Create your Account</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 180ms; animation-direction: normal; animation-fill-mode: both;">
                        <img src="<?= base_url()?>images/applyforjobs.png" alt="#">
                        <h3>Add Missing/Found Persons Details</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 360ms; animation-direction: normal; animation-fill-mode: both;">
                        <img src="<?= base_url()?>images/hr.png" alt="#">
                        <h3>Our A.I will do rest of the work</h3>
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="pinned-image pinned-image--medium hotel-suply">
            <div class="pinned-image__container" id="section_video">
                <img src="<?= base_url()?>img/hotel-suply.jpg" alt="#">
                <div class="pinned-image__container-overlay"></div>
            </div>
            <div class="pinned_over_content">
                <div class="title white">
                    <small data-cue="slideInUp" data-delay="200">Hotels Planet</small>
                    <h2 data-cue="slideInUp" data-delay="300">Hotels suppliers</h2>
                    <P>Hotels suppliers provide essential services and products to the hospitality industry, <br>ensuring memorable guest experience and smooth hotel operations.</P>
                    <a href="<?= base_url()?>hotel-suppliers" class="btn_1 btn_scrollto mt-2">Explore Now</a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row mt-5 mb-3">
                <div class="col-lg-6 col-md-6">
                    <div class="box_facilities no-border" data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <img class="mb-4" src="<?= base_url()?>images/job-alert.png" alt="#">
                        <h3>Get job alerts</h3>
                        <p>Let us do the hard work. Sign up for our free service and get great jobs emailed to you. </p>
                        <a href="#" class="btn_1 btn_scrollto">Get Alert</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 180ms; animation-direction: normal; animation-fill-mode: both;">
                        <img src="<?= base_url()?>images/upload-cv.png" alt="#">
                        <h3>Upload your CV</h3>
                        <p>Upload your CV so our recruiters can match your details to the best available jobs.</p>
                        <a href="<?=base_url()?>candidate/profile" class="btn_1 btn_scrollto">Upload CV</a>
                    </div>
                </div>
            </div>

        </div> -->



        <div class="container margin_120_95 pb-0" id="first_section">
            <div class="row_list_version_1">
                <div class="pinned-image rounded_container pinned-image--medium">
                    <div class="pinned-image__container" style="translate: none; rotate: none; scale: none; transform: scale(1.05);">
                        <img src="<?= base_url()?>images/bg10.jpg" alt="">
                    </div>
                </div>
                <!-- /pinned-image -->
                <div class="row justify-content-start">
                    <div class="col-lg-8">
                        <div class="box_item_info" data-jarallax-element="-30" style="transform: translate3d(0px, 39.9114px, 0px);">
                            <h2>Missing Person Finder For Lost Person</h2>
                            <h6>Search from 100+ Persons with our technology</h6>
                            <h6>Get the details if someone found the missing person</h6>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="<?=base_url()?>hotlair" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Post Now</span>
                                </a>

                            </div>
                            <!-- /box_item_footer -->
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);" id="jarallax-container-1">
                                <div style="pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; position: fixed;"></div>
                            </div>
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>


        </div>


        <div class="marquee">
            <div class="track">
                <div class="content">You can check the list of  persons</div>
            </div>
        </div>
        <!-- /marquee-->

        <div class="bg_white">
            <div class="container margin_120_95">
                <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                    <div class="col-lg-6">
                        <div class="pinned-image rounded_container pinned-image--small mb-1">
                            <div class="pinned-image__container">
                                <img src="<?= base_url()?>images/candidate-p.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="title">
                            <h3>Detailed Person Profiles</h3>
                            <h6>For better screening and selection</h6>
                            <p><a href="<?=base_url()?>detailed-candidate-profiles" class="btn_1 mt-1 outline mt-3">Read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row justify-content-between d-flex align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="<?= base_url()?>images/notifications.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="title">
                            <h3>Read the Terms and Condition</h3>
                            <p>Pls make sure to read all the terms and conditions</p>
                            <p><a href="<?=base_url()?>tandc" class="btn_1 mt-1 outline mt-3">Read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /container-->
        </div>
        <!-- /bg_white -->

        <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns-2" src="<?= base_url()?>img/hero_home_1.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="title white">
                                <small class="mb-1">Testimonials</small>
                                <h2>What Clients Says</h2>
                            </div>
                            <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="<?= base_url()?>img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>12 Oct</small></h4>
                                        </div>
                                        <div class="comment">
                                            "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="<?= base_url()?>img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>2 Nov</small></h4>
                                        </div>
                                        <div class="comment">
                                            "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="<?= base_url()?>img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>3 Dec</small></h4>
                                        </div>
                                        <div class="comment">
                                            "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container margin_120_95">
            <div class="title text-center">
                <h2>Trusted by 10K+ companies</h2>
            </div>
            <div class="row justify-content-between mt-5">
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/flipkart.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Swiggy.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/zomato-logo.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/rapido.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Uber.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/PharmEasy.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Licious.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Byjus.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Paytm.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Jubliant.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Shaadi.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Indiamart.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Delhivery.webp" alt="#">
                </div>
                <div class="col-md-2 logolist">
                    <img src="<?= base_url()?>images/logo/Zepto.webp" alt="#">
                </div>
            </div>
        </div>

    </main>



    <?= view('includes/footer') ?>
    <script>
        $(document).ready(function() {
            

            $('.btn_search').click(function() {
                // console.log($('[name="department"]').val());
                // var formData =new formData;
                var dep =$('[name="phone"]').val();
                var city =$('[name="city"]').val();
                var state =$('[name="state"]').val();

                    window.location.href = "/search/"+dep+"/"+city+"/"+state;
                
                
            })



        })
    </script>
