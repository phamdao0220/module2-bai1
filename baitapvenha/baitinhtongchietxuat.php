<form method="post">
    <input type="text" name="nhapsotien">
    <input type="submit" value="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nhapsotien"];
    $num = 0;
    if ($name >= 100000 && $name < 500000) {
        $num=$name*0.99;
    }

    else if ($name>=500000 && $name<3000000){
        $num=$name*0.98;
    }
    else if ($name>=3000000){
        $num=$name*0.95;
    }
    else{
        $num = $name;
    }
    echo 'so tien sau khi chiet khau ' . $num;
}

