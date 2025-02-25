<html>
<head>
    <h1>Practice problem 4: PHP Multiplication Table</h1>
    <link rel="stylesheet" href="../defaultstyle.css">
</head>

<body>
    <h1>Multiplication Table</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate Table</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        
        echo "<table>";        
        echo "<tr><th>Column: 0</th>";
        for ($i = 1; $i <= $number; $i++) {
            echo "<th>Column: $i</th>";
        }
        echo "</tr>";
        
        for ($i = 1; $i <= $number; $i++) {
            echo "<tr><th>Row: $i</th>";
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>
    
    <br>
    <br>
    <a href="../index.html">Back to Main Page</a> <br>
</body>
</html>
