<form method="post">
    <input type="text" name="nhapso1" placeholder="nhap so 1"/>
    <input type="text" name="nhapso2" placeholder="nhap so 2"/>
    <input type="submit" value="submit">
<select name="tinh">
        <option value="cong">cong</option>
        <option value="tru">tru</option>
        <option value="nhan">nhan</option>
        <option value="chia">chia</option>
</select>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nhapso1 =(float)$_POST["nhapso1"];
    $nhapso2 = (float)$_POST["nhapso2"];
    $tinh = $_POST["tinh"];
    if ($tinh == "cong"){
        $sum = $nhapso1 + $nhapso2;
        echo "<p>" . $nhapso1." + ".$nhapso2." = ".$sum . "</p>";;
    } elseif ($tinh == "tru"){
        $tru = $nhapso1 - $nhapso2;
        echo "<p>" . $nhapso1." - ".$nhapso2." = ".$tru . "</p>";;
    } elseif ($tinh == "nhan"){
        $nhan = $nhapso1 * $nhapso2;
        echo "<p>" . $nhapso1." x ".$nhapso2." = ".$nhan . "</p>";
    } elseif ($tinh == "chia"){
        if ($nhapso2 == 0){
            echo "<p>"."Khong chia duoc";
        } else {
            $chia = $nhapso1 / $nhapso2;
            echo "<p>" . $nhapso1." / ".$nhapso2." = ".$chia . "</p>";
        }
    }
}
