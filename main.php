
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
if (isset($_GET['number'])) {
    $num = intval($_GET['number']);
    generateTable($num);
} else {
    echo '<form method="GET">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Generate Table">
    </form>';
}

function generateTable($n) {
    echo "<table>";
    for ($i = 0; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $n; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<td>#</td>";
            } else if ($i == 0) {
                echo "<td><strong>$j</strong></td>";
            } else if ($j == 0) {
                echo "<td><strong>$i</strong></td>";
            } else {
                echo "<td>" . $i * $j . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
