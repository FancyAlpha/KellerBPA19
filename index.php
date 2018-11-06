<!doctype html>
<html>
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body>
<?php include 'resources/layout/nav.php' ?>

<main class="container">

    <header>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">


            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">

                <div class="carousel-item active">

                    <img src="resources/assets/washington-monument.jpg">

                    <div class="carousel-caption text-white">
                        <h6 class="display-4">
                            Welcome to</h6>
                        <h1 class="font-weight-bold display-4">
                            Washington D.C</h1>
                        <h4 class="d-md-none display-4 pt-5">May 5-9</h4>
                    </div>
                </div>

                <div class="carousel-item">

                    <img src="resources/assets/washington-monument.jpg">

                    <div class="carousel-caption text-white">
                        <h6 class="display-4">
                            Welcome to</h6>
                        <h1 class="font-weight-bold display-4">
                            Washington D.C</h1>
                        <h4 class="d-md-none display-4 pt-5">May 5-9</h4>
                    </div>
                </div>

                <div class="carousel-item">

                    <img src="resources/assets/washington-monument.jpg">

                    <div class="carousel-caption text-white">
                        <h6 class="display-4">
                            Welcome to</h6>
                        <h1 class="font-weight-bold display-4">
                            Washington D.C</h1>
                        <h4 class="d-md-none display-4 pt-5">May 5-9</h4>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

    <!---->
    <!--        <div class="bg-dark text-white position-absolute d-md-inline-block d-none p-4">-->
    <!--            <h1 class="display-4 font-weight-bold">May 5-9</h1>-->
    <!--            <h2 class="font-weight-bold text-muted text-center">2020</h2>-->
    <!--            <!--            <span class="display-1" id="timer"></span>-->-->
    <!--            <!--            <h3 class="text-muted">remaining</h3>-->-->
    <!--        </div>-->
    </div>

    <div class="row">
        <div class="col">

        </div>

        <div class="col">

        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">.</div>

        <div class="col">
            <a class="twitter-timeline"
               data-height="600"
               data-chrome="noheader nofooter noborders transparent"
               href="https://twitter.com/National_BPA?ref_src=twsrc%5Etfw">
                Tweets by National_BPA
            </a>
        </div>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</main>
<?php include 'resources/layout/scripts.php' ?>
<?php include 'resources/layout/footer.php' ?>
</body>
</html>
