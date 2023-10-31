<!DOCTYPE html>
<html>

<head>
    <h1>EECS 348 Lab Seven Practice Four - Multiplication Table</h1>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["size"])) {
        $size = intval($_POST["size"]);

        if ($size > 0) {
            echo "<h2>Multiplication Table for Size $size</h2>";
            echo "<table border='1'>";

            // Create the table header
            echo "<tr>";
            echo "<th> </th>";
            for ($i = 1; $i <= $size; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Create the table rows
            for ($i = 1; $i <= $size; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= $size; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Please enter a valid positive integer for the size.";
        }
    }
    ?>
</body>

</html>
