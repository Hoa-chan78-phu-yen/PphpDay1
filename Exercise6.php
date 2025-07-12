<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Side a: <input type="text" name="a"><br><br>
        Side b: <input type="text" name="b"><br><br>
        Side c: <input type="text" name="c"><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c) || $a <= 0 || $b <= 0 || $c <= 0) {
            echo "<p>Please enter valid positive numbers for all sides.</p>";
        } else {
            $perimeter = $a + $b + $c;
            echo "<p>Perimeter of the triangle: <strong>$perimeter</strong></p>";
        }
    }
    ?>
</body>
</html>
