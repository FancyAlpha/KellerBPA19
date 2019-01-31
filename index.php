<!doctype html>
<html lang="en-US">
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body class="index">
<header class="front-bg-full text-white shadow-lg">
    <div class="bg-gradient pb-5">
        <?php include 'resources/layout/nav.php' ?>

        <div class="container py-5" data-aos="fade-down" data-aos-delay="400">
            <div class="row flex-wrap">
                <div class="col col-12 col-sm-6">
                    <h1 class="display-4 text-center text-sm-right">
                        National Leadership Conference</h1>
                </div>

                <div class="w-0 border-right border-1 border-light m-3 d-none d-sm-block"></div>

                <div class="col d-md-flex align-items-center">
                    <h2 class="text-center text-sm-left">Washington D.C.<br>May 4-8 2020</h2>
                </div>
            </div>

            <div class="text-center">
                <a href="planner.php" class="btn btn-light btn-lg mt-4 shadow-md">View Locations</a>
            </div>
        </div>
    </div>
</header>


<main class="container pt-5">

    <div class="row p-4">
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
