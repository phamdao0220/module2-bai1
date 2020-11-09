<form method="post">
    <input type="number" name="sum" placeholder="number">
    <input type="submit" value="submit">
</form>
<?php
$sum =0;
$i = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["sum"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sum = $_POST["name"];
    if ($sum + $i < $name) {
        $sum += $i;
        $i++;
    }
}
echo $sum;
