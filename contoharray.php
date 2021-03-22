<?php
    // $mobil=array("volvo","bmw","toyota");
    $mobil=["volvo","bmw","toyota"];

    sort($mobil);

    $length=count($mobil);

    for($x=0; $x < $length; $x++){
        echo $mobil[$x];
        echo "<br>";
    }
?>