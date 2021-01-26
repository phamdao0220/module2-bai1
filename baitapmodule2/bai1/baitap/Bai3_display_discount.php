<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $List_Price = $_POST['List_Price'];
    $Product_Description = $_POST['Product_Description'];
    $Discount_Percent = $_POST['Discount_Percent'];
     $Discount_Percent = $List_Price * $Discount_Percent;
    echo $Discount_Percent;
}
