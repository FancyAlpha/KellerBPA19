<!doctype html>
<html lang="en-US">
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body>

<?php include 'resources/layout/nav.php' ?>


<main class="container py-5 about">

    <nav class="bg-transparent" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>

    <h2 class="display-4 pb-3 text-center">Team Goals</h2>

    <div class="row justify-content-center">
        <!--
        name of chapter, team member names, theme, school, city, state, and year
        -->
        <ul class="list-group col col-md-10 col-lg-6">
            <li class="list-group-item">
                <h4>Mission Statement</h4>
                <p>As active members of Business Professionals of America, we sought to leverage our
                    creative and technical skills to create a simple yet robust planning interface for
                    BPA Advisors attending the National Leadership Conference in 2020. We intended our site
                    to stand the test of thousands of visits and hope it will assist chapters around the nation.
                </p>
            </li>
            <li class="list-group-item">Team Members:
                <ul>
                    <li>Taraka Pranav Rayudu</li>
                    <li>Bryson Smith</li>
                    <li>Carter Watson</li>
                </ul>
            </li>
            <li class="list-group-item">Chapter 02-0478</li>
            <li class="list-group-item">Keller High School, Keller TX, 2018-19</li>

<!--            <li class="list-group-item"></li>-->
        </ul>
    </div>
</main>

<section class="team-members">
    <div class="container py-5">
        <h2 class="display-4 text-center pb-3">Meet the team</h2>
        <div class="row card-deck m-4 m-sm-0">

            <div class="card">
                <img class="card-img-top" src="resources/assets/pranav.png" alt="Taraka Pranav Rayudu">
                <div class="card-body">
                    <h3 class="card-title">Taraka Pranav Rayudu</h3>
                    <h5 class="card-subtitle text-muted mb-2">Project Manager/Front-End developer</h5>

<!--                    <p class="card-text">Smart guy</p>-->
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="resources/assets/bryson.jpeg" alt="Bryson Smith">
                <div class="card-body">
                    <h3 class="card-title">Bryson Smith</h3>
                    <h5 class="card-subtitle text-muted mb-2">Javascript Developer</h5>

<!--                    <p class="card-text">Another smart guy</p>-->
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="resources/assets/carter.jpeg" alt="Carter Watson">
                <div class="card-body">
                    <h3 class="card-title">Carter Watson</h3>
                    <h5 class="card-subtitle text-muted mb-2">Backend/Server (PHP) Developer</h5>

<!--                    <p class="card-text">Last, but not the least, smart guy. choo choo basic text</p>-->
                </div>
            </div>


        </div>
    </div>
</section>

<section class="jumbotron jumbotron-fluid mb-0 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 my-auto">
                <h4 class="display-4 text-white pb-3">Check out BPA's Twitter for more updates!</h4>
            </div>

            <div class="col">
                <a class="twitter-timeline"
                   data-height="600"
                   data-chrome="noheader nofooter"
                   href="https://twitter.com/National_BPA?ref_src=twsrc%5Etfw">
                    Tweets by National_BPA
                </a>
            </div>
            <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</section>


<?php include 'resources/layout/scripts.php' ?>
<?php include 'resources/layout/footer.php' ?>
</body>
</html>
