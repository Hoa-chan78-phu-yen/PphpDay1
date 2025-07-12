<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Enter a non-negative integer: <input type="text" name="number">
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['number'];
        if (!is_numeric($n) || $n < 0 || floor($n) != $n) {
            echo "<p>Please enter a valid non-negative integer.</p>";
        } else {
            $factorial = 1;
            for ($i = 1; $i <= $n; $i++) {
                $factorial *= $i;
            }
            echo "<p>Factorial of $n is: <strong>$factorial</strong></p>";
        }
    }
    ?>
</body>
</html>
