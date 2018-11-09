<!doctype html>
<html>
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body>

<header class="front-bg-full text-white">
    <div class="bg-gradient">
        <?php include 'resources/layout/nav.php' ?>

        <div class="container text-center py-5">
            <h1 class="display-4">
                Welcome to</h1>
            <h1 class="display-1">
                Washington D.C</h1>
            <h2>National Leadership Conference 2020</h2>
            <h2>May 5-9</h2>

            <a href="#" class="btn btn-light btn-lg mt-4">Get Started</a>
        </div>
    </div>
</header>


<main class="container">
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
