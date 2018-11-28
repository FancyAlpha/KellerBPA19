<!doctype html>
<style>
a:link, a:visited {
    background-color: #31315a;
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    border-radius: 12px;
}

a:hover, a:active {
    background-color: red;
}
</style>
<html>
<?php include 'resources/config.php'?>
<?php include'resources/layout/head.php'?>

<body>
<?php include'resources/layout/nav.php'?>

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

        for($i = 0; $i < count($filepieces); $i++)
        {
            $filecsv[$i] =  explode(",", $filepieces[$i]);
        }

        return $filecsv;
    }
    
    function eventToHTML($event, $arrayindexes)
    {
        return "<h2 style=\"text-align: center;\">" . $event[$arrayindexes["Event"]] . "&nbsp;|&nbsp;" . $event[$arrayindexes["Time"]] . "</h2>";
    }

    function dayToHTML($day, $arrayindexes)
    {
        $html = "";
        foreach($day as $event)
        {
            $html = $html . eventToHTML($event, $arrayindexes) . "<br>";
        }
        return $html;
    }
        
        $day1 = csvToArray($csvday1);
        $day2 = csvToArray($csvday2);
        $day3 = csvToArray($csvday3);

        $dayselector = "<h1 style=\"text-align: center;\">
        <a href=\"schedule.php#dy1\">Day One</a>
        <a href=\"schedule.php#dy2\">Day Two</a>
        <a href=\"schedule.php#dy3\">Day Three</a>";

        $html = $dayselector . "<br><span id=\"dy1\">Day One</span><br></h1>" . dayToHTML($day1, $arrayindexes)
        . $dayselector . "<br><span id=\"dy2\">Day Two</span><br></h1>" . dayToHTML($day2, $arrayindexes)
        . $dayselector . "<br><span id=\"dy3\">Day Three</span><br></h1>" . dayToHTML($day3, $arrayindexes);
    echo($html);
?>
<?php include'resources/layout/scripts.php'?>
<?php include'resources/layout/footer.php'?>
</body>
</html>
