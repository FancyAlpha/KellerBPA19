<!doctype html>
<html lang="en-US">
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body>
<header class="container">
    <?php include 'resources/layout/nav.php' ?>
</header>

<main class="container pt-5">


    <div class="row">
        <div class="col-12 col-md-6">.</div>

        <div class="col">
            <a class="twitter-timeline"
               data-height="600"
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
