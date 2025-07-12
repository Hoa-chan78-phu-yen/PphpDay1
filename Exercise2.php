<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Enter Celsius: <input type="text" name="celsius">
        <input type="submit" value="Convert">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST['celsius'];
        if (!is_numeric($celsius)) {
            echo "<p>Please enter a valid number.</p>";
        } else {
            $fahrenheit = ($celsius * 9 / 5) + 32;
            echo "<p>Temperature in Fahrenheit: <strong>$fahrenheit &deg;F</strong></p>";
        }
    }
    ?>
</body>
</html>
