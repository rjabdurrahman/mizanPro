<?php include 'config.php';?>
<?php include 'head.php';?>

<?php
$roll = $_POST["roll"];
$class = $_POST["class"];
?>

    <?php
$sql1 = "SELECT * FROM students WHERE roll = '$roll' ";
$out1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($out1) == 0) {
    echo "No Student Found.<br>";
} else {
    //Print Results
    while ($row = mysqli_fetch_array($out1)) {
        $name1 = $row[1];
    }

}

mysqli_free_result($out1);

?>
<body>
    <div class="info">
        <p>Roll No:
            <?php echo "\t" . $roll . "<br>"; ?>
        </p>
        <p>Class:
            <?php echo "\t" . $class . "<br>"; ?>
        </p>
        <p>Name:
            <?php echo "\t" . $name1 . "<br>"; ?>
        </p>
    </div>

    <table>
        <tr>
            <th>Subject</th>
            <th>Number</th>
            <th>Pass/Fail</th>
        </tr>
        <?php
$sql = "SELECT * FROM results WHERE roll = '$roll' ";
$out = mysqli_query($conn, $sql);

if (mysqli_num_rows($out) == 0) {
    echo "No Rsults Found.<br>";
} else {
    //Print Results
    $fcount = 0;
    $total = 0;
    while ($row = mysqli_fetch_array($out)) {
        echo "<tr>";
        printf("<td>%s</td><td>%s</td>", $row[1], $row[2]);
        if ($row[2] >= 32) {
            echo "<td>P</td>";
        } else {
            $fcount++;
            echo "<td>F</td>";
        }

        echo "</tr>";
        $total += $row[2];
    }
    echo "<tr><td>Total:</td><td>" . $total . "</td>";
    if ($fcount > 0) {
        echo "<td>Failed (" . $fcount . ")</td></tr>";
    } else {
        echo "<td>Passed</td></tr>";
    }

}

mysqli_free_result($out);
mysqli_close($conn);

?>
    </table>
</body>

</html>