<!doctype html>
<html>
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body>
<header class="front-bg-full text-white shadow-lg">
    <div class="bg-gradient pb-5">
        <?php include 'resources/layout/nav.php' ?>

        <div class="container text-center py-5 mt-5" data-aos="fade-down">
            <h2>
                Welcome to</h2>
            <h1 class="display-1">
                Washington D.C</h1>
            <h2>National Leadership Conference 2020</h2>
            <h2>May 5-9</h2>

            <a href="#" class="btn btn-light btn-lg mt-4 shadow-md">Get Started</a>
        </div>
    </div>
</header>


<main class="container pt-5">

    <div class="row p-4" data-aos="fade-up">
        <div class="col col-md-8 mx-auto text-dark">
            <h2>Together, We Create</h2>
            <p>
                From May 1-5, we invite you to join us in Anaheim, California for the 2019 Business Professionals of America National Leadership Conference. Come together with thousands of students from across the country to compete, showcase business skills and develop leadership acumen in the Golden State.The National Leadership Conference is the culmination of the BPA year filled with hard work and dedication put into competitions, Torch Awards, leadership development, service and more!
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">.</div>

        <div class="col">
            <a class="twitter-timeline"
               data-height="400"
               data-chrome="noheader nofooter transparent"
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
