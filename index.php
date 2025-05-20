<?php $page = 'index'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Fresh</title>

    <meta name="title" content="Simply Fresh">
    <meta name="description" content="Simply Fresh">
    <meta name="keywords" content="Simply Fresh">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="Simply Fresh" />
    <meta property="og:description" content="Simply Fresh" />
    <meta property="og:image" content="assets/img/sf-logo.svg" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="">
    <meta name="twitter:title" content="Simply Fresh" />
    <meta name="twitter:description" content="Simply Fresh" />
    <meta property="twitter:image" content="assets/img/sf-logo.svg">
    <meta name="twitter:keywords" content="" />

    <?php include("includes/css.php") ?>

    <?php include("includes/ga-head.php") ?>

</head>

<body>

    <?php include("includes/ga-body.php") ?>

    <div class="main-header" style="background-image: url(assets/img/home-banner.png);">
        <div class="header-part-top">
            <?php include("includes/header.php") ?>
        </div>

        <!-- banner text and carousel -->


        <div class="content-banner">
            <h2>Showcasing the power
                of <b>‘fresh iraade’</b> through stories that build the nation.</h2>
            <a href="javaScript:void(0);" class="btn btn-know-more-banner"> Know More</a>
        </div>


        <div id="homePageCarousel" class="slider-container col-md-5 col-12  col-xs-12 col-sm-12 ">
            <div class="custom-indicators">
                <span class="indicator-number">01</span>
                <div class="indicator-line">
                    <div class="line-segment active"></div>
                    <div class="line-segment"></div>
                </div>
                <span class="indicator-number">02</span>
            </div>
            <div class="owl-carousel">
                <!-- Slide 1 -->
                <div class="slide-item">
                    <div class="testimonial-card d-flex align-items-center">
                        <img src="assets/img/real-hero-1.png" alt="User" class="img-fluid" width="50">
                        <div>
                            <p class="mini_slider_head"> Sustainable Farming <br>Champion in Rural India1</p>
                            <a class="mini_slider_desc" href="#" class=" mt-2">KNOW MORE</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slide-item">
                    <div class="testimonial-card d-flex align-items-center">
                        <img src="assets/img/real-hero-2.png" alt="User" class="img-fluid" width="50">
                        <div>
                            <p class="mini_slider_head"> Sustainable Farming <br>Champion in Rural India1</p>
                            <a class="mini_slider_desc" href="#" class=" mt-2">KNOW MORE</a>
                        </div>
                    </div>
                </div>
                <!-- Add more slides as needed -->
            </div>


        </div>





        <!-- // banner text and carousel -->

    </div>


    <div class="sf-section pt-50">
        <div class="container">
            <div class="row">
                <div class="big-title">
                    <h2>Rakho <span>Iraade</span> Fresh</h2>
                </div>

                <div class="content-section1">
                    <p>Rakho <b>Iraade</b> Fresh is a platform that puts the spotlight on those who’ve chosen a unique
                        path to
                        make a meaningful difference to the world around them. Their journeys embody what we call
                        <b>“fresh
                            iraade”</b>, driving them to spark positive change for a better tomorrow. These are not just
                        stories, but real life examples of how fresh thinking and determined action can transform lives
                        in ways we never imagined. Inspired by BN Group’s vision of building the nation, Simply Fresh
                        celebrates these everyday heroes who dared to dream differently.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="full-hand-right">
        <img src="assets/img/hand-right.svg" class="img-fluid" alt="">
    </div>

    <div class="sf-section-2 pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="big-title">
                    <h2>Real Heroes: Real Impact</h2>
                </div>

                <div class="content-section1">
                    <div class="row">
                        <div class="col-md-6">
                            <p>From a <b>sous chef at a five-star restaurant</b> to a compassionate changemaker
                                <b>feeding the homeless</b>, watch Narayanan Krishnan’s inspiring story.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="share-now mt-3 align-items-center">


                                <ul>
                                    <li>
                                        <p>Share</p>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="banner-mp4-1">
                            <div class="video-1">
                                <!-- <img src="assets/img/video-banner1.png" class="img-fluid" alt="Video"> -->
                                <div class="video-wrapper">
                                    <div class="video-container" id="video-container">
                                        <video controls id="video" preload="metadata"
                                            poster="assets/img/video-banner1.png">
                                            <source src="//cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                                type="video/mp4">
                                        </video>

                                        <div class="play-button-wrapper">
                                            <div title="Play video" class="play-gif" id="circle-play-b">
                                                <!-- SVG Play Button -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                                    <path
                                                        d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="share-your-story">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="inner-link">
                                        <a href="">Know more about Narayanan</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inner-link-right">
                                        <a href="javaScript:void(0);" class="btn btn-share-story"> Share Your Story</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Video 2 -->

                    <div class="row video-section-2 pt-50">
                        <div class="col-md-6">
                            <p>Leaving behind the comfort of her high-paying job, watch how <b>Neeraja Kudrimoti</b>
                                became a <b>sustainable farming champion</b> in rural India.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="share-now mt-3 align-items-center">


                                <ul>
                                    <li>
                                        <p>Share</p>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="banner-mp4-1">
                            <div class="video-1">
                                <!-- <img src="assets/img/video-banner1.png" class="img-fluid" alt="Video"> -->
                                <div class="video-wrapper">
                                    <div class="video-container" id="video-container">
                                        <video controls id="video" preload="metadata"
                                            poster="assets/img/video-banner2.png">
                                            <source src="//cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4"
                                                type="video/mp4">
                                        </video>

                                        <div class="play-button-wrapper">
                                            <div title="Play video" class="play-gif" id="circle-play-b">
                                                <!-- SVG Play Button -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                                    <path
                                                        d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="share-your-story">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="inner-link">
                                        <a href="">Know more about Neeraja</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inner-link-right">
                                        <a href="javaScript:void(0);" class="btn btn-share-story"> Share Your Story</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="full-hand-left">
        <img src="assets/img/hand-left.svg" class="img-fluid" alt="">
    </div>

    <div class="founder-message pt-50">
        <div class="container">
            <div class="row">
                <div class="founder-msg-title">
                    <h2>Founder’s Message</h2>
                </div>

                <div class="founder-msg">
                    <div class="wrapper">
                        <div class="profile-card js-profile-card">
                            <div class="profile-card__img">
                                <img src="assets/img/no-user.avif" alt="profile card">
                            </div>

                            <div class="profile-card__cnt js-profile-cnt">
                                <p>We believe that true progress begins with a fresh mindset and the courage to truly
                                    make a difference. By championing stories of fresh iraade, we hope to inspire
                                    countless others to contribute to a better and brighter India. Together, let’s build
                                    a nation where every small action leads to a big impact.</p>
                                <div class="profile-card__name">- Anubhav Agarwal (Managing Director and CEO)</div>
                            </div>






                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="full-hand-right">
        <img src="assets/img/hand-right.svg" class="img-fluid" alt="">
    </div>

    <div class="visit pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="btn-text">
                    <p>To visit our corporate site <a href="javaScript:void(0);" class="btn btn-click-here"> Click
                            Here</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php") ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                dots: false,
                autoplay: false,
                autoplayTimeout: 5000, // Adjust timing for slide transition
                onTranslated: updateIndicators,

                margin: 10,
                responsive: {
                    0: {
                        items: 1,
                    },
                    320: {
                        items: 1,
                        stagePadding: 70,loop:false,
                    },
                    600: {
                        items: 1,
                        stagePadding: 70,loop:false,
                    },
                    768:{
                        items: 1,
                        stagePadding: 70,loop:false,
                    },
                    1000: {
                        items: 2,
                    }
                }
            });

            function updateIndicators(event) {
                let totalItems = event.item.count; // Total number of slides
                let index = event.item.index - event.relatedTarget._clones.length / 2; // Current slide index
                index = index < 0 ? totalItems + index : index; // Adjust index if negative

                $(".line-segment").removeClass("active");
                $(`.line-segment:nth-child(${(index % totalItems) + 1})`).addClass("active");
            }

        });

    </script>