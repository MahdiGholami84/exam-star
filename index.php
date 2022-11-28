<?php
if (isset($_POST['submit'])) {
    $n = $_POST['n1'];
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>
<form method="post">
    <label> number:</label></br>
    <input type="number" name="n1">
    <input type="submit" name="submit" value="run">
</form>
