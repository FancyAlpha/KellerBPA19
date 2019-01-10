<!doctype html>
<html>
<?php include 'resources/config.php'?>
<?php include 'resources/layout/head.php'?>

<body>
<header>
<?php include 'resources/layout/nav.php'?>
</header>

<?php
    $csvday1 = "resources/data/1.csv";
    $csvday2 = "resources/data/2.csv";
    $csvday3 = "resources/data/3.csv";

    $arrayindexes = array("Event" => 0, "Time" => 1);

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
        return "<button type='button' class='btn'>" . $event[$arrayindexes["Event"]] . "&nbsp;|&nbsp;" . $event[$arrayindexes["Time"]] . "</button>";
    }

    function dayToHTML($day, $arrayindexes)
    {
        $html = "";
        foreach($day as $event)
        {
            if($event !== NULL){
            $html = $html . eventToHTML($event, $arrayindexes) . "<br>";}
        }
        return $html;
    }

    $day1 = csvToArray($csvday1);
    $day2 = csvToArray($csvday2);
    $day3 = csvToArray($csvday3);

    function printSelector($currDay) {
        echo("
        <div class='row justify-content-center'>
            <div class='col-auto btn-group'>
                <button type='button' class='btn " . ($currDay == 1 ? 'btn-dark' : 'btn-outline-dark') . "'><a href=\"schedule.php#dy1\"><a>Day One</a></button>
                <button type='button' class='btn " . ($currDay == 2 ? 'btn-dark' : 'btn-outline-dark') . "'><a href=\"schedule.php#dy2\"><a>Day Two</a></button>
                <button type='button' class='btn " . ($currDay == 3 ? 'btn-dark' : 'btn-outline-dark') . "'><a href=\"schedule.php#dy3\"><a>Day Three</a></button>
            </div>
        </div>");
    }
    ?>
<main class="container my-5">
<?php
    printSelector(1);
    echo dayToHTML($day1, $arrayindexes);

    printSelector(2);
    echo dayToHTML($day2, $arrayindexes);

    printSelector(3);
    echo dayToHTML($day3, $arrayindexes);
?>
</main>
<?php include'resources/layout/scripts.php'?>
<?php include'resources/layout/footer.php'?>
</body>
</html>
