<?php

/**
* Template Name: Gallery Details
* @package washup
*/

get_header();


?>
    <main>
        
        <!--Start Gallery Details-->
        <section class="gallery-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="gallery-details__wrapper">
                            <div class="gallery-details__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/gallery-details-img.jpg" alt="" />
                            </div>

                            <!--Projects Details Information Start-->
                            <div class="gallery-details__information">
                                <ul>
                                    <li>
                                        <h5>Date</h5>
                                        <p>03 may, 2023</p>
                                    </li>

                                    <li>
                                        <h5>Client</h5>
                                        <p>Themeforest, Envato</p>
                                    </li>

                                    <li>
                                        <h5>Website</h5>
                                        <p><a href="#">Washup.com</a></p>
                                    </li>

                                    <li>
                                        <h5>Location</h5>
                                        <p>New York, USA</p>
                                    </li>

                                    <li>
                                        <h5>Value</h5>
                                        <p>$65,2000</p>
                                    </li>
                                </ul>
                            </div>
                            <!--Projects Details Information End-->

                            <div class="gallery-details__text-box1">
                                <h2>House Cleaning</h2>
                                <p class="text1">It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. Many
                                    desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.</p>

                                <p class="text2">There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable. If you are going to use a passage
                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                    middle of text.</p>
                            </div>


                            <div class="gallery-details__text-box2">
                                <h2>Bedroom Cleaning</h2>
                                <p class="text1">Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                    has roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                    years old.</p>

                                <div class="gallery-details__text-box2-list">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-maps-and-flags"></i>
                                            </div>
                                            <div class="text">
                                                <p>It is a long established fact that</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <i class="icon-maps-and-flags"></i>
                                            </div>
                                            <div class="text">
                                                <p>It has survived not only five centuries</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <i class="icon-maps-and-flags"></i>
                                            </div>
                                            <div class="text">
                                                <p> Lorem Ipsum has been the ndustry standard dummy text</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <p class="text2">The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                    below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                    Malorum" by Cicero are also reproduced in their exact original form, accompanied by
                                    English versions from the 1914 translation by H. Rackham.</p>
                            </div>

                            <div class="gallery-details__pagination clearfix">
                                <ul>
                                    <li>
                                        <div class="previous">
                                            <p><a href="#"><span class="fa fa-arrow-left"></span> Previous</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="next">
                                            <p><a href="#">Next <span class="fa fa-arrow-right"></span></a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Gallery Details-->

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