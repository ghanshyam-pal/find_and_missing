<?= view('includes/header', ['title' => 'About Us']) ?>

    <main>
      
        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="images/bar01.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="hedintextp">
                        <h3 class="slide-animated two">About Us</h3>
                    </div>
                </div>
            </div>
        </div>

   
        <div class="container pt-5 pb-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="parallax_wrapper inverted">
                        <img src="img/about_1.jpg" alt="" class="img-fluid rounded-img">
                        <div data-cue="slideInUp" class="img_over" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"><span data-jarallax-element="-30" style="position: relative; z-index: 0; transform: translate3d(0px, 53.4646px, 0px);"><img src="img/home_1.jpg" alt="" class="rounded-img"><div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);" id="jarallax-container-2"><div style="pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; position: fixed;"></div></div></span></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="intro">
                        <div class="title">
                            <h2>Welcome to Missing Person Finder, where technology meets compassion in the quest to reunite families. </h2>
                        </div>
                        <p>At Missing Person Finder, we are driven by a singular mission: to harness the power of face recognition technology for the noble cause of finding missing persons. Our goal is to provide a platform that leverages cutting-edge technology to assist individuals, families, and law enforcement agencies in locating and reconnecting with their loved ones.</p>
                        <p>Our platform employs state-of-the-art face recognition algorithms to analyze submitted photographs and compare them against a database of images. This technology allows us to generate potential matches that can aid in the identification and location of missing persons.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <p>Behind Missing Person Finder is a dedicated team of professionals passionate about making a positive impact in the world. From engineers and developers to experts in law enforcement and humanitarian efforts, our diverse team collaborates to create and maintain a platform that contributes to the global effort to find missing individuals. </p>
                    <p>We believe in the power of community. Whether you're a concerned individual, a family member searching for a loved one, or a supporter of our cause, there are various ways to get involved. Explore our Get Involved page to learn more about how you can contribute to the Missing Person Finder community.</p>
                </div>
            </div>
            <!-- /Row -->
        </div>
    </main>

    <?= view('includes/footer') ?>