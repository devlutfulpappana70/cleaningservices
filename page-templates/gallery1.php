<?php

/**
* Template Name: Gallery 01
* @package washup
*/

get_header();


?>
    <main>
        
        <!--Start Gallery Page-->
        <section class="gallery-page">
            <div class="container">
                <div class="row">
                    <!--Start case-studies-one Top-->
                    <div class="gallery-page__top">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="gallery-page__menu-box">
                                <ul class="project-filter clearfix post-filter has-dynamic-filters-counter">
                                    <li data-filter=".filter-item" class="active"><span class="filter-text">Show
                                            All</span></li>
                                    <li data-filter=".house"><span class="filter-text">House</span></li>
                                    <li data-filter=".floor"><span class="filter-text">Floor </span></li>
                                    <li data-filter=".kitchen"><span class="filter-text">Kitchen</span></li>
                                    <li data-filter=".toilet"><span class="filter-text">Toilet</span></li>
                                    <li data-filter=".office"><span class="filter-text">Office</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End case-studies-one Top-->
                </div>


                <div class="row filter-layout masonary-layout">
                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item house office">
                        <div class="gallery-page__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="gallery-page__single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img1.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img1.jpg"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item toilet floor">
                        <div class="gallery-page__single wow fadeInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="gallery-page__single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img2.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img2.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6 office kitchen filter-item">
                        <div class="gallery-page__single wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="gallery-page__single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img3.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img3.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item floor house kitchen">
                        <div class="gallery-page__single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="gallery-page__single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img4.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img4.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item house toilet kitchen">
                        <div class="gallery-page__single wow fadeInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="gallery-page__single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img5.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img5.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item kitchen house floor">
                        <div class="gallery-page__single wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="gallery-page__single-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img6.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-page-img6.jpg"><span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->
                </div>
            </div>
        </section>
        <!--End Gallery Page-->

        <!--Start Cta One-->
        <section class="cta-one cta-one--gallery">
            <div class="image-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/cta-v1-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="title">
                                <h2> Call us to Take an Extraordinary Service!</h2>
                                <div class="number">
                                    <p>Call: <a href="tel:180050033333">++019999999</a></p>
                                </div>
                            </div>
                            <div class="button-box">
                                <a href="https://twinkletheme.com/themeforest/wp/elementor/washup/contact/" class="thm-btn">
                                    <span>Contact Us</span>
                                    <div class="liquid"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta One-->

    </main>

<?php

get_footer();