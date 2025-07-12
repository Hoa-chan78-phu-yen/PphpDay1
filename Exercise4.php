<!DOCTYPE html>
<html>
<body>
      <form method="post">
        Enter a number (≥ 2): <input type="text" name="number">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['number'];
        if (!is_numeric($n) || $n < 2 || floor($n) != $n) {
            echo "<p>Please enter an integer ≥ 2.</p>";
        } else {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            echo "<p>The number $n is: <strong>" . ($isPrime ? "Prime" : "Not Prime") . "</strong></p>";
        }
    }
    ?>
</body>
</html>
