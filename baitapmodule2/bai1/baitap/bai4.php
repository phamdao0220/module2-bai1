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
<h1>Simple Calculator</h1>
<form method="post">
    <fieldset>
        <legend>Calculator</legend>
        First operand : <input type="number" name="first" id="nhap"><br>
        <select>
            <option> cong +</option>
            <option> tru -</option>
            <option> nhan *</option>
            <option> chia /</option>
        </select><br>
        Second operand : <input type="number" name="second" id="nhapvao"><br>
        <button>Calculate</button>
    </fieldset>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nhap = $_POST["nhapvao"];
    $nhapvao = $_POST["nhapvao"];

}
//$opevator = $_POST["opevator"];
//switch ($opevator) {
//    case "cong":
//        echo function cong(a1,a2);
//        break;
//    case "tru":
//        echo function tru(a1,a2);
//        break;
//    case "nhan":
//        echo function nhan(a1,a2);
//        break;
//    case "chia":
//        echo function chia(a1,a2);
//        break;
//}
//    function cong(a1,a2){
//        return $kq = a1 + a2;
//    }
//
//    function tru(a1,a2){
//        return $kq = a1 - a2;
//    }
//
//    function nhan(a1,a2){
//        return $kq = a1 * a2;
//    }
//
//    function chia(a1,a2){
//        if (a2 == 0) {
//            echo 'khong the chia het cho 0';
//        } else {
//            return $kq = a1 / a2;
//        }
//    }
//


//}
//?>
</body>
</html>
