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
<from method="post">
    <div class="from-group">
        <lable><OrderDat></lable>
        <input type="text" name="orderDate"value="<?php echo $orders->getOrderDate()?>" class="from-control">
    </div>
    <div class="from-group">
        <lable><RequiredDate></lable>
        <input type="text" name="requiredDate"value="<?php echo $orders->getRequiredDate()?>" class="from-control">
    </div>
    <div class="from-group">
        <lable><ShippedDate></lable>
        <input type="text" name="shippedDate"value="<?php echo $orders->getShippedDate()?>" class="from-control">
    </div>
    <div class="from-group">
        <lable><Status></lable>
        <input type="text" name="status"value="<?php echo $orders->getStatus()?>" class="from-control">
    </div>
    <div class="from-group">
        <lable><Comments></lable>
        <input type="text" name="comments"value="<?php echo $orders->getComments()?>" class="from-control">
    </div>
    <div class="from-group">
        <lable><CustomerNumber></lable>
        <input type="text" name="customerNumber"value="<?php echo $orders->getCustomerNumber()?>" class="from-control">
    </div>
    <button type="submit">Enter</button>


</from>

</body>
</html>
