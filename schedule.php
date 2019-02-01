<!doctype html>
<html>
<?php include 'resources/config.php'?>
<?php include 'resources/layout/head.php'?>

<body>
<?php include 'resources/layout/nav.php'?>

<?php
    $arrayindexes = array("Event" => 0, "Start Time" => 1, "End Time" => 2, "Location" => 3);

    function fileToString($filename)
    {
        $file = fopen($filename, "r") or die("Unable to open file!");
        $filedata = fread($file,filesize($filename));
        fclose($file);

        return $filedata;
    }

    function cleanInput($string)
    {
        return str_replace("\r", "", $string);
    }

    function csvToArray($filename)
    {
        $filedata = fileToString($filename);
        $filedata = cleanInput($filedata);

        $filepieces = explode("\n", $filedata);

        $filecsv = array(array());

        for($i = 1; $i < count($filepieces); $i++)
        {
            $filecsv[$i - 1] =  explode(",", $filepieces[$i]);
        }

        return $filecsv;
    }

    function eventToHTML($event, $arrayindexes)
    {
        return "<tr>" . "<td>" . $event[$arrayindexes["Start Time"]] . "</td><td>" . $event[$arrayindexes["End Time"]] . "</td><td>" . $event[$arrayindexes["Event"]] . "</td><td>" . $event[$arrayindexes["Location"]] . "</td></tr>";
    }

    function dayToHTML($day, $arrayindexes, $currDay)
    {
        $html =
        "<div class='table-responsive mb-5' id='dy" . $currDay . "'>
            <table class='table table-hover mt-3'>
                <thead class='schedule-thead'>
                <tr>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Event</th>
                    <th>Location</th>
                </tr>
            </thead>
        <tbody>";
        foreach($day as $event)
        {
            if($event !== NULL) {
                $html = $html . eventToHTML($event, $arrayindexes);
            }
        }

        $html = $html . "</tbody></table></div>";
        return $html;
    }

$csvday1 = "resources/data/1.csv";
$csvday2 = "resources/data/2.csv";
$csvday3 = "resources/data/3.csv";

$day1 = csvToArray($csvday1);
    $day2 = csvToArray($csvday2);
    $day3 = csvToArray($csvday3);

    function printSelector($currDay) {
        echo("
        <div class='row justify-content-center'>
            <div class='col-auto btn-group'>                
                <a class='btn " . ($currDay == 1 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy1\">Wednesday <b>5/4</b></a>                
                <a class='btn " . ($currDay == 2 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy2\">Thursday <b>5/5</b></a>              
                <a class='btn " . ($currDay == 3 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy3\">Friday <b>5/6</b></a>            
                <a class='btn " . ($currDay == 4 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy3\">Saturday <b>5/7</b></a>            
            </div>
        </div>");
    }
    ?>
<main class="container py-5">

    <nav class="bg-transparent" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Schedule</li>
        </ol>
    </nav>

    <h2 class="display-4 pb-3 text-center">Schedule</h2>

    <?php printSelector(1); ?>
    <?php echo dayToHTML($day1, $arrayindexes, 1); ?>

    <?php printSelector(2); ?>
    <?php echo dayToHTML($day2, $arrayindexes, 2); ?>

    <?php printSelector(3); ?>
    <?php echo dayToHTML($day3, $arrayindexes, 3); ?>
</main>
<?php include'resources/layout/scripts.php'?>
<?php include'resources/layout/footer.php'?>
</body>
</html>
