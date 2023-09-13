
<div class="card">
  <div class="card-header">
  <h2> <?php echo "Temperature Converter"; ?> </h2> 
  </div>
  <div class="card-body">
    <form method="post">
        <div class="form-group">
        <input class="form-control" type="number" name="temperature" placeholder="Enter temperature" required>
        <br>
        <select class="form-control" name="conversion">
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        </div>
        <br>
        <input  class="btn btn-outline-success" type="submit" value="Convert">

    </form>

</div>
<div class="card-footer">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = isset($_POST["temperature"]) ? $_POST["temperature"] : "";
        $conversion = isset($_POST["conversion"]) ? $_POST["conversion"] : "";
        $result = "";

        if ($conversion == "celsius_to_fahrenheit") {
            $result = ($temperature * 9/5) + 32 . "&deg; Fahrenheit";
        } elseif ($conversion == "fahrenheit_to_celsius") {
            $result = ($temperature - 32) * 5/9 . "&deg; Celsius";
        } else{
            $result = "You didn't enter any value";
        }
        
        echo "<p ><strong>The Temperature is: </strong> $result </p> ";
        
    }
    ?>
  </div>
</div>

    