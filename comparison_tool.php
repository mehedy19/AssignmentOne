
<div class="card">
  <div class="card-header">
  <h2> <?php echo "Comparison Tool"; ?> </h2> 
  </div>
  <div class="card-body">  
    
    <form method="post">
        <label for="num1">Enter the first number:</label>
        <input class="form-control" type="number" name="num1" required><br>
        <label for="num2">Enter the second number:</label>
        <input class="form-control" type="number" name="num2" required><br>
        <input class="btn btn-outline-success" type="submit" value="Compare">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["num1"]) && isset($_POST["num2"]) && !empty($_POST["num1"]) && !empty($_POST["num2"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            // $result = ($num1 > $num2) ? $num1 : $num2;
            // echo "<p>The larger number is: $result</p>";
            if($num1 > $num2){
                echo "$num1 is larger then $num2";
            }elseif($num1 < $num2){
                echo "$num1 is Smaller then $num2";
            }elseif($num1 = $num2){
                echo "$num1 is equal to $num2";
            }

           
        } elseif (empty($_POST["num1"]) || empty($_POST["num2"])) {
            echo "<p>You didn't enter a value for one of the numbers</p>";
        } else {
            echo "<p>You didn't enter any value</p>";
        }
    }
    ?>
  </div>
</div>