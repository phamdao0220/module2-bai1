<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <h1>Danh sach khach hang</h1>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay</th>
        <th>Dia chi</th>
        <th>Anh</th>
    </tr>
</table>
<?php
$num = array(
    "1" => array("ten" => "hoang mai hung", "ngay" => "12/01/1993", "diachi" =>" ha noi"),
   "2"=> array("ten" =>"hoang van tai", "ngay" =>"13 / 12 / 1995","diachi" =>" ha noi"));
foreach ($num as $key => $values) {
    echo " <tr>";
}
?>


</body>
</html>
