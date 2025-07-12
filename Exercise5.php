<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Enter a string: <input type="text" name="text">
        <input type="submit" value="Count Vowels">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['text'];
        $inputLower = strtolower($input);
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        for ($i = 0; $i < strlen($inputLower); $i++) {
            if (in_array($inputLower[$i], $vowels)) {
                $count++;
            }
        }
        echo "<p>Number of vowels in '<strong>$input</strong>': <strong>$count</strong></p>";
    }
    ?>
</body>
</html>
