<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Enter number of terms: <input type="text" name="n">
        <input type="submit" value="Generate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['n'];
        if (!is_numeric($n) || $n <= 0 || floor($n) != $n) {
            echo "<p>Please enter a valid positive integer.</p>";
        } else {
            $n = (int)$n;
            $fib = [];
            $fib[0] = 0;
            if ($n > 1) {
                $fib[1] = 1;
            }
            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            }
            echo "<p>Fibonacci sequence up to $n terms:</p><p>";
            for ($i = 0; $i < $n; $i++) {
                echo $fib[$i] . " ";
            }
            echo "</p>";
        }
    }
    ?>
</body>
</html>
