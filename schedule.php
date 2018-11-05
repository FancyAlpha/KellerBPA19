<!doctype html>
<html>
<?php include 'resources/config.php'?>
<?php include'resources/layout/head.php'?>

<body>
<?php include'resources/layout/nav.php'?>

<?php
    $csvfile = "resources/data/s.csv";
    $htmlfile = "resources/data/last.html";
    $thisfile = "schedule.php";

    function fileToString($filename)
    {
        $file = fopen($filename, "r") or die("Unable to open file!");
        $filedata = fread($file,filesize($filename));
        fclose($file);
        
        return $filedata;
    }

    function fileFromString($filename, $data)
    {
        $file = fopen($filename, "w") or die("Unable to open file!");
        fwrite($file,$data);
        fclose($file);
        
        return $filedata;
    }

    function checkHash($filename)
    {
        $currenthash = hash_file("sha256", $filename , true);
        $lasthash = fileToString($filename . ".sha256");

        return $currenthash == $lasthash;
    }

    function writeHash($filename)
    {
        $currenthash = hash_file("sha256", $filename, true);
        fileFromString($filename . ".sha256", $currenthash);
    }

    function cleanInput($string)
    {
        return str_replace("\r", "", $string);
    }

    function csvToArray($filename)
    {
        $filedata = fileToString("resources/data/s.csv");
        $filedata = cleanInput($filedata);

        $filepieces = explode("\n", $filedata);
        
        $filecsv = array(array());

        for($i = 0; $i < count($filepieces); $i++)
        {
            $filecsv[$i] =  explode(",", $filepieces[$i]);
        }

        return $filecsv;
    }

    function csvToAssociativeArray($filename)
    {
        $filecsv = csvToArray($filename);
        $sdata = array();
        $datainfo = array();
        $dataoptions = $filecsv[0];

        for($i = 0; $i < count($dataoptions); $i++)
        {
            $datainfo[$dataoptions[$i]] = $i;
        }
        
        //creates associateive array
        for($j = 1; $j < count($filecsv); $j++)
        {
           $eventname = $filecsv[$j][$datainfo["Event"]];
           $temparray = array();

           for($k = 1; $k < count($dataoptions); $k++)
            {
                $temparray[$dataoptions[$k]] = $filecsv[$j][$k];
            }

            $sdata[$eventname] = $temparray;
        }

        return $sdata;
    }

    function rankByDay($sdata)
    {
        $day1events = array();
        $day2events = array();
        $day3events = array();

        $day1eventsranked = array();
        $day2eventsranked = array();
        $day3eventsranked = array();

        $day1eventsrankedindex = 0;
        $day2eventsrankedindex = 0;
        $day3eventsrankedindex = 0;

        foreach ($sdata as $key => $event) {
            if($event["Day"] == "1")
            {
                $day1events[$key] = $event;
            }

            elseif($event["Day"] == "2")
            {
                $day2events[$key] = $event;
            }

            elseif($event["Day"] == "3")
            {
                $day3events[$key] = $event;
            }

        }
        
        while(count($day1events) != 0)
        {
            $lowesttime = 2500;
            $lowesttimekey = "";

            foreach ($day1events as $key => $event) {
                if((int)($event["Hour"] . $event["Minute"]) < $lowesttime)
                {
                     $lowesttime = (int)($event["Hour"] . $event["Minute"]);
                     $lowesttimekey = $key;
                }
            }

            $day1eventsranked[$day1eventsrankedindex] = $day1events[$lowesttimekey];
            $day1eventsranked[$day1eventsrankedindex]["Event"] = $key;
            $day1eventsrankedindex++;
            unset($day1events[$lowesttimekey]);
        }

        while(count($day2events) != 0)
        {
            $lowesttime = 2500;
            $lowesttimekey = "";

            foreach ($day2events as $key => $event) {
                if((int)($event["Hour"] . $event["Minute"]) < $lowesttime)
                {
                     $lowesttime = (int)($event["Hour"] . $event["Minute"]);
                     $lowesttimekey = $key;
                }
            }

            $day2eventsranked[$day2eventsrankedindex] = $day2events[$lowesttimekey];
            $day2eventsranked[$day1eventsrankedindex]["Event"] = $key;
            $day2eventsrankedindex++;
            unset($day2events[$lowesttimekey]);
        }

        while(count($day3events) != 0)
        {
            $lowesttime = 2500;
            $lowesttimekey = "";

            foreach ($day3events as $key => $event) {
                if((int)($event["Hour"] . $event["Minute"]) < $lowesttime)
                {
                     $lowesttime = (int)($event["Hour"] . $event["Minute"]);
                     $lowesttimekey = $key;
                }
            }

            $day3eventsranked[$day3eventsrankedindex] = $day3events[$lowesttimekey];
            $day3eventsranked[$day1eventsrankedindex]["Event"] = $key;
            $day3eventsrankedindex++;
            unset($day3events[$lowesttimekey]);
        }

        return array($day1eventsranked, $day2eventsranked, $day3eventsranked);
    }

    function eventToHTML($event)
    {
        $ampm = "AM";
        $hour = 0;
        if((int)$event["Hour"] > 12)
        {
            $hour = (int)$event["Hour"] - 12;
            $ampm = "PM";
        }
        else
        {
            $hour = (int)$event["Hour"];
        }
        return $event["Event"] . " " . $hour . ":" . $event["Minute"] . " " . $ampm;
    }

    function dayToHTML($day)
    {
        $html = "";
        foreach($day as $event)
        {
            $html = $html . eventToHTML($event) . "<br>";
        }
        return $html;
    }

    // if(checkHash($csvfile) & checkHash($htmlfile) & checkHash($thisfile))
    // {
    //     $html = fileToString($htmlfile);
    // }
    
    // else
    if(true)
    {
        
        $sdata = csvToAssociativeArray($csvfile);
        $rankeddata = rankByDay($sdata);

        $dayselector = "
        <a href=\"schedule.php#dy1\">Day One</a>
        <a href=\"schedule.php#dy2\">Day Two</a>
        <a href=\"schedule.php#dy3\">Day Three</a>";

        $html = $dayselector . "<br><span id=\"dy1\">Day One</span><br>" . dayToHTML($rankeddata[0])
        . $dayselector . "<br><span id=\"dy2\">Day Two</span><br>" . dayToHTML($rankeddata[1])
        . $dayselector . "<br><span id=\"dy3\">Day Three</span><br>" . dayToHTML($rankeddata[2]); 

        fileFromString($htmlfile, $html);

        writeHash($csvfile);
        writeHash($htmlfile);
        writeHash($thisfile);
    }
    echo($html);
?>
<?php include'resources/layout/scripts.php'?>
<?php include'resources/layout/footer.php'?>
</body>
</html>