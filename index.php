<!doctype html>
<html lang="en-US">
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body class="index">
<header class="front-bg-full text-white shadow-lg">
    <div class="bg-gradient pb-5">
        <?php include 'resources/layout/nav.php' ?>

        <div class="container text-center py-5" data-aos="fade-down"  data-aos-delay="400">
            <h2>
                Welcome to the</h2>
            <h1 class="display-2">
                National Leadership Conference</h1>
            <h2>Washington D.C.</h2>
            <h2>May 4-8 2020</h2>

            <a href="planner.php" class="btn btn-light btn-lg mt-4 shadow-md">Get Started</a>
        </div>
    </div>
</header>


<main class="container pt-5">

    <div class="row p-4" data-aos="fade-up">
        <div class="col col-md-8 mx-auto text-dark">
            <h2 class="text-center">Together, We Create</h2>
            <p>
                This year, at our 54th annual National Leadership Conference,
                we will make BPA history in one of the most historic cities in the nation.
                Come together with thousands of students from across the country to compete,
                showcase business skills and develop leadership acumen in the nation's capital.
                The National Leadership Conference is the culmination of the BPA year filled
                with hard work and dedication put into competitions, Torch Awards, leadership
                development, service and more!
            </p>

            <div class="text-center">
                <a href="schedule.php" class="btn btn-outline-dark">View the schedule</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">.</div>

        <div class="col d-none">
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
