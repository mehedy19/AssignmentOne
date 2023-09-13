
<div class="card">
  <div class="card-header">
  <h2> <?php echo "Weather Report"; ?> </h2> 
  </div>
  <div class="card-body">


<?php
    $temperature = 25; 

    echo "<p>Today's Temperature: $temperature&deg;C</p>";

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

  </div>
</div>