<!doctype html>
<html lang="en-US">
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body>
<header class="container">
    <?php include 'resources/layout/nav.php' ?>
</header>

<main class="container pt-5 about">

    <div>
        <ul class="list-group">
            <li class="list-group-item">Team: </li>
            <li class="list-group-item">Chapter: </li>
            <li class="list-group-item">Other probably important things</li>
<!--            <li class="list-group-item"></li>-->
        </ul>
    </div>

    <section class="py-5">
        <h3 class="display-4 text-center pb-3">Meet the team</h3>
        <div class="row card-deck">

                <div class="card">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Taraka Pranav Rayudu</h3>
                        <h5 class="card-subtitle text-muted mb-2">Project Manager/Front-End developer</h5>

                        <p class="card-text">Smart guy</p>
                    </div>
                </div>



                <div class="card">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Bryson Smith</h3>
                        <h5 class="card-subtitle text-muted mb-2">Javascript Developer</h5>

                        <p class="card-text">Another smart guy</p>
                    </div>
                </div>



                <div class="card">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Carter Watson</h3>
                        <h5 class="card-subtitle text-muted mb-2">Backend/Server (PHP) Developer</h5>

                        <p class="card-text">Last, but not the least, smart guy. choo choo basic text</p>
                    </div>
                </div>


        </div>
    </section>

    <div class="row">

        <div class="col-12 col-md-6">.</div>

        <div class="col">
            <a class="twitter-timeline"
               data-height="600"
               data-chrome="noheader nofooter transparent"
               href="https://twitter.com/National_BPA?ref_src=twsrc%5Etfw">
        </div>
    </div>
</main>


<?php include 'resources/layout/scripts.php' ?>
<?php include 'resources/layout/footer.php' ?>
</body>
</html>
