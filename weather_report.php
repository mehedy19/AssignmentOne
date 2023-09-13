<?php
    $temperature = 25; 

    echo "<h1>Weather Report</h1>";
    echo "<p>Temperature: $temperature&deg;C</p>";

    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature <= 20) {
        echo "<p>It's cool.</p>";
    } elseif(($temperature <= 28)) {
        echo "<p>It's So nice wearther.</p>";
    }else{
        echo "<p>It's warm.</p>"; 
    }
    ?>