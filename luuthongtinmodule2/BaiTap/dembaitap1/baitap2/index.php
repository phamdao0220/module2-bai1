<?php

use App\Controller\StudentController;

require_once __DIR__."/vendor/autoload.php";
$studentController= new StudentController();
$page = (isset($_REQUEST['page']))?$_REQUEST['page']:NULL;
switch ($page) {
    case 'add':
        $studentController->add();
        break;
    case 'edit':
        $studentController->edit();
        break;
    case'delete':
        $studentController->delete();
        break;
    default:
        $studentController->show();
}
