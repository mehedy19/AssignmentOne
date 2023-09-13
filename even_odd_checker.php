
    <div class="card">
  <div class="card-header">
  <h2> <?php echo "Even or Odd Checker"; ?> </h2> 
  </div>
  <div class="card-body">
  <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        if ($number === "") {
            echo "You didn't enter any value";
        } elseif ($number % 2 == 0) {
            echo "The number $number is Even";
        } else {
            echo "The number $number is Odd";
        }
    }
}
?>

  </div>
</div>