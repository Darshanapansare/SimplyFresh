<?php $page = 'products'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Fresh | Products</title>

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

    <div class="main-header" style="background: #D7D7D7;height:20vh;margin: 0;border-radius: 0;">
        <div class="header-part-top">
            <?php include("includes/header.php") ?>
        </div>
    </div>

    <section id="product" class="pt-50 pb-50">
        <div class="container">
            <div class="rakho-container">
                <div class="big-title">
                    <h2>Our Products</h2>
                </div>

                <!-- Pro 1 -->
                <div class="row proRow1">
                    <div class="col-md-4">
                        <div class="product-img-left">
                            <img class="img-fluid" src="assets/img/product1.png">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="prod-title">
                            <h2> Simply Fresh Sunflower Oil</h2>
                        </div>
                        <p class="prod-description">
                            Simply Fresh Sunflower Oil Simply Fresh Sunflower Oil <b>combines purity and nutrition</b>
                            to
                            support your family’s everyday cooking needs. Light in texture and neutral in taste, this
                            oil <b>lets the natural flavours of your food shine</b>while infusing it with the health
                            benefits
                            of Vitamin E and essential fatty acids. From deep-frying to sautéing and baking, its
                            versatility ensures consistent results and perfectly cooked dishes, making it a reliable
                            choice for every meal.
                        </p>
                        <p class="spacer"></p>


                        <p class="show_more_less"><a href="javaScript:void(0);" id="sf-pro1-show" class="show_more_less"
                                onclick="toggleContent('sf-pro1', event);return false;" style="display: inline;">Show
                                More <i class="fa fa-angle-down fa-lg"></i></a></p>
                    </div>

                    <div id="sf-pro1" class="more" style="display: none;">

                        <div class="custom-container">
                            <!-- Main container -->
                            <h1 class="custom-title">Benefits of Simply Fresh Refined Sunflower Oil</h1>
                            <div class="row g-4">
                                <!-- Benefit 1 -->
                                <div class="col-md-4">
                                    <div class="media">
                                        <div class="media-left">
                                            <p class="benefit_number">01</p>
                                        </div>
                                        <div class="media-body">
                                            <p class="benefits_spotlight"><a class="benefits_spotlight" href="#">Rich in
                                                    Omega-6 Fatty Acids </a></p>
                                            <p class="benefit-description">
                                                Packed with omega-6 polyunsaturated fats, which are crucial for a
                                                healthy lifestyle and overall well-being.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <!-- Benefit 2 -->
                                <div class="col-md-4">
                                    <div class="media">
                                        <div class="media-left">
                                            <p class="benefit_number">02</p>
                                        </div>
                                        <div class="media-body">
                                            <p class="benefits_spotlight"><a class="benefits_spotlight"
                                                    href="#">Cholesterol Management</a></p>
                                            <p class="benefit-description">
                                                Simply Fresh Sunflower Oil lowers LDL (bad cholesterol), contributing to
                                                heart health.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <!-- Benefit 3 -->
                                <div class="col-md-4">
                                    <div class="media">
                                        <div class="media-left">
                                            <p class="benefit_number">03</p>
                                        </div>
                                        <div class="media-body">
                                            <p class="benefits_spotlight"><a class="benefits_spotlight" href="#">Immune
                                                    System Booster</a></p>
                                            <p class="benefit-description">
                                                Abundant in antioxidants like tocopherols (Vitamin E), it promotes
                                                long-term health benefits.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <hr>
                            <h1 class="custom-title mt-5">Why Choose Simply Fresh Sunflower Oil?</h1>
                            <ul class="custom-list">
                                <p><strong>Supports Skin Health:</strong> Vitamin E provides natural moisturizing,
                                    anti-aging, and anti-inflammatory benefits.</p>
                                <p><strong>Enhances Flavour:</strong> Its neutral profile enhances foods without
                                    overpowering them.</p>
                                <p><strong>Prolongs Freshness:</strong> Ideal for use in processed foods, it extends
                                    shelf life while preserving essential nutrients.</p>
                            </ul>
                            <p class="benefit-description-ft">Bring the goodness of nature to your kitchen with Simply
                                Fresh Sunflower Oil; a versatile, heart-healthy, and flavour-enhancing choice for every
                                meal.</p>

                        </div>


                        <p class="show_less"><a href="javaScript:void(0);" id="sf-pro1-hide" class="show_less"
                                onclick="toggleContent('sf-pro1', event);return false;">Show Less <i
                                    class="fa fa-angle-up fa-lg"></i></a></p>
                    </div>
                </div>

                <!-- Product 2 -->


                <div class="row proRow2 pt-50">
                    <div class="rakho-container">
                        <div class="row">
                            <div class="col-md-8">

                                <div class="prod-title">
                                    <h2> Simply Fresh Sunflower Oil</h2>
                                </div>

                                <p class="prod-description">
                                    Simply Fresh Sunflower Oil Simply Fresh Sunflower Oil <b>combines purity and
                                        nutrition</b>
                                    to
                                    support your family’s everyday cooking needs. Light in texture and neutral in taste,
                                    this
                                    oil <b>lets the natural flavours of your food shine</b>while infusing it with the
                                    health
                                    benefits
                                    of Vitamin E and essential fatty acids. From deep-frying to sautéing and baking, its
                                    versatility ensures consistent results and perfectly cooked dishes, making it a
                                    reliable
                                    choice for every meal.
                                </p>

                                <p class="spacer"></p>


                                <p class="show_more_less"><a href="javaScript:void(0);" id="sf-pro-2-show"
                                        class="show_more_less" onclick="toggleContent('sf-pro2', event);return false;"
                                        style="display: inline;">Show
                                        more
                                        <i class="fa fa-angle-down fa-lg"></i></a></p>
                            </div>


                            <div class="col-md-4 top_in_phone">
                                <img class="img-fluid" src="assets/img/product1.png">
                            </div>

                            <div id="sf-pro2" class="more" style="display: none;">
                                <div class="custom-container">
                                    <!-- Main container -->
                                    <h1 class="custom-title">Benefits of Simply Fresh Refined Soyabean Oil</h1>
                                    <div class="row g-4">
                                        <!-- Benefit 1 -->
                                        <div class="col-md-4">
                                            <div class="media">
                                                <div class="media-left">
                                                    <p class="benefit_number">01</p>
                                                </div>
                                                <div class="media-body">
                                                    <p class="benefits_spotlight"><a class="benefits_spotlight"
                                                            href="#">Rich in
                                                            Omega-6 Fatty Acids </a></p>
                                                    <p class="benefit-description">
                                                        Packed with omega-6 polyunsaturated fats, which are crucial for
                                                        a
                                                        healthy lifestyle and overall well-being.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Benefit 2 -->
                                        <div class="col-md-4">
                                            <div class="media">
                                                <div class="media-left">
                                                    <p class="benefit_number">02</p>
                                                </div>
                                                <div class="media-body">
                                                    <p class="benefits_spotlight"><a class="benefits_spotlight"
                                                            href="#">Cholesterol Management</a></p>
                                                    <p class="benefit-description">
                                                        Simply Fresh Soyabean Oil lowers LDL (bad cholesterol),
                                                        contributing to
                                                        heart health.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Benefit 3 -->
                                        <div class="col-md-4">
                                            <div class="media">
                                                <div class="media-left">
                                                    <p class="benefit_number">03</p>
                                                </div>
                                                <div class="media-body">
                                                    <p class="benefits_spotlight"><a class="benefits_spotlight"
                                                            href="#">Immune
                                                            System Booster</a></p>
                                                    <p class="benefit-description">
                                                        Abundant in antioxidants like tocopherols (Vitamin E), it
                                                        promotes
                                                        long-term health benefits.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <hr>

                                    <h1 class="custom-title mt-5">Why Choose Simply Fresh Soyabean Oil?</h1>
                                    <ul class="custom-list">
                                        <p><strong>Supports Skin Health:</strong> Vitamin E provides natural
                                            moisturizing,
                                            anti-aging, and anti-inflammatory benefits.</p>
                                        <p><strong>Enhances Flavour:</strong> Its neutral profile enhances foods without
                                            overpowering them.</p>
                                        <p><strong>Prolongs Freshness:</strong> Ideal for use in processed foods, it
                                            extends
                                            shelf life while preserving essential nutrients.</p>
                                    </ul>
                                    <p class="benefit-description-ft">Ideal for use in processed foods, it extends shelf
                                        life while
                                        preserving essential nutrients Ideal for use in processed foods, it extends
                                        shelf life
                                        while preserving essential nutrients</p>

                                </div>


                                <p class="show_less"><a href="javaScript:void(0);" id="sf-pro-2-hide" class="show_less"
                                        onclick="toggleContent('sf-pro2', event);return false;">Show Less <i
                                            class="fa fa-angle-up fa-lg"></i></a></p>
                            </div>
                        </div>


                    </div>
                </div>



            </div>
        </div>
    </section>



    <?php include("includes/footer.php") ?>