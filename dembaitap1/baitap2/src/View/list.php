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
<table class="table">
    <a href="index.php?page=add">them</a>
    <tr>
        <th>STT</th>
        <th>OrderDate</th>
        <th>RequiredDate</th>
        <th>ShippedDate</th>
        <th>Status</th>
        <th>Comments</th>
        <th>CustomerNumber</th>
        <th>Action</th>
    </tr>
    <?php foreach ($orders as $key=>$order):?>
    <tr>
        <td><?php echo $key++?></td>
        <td><?php echo $order['orderDate']?></td>
        <td><?php echo $order['requiredDate']?></td>
        <td><?php echo $order['shippedDate']?></td>
        <td><?php echo $order['status']?></td>
        <td><?php echo $order['comments']?></td>
        <td><?php echo $order['customerNumber']?></td>
        <td>
            <a href="index.php?page=edit">sua</a>
        </td>
    </tr>
    <?php endforeach?>
</table>

</body>
</html>   
