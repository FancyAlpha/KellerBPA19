<!doctype html>
<html lang="en">
<?php include 'resources/config.php'?>
<?php include 'resources/layout/head.php'?>

<body>
<?php include 'resources/layout/nav.php'?>

<?php
    $arrayindexes = array("Event" => 0, "Start Time" => 1, "End Time" => 2, "Location" => 3, "Type" => 4);

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
            $filecsv[$i - 1] =  explode("\t", $filepieces[$i]);
        }

        return $filecsv;
    }

    function eventToHTML($event, $arrayindexes)
    {
        return "<tr>" .
            "<td>" . $event[$arrayindexes["Start Time"]] . "</td>" .
            "<td>" . $event[$arrayindexes["End Time"]] . "</td>" .
            "<td>" . $event[$arrayindexes["Event"]] . "&nbsp;&nbsp;" . generateBadge($event[$arrayindexes["Type"]]) . "</td>" .
            "<td>" . $event[$arrayindexes["Location"]] . "</td>" .
//            "<td>" . $event[$arrayindexes["Type"]] . "</td>" .
        "</tr>";
    }

    function generateBadge($event) {
        $color = "badge-info";
        if($event == "Event") {
            $color = "badge-primary";
        } else if ($event == "Contest") {
            $color = "badge-success";
        }

        return "<span class=\"badge " . $color . "\">" . $event . "</span>";
    }

    function dayToHTML($day, $arrayindexes, $currDay)
    {
        $html =
        "<div class='table-responsive mb-5' id='dy" . $currDay . "'>
            <table class='table table-hover mt-3'>
                <thead class='schedule-thead'>
                <tr>
                    <th style='width: 10%;'>Start Time</th>
                    <th style='width: 10%;'>End Time</th>
                    <th style='width: 50%;'>Event</th>
                    <th style='width: 40%;'>Location</th>
                    <!--<th>Event</th>-->
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

$csvday1 = "resources/data/1.tsv";
$csvday2 = "resources/data/2.tsv";
$csvday3 = "resources/data/3.tsv";
$csvday4 = "resources/data/4.tsv";
$csvday5 = "resources/data/5.tsv";

$day1 = csvToArray($csvday1);
    $day2 = csvToArray($csvday2);
    $day3 = csvToArray($csvday3);
     $day4 = csvToArray($csvday4);
    $day5 = csvToArray($csvday5);

    function printSelector($currDay) {
        echo("
        <div class='row justify-content-center'>
            <div class='btn-group justify-content-center flex-wrap' role='day buttons' aria-label='selector for days'>  
                <a class='btn " . ($currDay == 1 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy1\">Tuesday <b>5/3</b></a>
                <a class='btn " . ($currDay == 2 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy2\">Wednesday <b>5/4</b></a>                
                <a class='btn " . ($currDay == 3 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy3\">Thursday <b>5/5</b></a>              
                <a class='btn " . ($currDay == 4 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy4\">Friday <b>5/6</b></a>            
                <a class='btn " . ($currDay == 5 ? 'dy-btn-fill' : 'dy-btn-outline') . "' href=\"#dy5\">Saturday <b>5/7</b></a>            
            </div>
        </div>
        ");
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
    
    <?php printSelector(4); ?>
    <?php echo dayToHTML($day4, $arrayindexes, 4); ?>

    <?php printSelector(5); ?>
    <?php echo dayToHTML($day5, $arrayindexes, 5); ?>
</main>
<?php include'resources/layout/scripts.php'?>
<?php include'resources/layout/footer.php'?>
</body>
</html>
