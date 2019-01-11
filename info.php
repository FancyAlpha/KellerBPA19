<!doctype html>
<html lang="en-US">
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body>
<header class="container">
    <?php include 'resources/layout/nav.php' ?>
</header>

<main class="container">

    <h3 class="display-4 pt-5 pb-3 text-center">Dress Code</h3>

    <h2>Professional Dress</h2>
    <p>Second General Session and Awards Sessions, all Competitive Events (judged, non-judged, and open), Campaign Rally, Caucuses, Workshops, National Leadership Academy.</p>
    <div class="row py-3">

        <div class="col-sm-6 pb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Women</h3>
                    <ul>
                        <li>Pant or skirt suit</li>
                        <li>Dress skirt or dress slacks with coordinated blouse and/or sweater</li>
                        <li>Business professional "dress"</li>
                        <li>BPA blazer wth dress skirt or dress slacks and blouse or sweater</li>
                        <li>Dress shoes or dress sandals with heel are required with all of the above.</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-sm-6 pb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Men</h3>
                    <ul>
                        <li>Dress slacks, dress shirt, and tie</li>
                        <li>Suite, dress shirt, and tie</li>
                        <li>Sport coat, coordinated dress slacks, dress shirt, and tie</li>
                        <li>BPA blazer with dress slacks, dress shirt, and tie</li>
                        <li>Dress shoes and dress socks are required with all ofthe above.</li>
                        <li>Dress shoes and dress socks are required with all ofthe above.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 mx-auto pb-3">
            <div class="card bg-info text-white">
                <div class="card-header">
                    <i class="fas fa-exclamation-triangle"></i>&nbsp;Prohibited items
                </div>
                <div class="card-body">
                    <p>This excludes all denim for any of the above (both men and women).</p>
                </div>
            </div>
        </div>
    </div>


    <h2>Casual Dress</h2>
    <p>Tours and Exhibit hall</p>
    <div class="row py-3">

        <div class="col-sm-6 pb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Women</h3>
                    <ul>
                        <li>Sportswear (jeans), pants, and shirt, T-shirt, and shorts</li>
                        <li>Footwear required with all of the above.</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-sm-6 pb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Men</h3>
                    <ul>
                        <li>Sportswear (jeans), pants, and shirt, T-shirt, and shorts</li>
                        <li>Footwear required with all of the above.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 mx-auto pb-3">
            <div class="card bg-info text-white">
                <div class="card-header">
                    <i class="fas fa-exclamation-triangle"></i>&nbsp;Prohibited items
                </div>
                <div class="card-body">
                    <p>The following are unacceptable during BPA activities: strapless, spaghetti straps, tube tops, halter tops, midriff tops, spandex, lycra, or transparent clothing, cut-offs or ragged clothing, clothing with inappropriate words and pictures</p>
                    <p>Swim suits must be covered with appropriate attire while in any area except the swimming pool or designated sunbathing area.</p>
                </div>
            </div>
        </div>
    </div>

</main>


<?php include 'resources/layout/scripts.php' ?>
<?php include 'resources/layout/footer.php' ?>
</body>
</html>
