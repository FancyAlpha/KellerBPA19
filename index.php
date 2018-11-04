<!doctype html>
<html>
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php'?>
<?php include'resources/layout/head.php'?>

<body>
<?php include'resources/layout/nav.php'?>

<main class="container">

    <div class="header row justify-content-center">
        <div class="align-self-center">
            <h1 class="display-1" id="timer"></h1>
            <h3 class="text-muted text-center">remaining</h3>
        </div>
    </div>

</main>
<?php include'resources/layout/scripts.php'?>
<?php include'resources/layout/footer.php'?>
</body>
</html>
