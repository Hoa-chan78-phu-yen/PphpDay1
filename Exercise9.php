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
        if (!is_numeric($number) || $number < 0 || floor($number) != $number) {
            echo "<p>Please enter a valid non-negative integer.</p>";
        } else {
            $reversed = strrev($number);
            if ($number == $reversed) {
                echo "<p><strong>Palindrome</strong></p>";
            } else {
                echo "<p><strong>Not Palindrome</strong></p>";
            }
        }
    }
    ?>
</body>
</html>
