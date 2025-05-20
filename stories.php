<?php $page = 'stories'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Fresh | Stories</title>

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

    <div class="stories pt-50 pb-50">
        <div class="container">
            <div class="storiesDiv">
                <div class="row">
                    <div class="col-md-8">
                        <div class="title-stories">
                            <h2>Real Heroes: Redefining Success Through Service and Impact</h2>
                        </div>
                    </div>
                </div>

                <div class="stories-Data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="real-heros">
                                <div class="card text-bg-dark">
                                    <img src="assets/img/real-hero-1.png" class="card-img" alt="Real Hero">
                                    <div class="card-img-overlay">
                                        <a href="stories-details.php" class="card-title">How One Woman Traded Corporate
                                            Success for Rural
                                            India’s
                                            Progress</a>
                                    </div>
                                </div>
                                <div class="content-sort">
                                    <p>We believe that true progress begins with a fresh mindset and the courage to
                                        truly make a difference. By championing stories of</p>

                                    <div class="readMore">
                                        <a href="stories-details.php" class="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="real-heros">
                                <div class="card text-bg-dark">
                                    <img src="assets/img/real-hero-2.png" class="card-img" alt="Real Hero">
                                    <div class="card-img-overlay">
                                        <a href="product-details.php" class="card-title">How A Five-Star Chef Chose to
                                            Serve Those Who Need
                                            It
                                            Most</a>

                                    </div>
                                </div>

                                <div class="content-sort">
                                    <p>We believe that true progress begins with a fresh mindset and the courage to
                                        truly make a difference. By championing stories of</p>

                                    <div class="readMore">
                                        <a href="product-details.php" class="">Read More</a>
                                    </div>
                                </div>

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

    <div class="formSection pt-50 pb-50">
        <div class="container">
            <div class="form-Div">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-stories">
                            <h2>Are you or Someone You Know Making
                                a Difference? Tell Us!</h2>
                            <h4 class="sub-title-h4">Share with us more <b>fresh iraade</b> stories that are helping
                                build
                                the
                                nation</h4>
                            <p class="sub-title-p">Whether it's your story or the story of someone you know, or a story
                                you
                                came
                                across that
                                moved you, we want you to share it with us
                                through the form below:</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <?php include('includes/form.php'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php include("includes/footer.php") ?>