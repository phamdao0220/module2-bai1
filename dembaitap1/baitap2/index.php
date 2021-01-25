
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
<a href="index.php?page=list">danh sach hoa don</a>

</body>
</html>
<?php
require_once __DIR__ . "/vendor/autoload.php";
$billController = new \App\controller\BillController();
$page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case 'list':
        $billController->show();
        break;
    case 'add':
        $billController->add();
        break;
    case 'edit':
        $billController->edit();
        break;
//    default:
//        $billController->show();
}
?>
