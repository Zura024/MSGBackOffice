<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 07.02.2017
 * Time: 11:46
 */
require_once '/../model/AddPageModel.php';
if ((isset($_POST))&&(isset($_POST['alias']))){
    $res=new AddPageModel();
    $array=$res->createArray();
    $res->addPage($array);
}