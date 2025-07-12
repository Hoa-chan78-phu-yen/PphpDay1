<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Radius: <input type="text" name="radius">
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];
        if (!is_numeric($radius) || $radius <= 0) {
            echo "<p>Please enter a valid positive number for the radius.</p>";
        } else {
            $area = pi() * pow($radius, 2);
            echo "<p>Area of the circle: <strong>$area</strong></p>";
        }
    }
    ?>
</body>
</html>
