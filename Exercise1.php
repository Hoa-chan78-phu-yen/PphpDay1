<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        if (!is_numeric($number)) {
            echo "<p>Please enter a valid number.</p>";
        } else {
            if ($number % 2 == 0) {
                echo "<p><strong>Even</strong></p>";
            } else {
                echo "<p><strong>Odd</strong></p>";
            }
        }
    }
    ?>
</body>
</html>

