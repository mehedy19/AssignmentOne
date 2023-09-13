<div class="card">
  <div class="card-header">
  <h2> <?php echo "Simple Calculator"; ?> </h2> 
  </div>
  <div class="card-body">
    <form method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" required><br>
        <label for="operation">Select operation:</label>
        <select name="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br>
        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" required><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operation"]) && !empty($_POST["num1"]) && !empty($_POST["num2"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = 0;

            switch ($operation) {
                case "addition":
                    $result = $num1 + $num2;
                    break;
                case "subtraction":
                    $result = $num1 - $num2;
                    break;
                case "multiplication":
                    $result = $num1 * $num2;
                    break;
                case "division":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<p>Division by zero is not allowed.</p>";
                    }
                    break;
                default:
                    echo "<p>Invalid operation selected.</p>";
            }

            echo "<p>Result: $result</p>";
        } else {
            echo "<p>You didn't enter a value for one of the numbers</p>";
        }
    }
    ?>
  </div>
</div>