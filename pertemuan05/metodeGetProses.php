<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Check if inputBox01 is set and not empty
    if (isset($_GET["inputBox01"]) && !empty($_GET["inputBox01"])) {
        $inputBox01 = $_GET["inputBox01"];
        echo "Input Box 01: $inputBox01<br>";
    }

    // Check if inputBox2 is set (checkboxes can have multiple values)
    if (isset($_GET["inputBox2"]) && is_array($_GET["inputBox2"])) {
        $inputBox2 = $_GET["inputBox2"];
        echo "Input Box 02 (checkboxes):<br>";
        foreach ($inputBox2 as $value) {
            echo "$value<br>";
        }
    }

    // Check if inputBox3 is set (radio buttons can have only one selected value)
    if (isset($_GET["inputBox3"])) {
        $inputBox3 = $_GET["inputBox3"];
        echo "Input Box 03 (radio button): $inputBox3<br>";
    }
}
?>

