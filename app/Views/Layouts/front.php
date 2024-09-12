<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start include meta -->
    <?= $this->include('includes/Landing/meta') ?>
    <!-- end include meta -->
    <title>Document</title>
    <!-- start include style -->
    <?= $this->include('includes/Landing/style') ?>
    <!-- end include style -->


</head>

<body>

    <!-- Start Navbar -->
    <!-- End Navbar -->

    <!-- start sweetalert -->
    <!-- | sweetalert -->
    <!-- end sweetalert -->

    <?= $this->renderSection('content') ?>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <!-- <?=  $this->include('Components/Landing/preloader'); ?> -->
        <!-- end preloader -->

        <!-- Start header-navbar -->
        
            <?= $this->include('Components/Landing/navbar') ?>
        <!-- end of header-navbar -->


        <!-- start of hero -->
        <section class="hero-slider hero-style-1">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="<?= base_url() ?>/images/slider/slide-1.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>The Best Move you will Ever Make</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Our services</a>
                                    <a href="#" class="theme-btn-s2">More about us</a>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="<?= base_url() ?>/images/slider/slide-2.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>The Best Move you will Ever Make</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Our services</a>
                                    <a href="#" class="theme-btn-s2">More about us</a>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- start of home-content -->
        <?= $this->renderSection('content'); ?>
        <!-- end of home-content -->

        <!-- start site-footer -->
        <?= $this->include('includes/Landing/footer') ?>
        <!-- end site-footer -->


    </div>
    <!-- end of page-wrapper -->

    <!-- start include footer -->
    <?= $this->include('includes/landing/footer') ?>
    <!-- end include footer -->

    <!-- start include script -->
    <?= $this->include('includes/Landing/script') ?>
    <!-- end include script -->

</body>

</html>