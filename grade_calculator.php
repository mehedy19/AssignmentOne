<div class="card">
  <div class="card-header">
  <h2> <?php echo "Grade Calculator"; ?> </h2> 
  </div>
  <div class="card-body">
    <form method="post">
        <label for="score1">Test Score 1:</label>
        <input class="form-control" type="number" name="score1" required><br>
        <label for="score2">Test Score 2:</label>
        <input class="form-control" type="number" name="score2" required><br>
        <label for="score3">Test Score 3:</label>
        <input class="form-control" type="number" name="score3" required><br>
        <input class="btn btn-outline-success" type="submit" value="Calculate Grade">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["score1"]) && isset($_POST["score2"]) && isset($_POST["score3"]) && 
            !empty($_POST["score1"]) && !empty($_POST["score2"]) && !empty($_POST["score3"])) {
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];
            $average = ($score1 + $score2 + $score3) / 3;

            $grade = '';
            if ($score1 < 33 || $score2 < 33 || $score3 < 33) {
                $grade = 'F';
            }elseif ($average >= 90) {
                $grade = 'A+';
            } elseif ($average >= 80) {
                $grade = 'A';
            } elseif ($average >= 70) {
                $grade = 'A-';
            } elseif ($average >= 60) {
                $grade = 'B+';
            }elseif ($average >= 50) {
                $grade = 'B';
            }elseif ($average >= 40) {
                $grade = 'C';
            }elseif ($average >= 33){
                $grade = 'D';
            }else {
                $grade = 'F';
            }
            echo "<p>Score One: $score1 </p>";
            echo "<p>Score Two: $score2 </p>";
            echo "<p>Score Three: $score3 </p>";
            echo "<p>Average Score: $average</p>";
            echo "<p>Grade: $grade</p>";
        } else {
            echo "<p>You didn't enter any value</p>";
        }
    }
?>

</div>
</div>