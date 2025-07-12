<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Enter a string: <input type="text" name="input">
        <input type="submit" value="Reverse">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $reversed = strrev($input);
        echo "<p>Reversed string: <strong>$reversed</strong></p>";
    }
    ?>
</body>
</html>
