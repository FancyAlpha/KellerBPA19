<!doctype html>
<html lang="en-US">
<?php include 'resources/config.php'?>
<?php include'resources/layout/head.php'?>

<body>
<?php include'resources/layout/nav.php'?>

<main class="container py-5">

    <nav class="bg-transparent" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Locations</li>
        </ol>
    </nav>

    <h2 class="display-4 pb-3">Hotels and Event Center Info</h2>

    <div class="google-maps">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1rdUS9stagHpYo9nAuSTcn7uKEsDOTyLY" width="600" height="450" frameborder="0"></iframe>
    </div>
</main>
<?php include'resources/layout/scripts.php'?>
<?php include'resources/layout/footer.php'?>
</body>
</html>
