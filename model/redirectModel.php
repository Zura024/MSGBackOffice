<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 03.02.2017
 * Time: 13:27
 */
require_once "/../config/db_congif.php";
require_once "/../config/site_config.php";
class RedirectModel{
    function saveToDb($array){
            global $conn;
            global $config;
           $sql = "update bulk_pages set ";
            if(isset($array->title)){
                $sql = $sql."title = '$array->title', ";
            }
            if(isset($array->alias)){
                $sql = $sql."alias = '$array->alias', ";
            }
            if(isset($array->caption)){
                $sql = $sql."caption = '$array->caption', ";
            }
            if(isset($array->content)){
                $sql = $sql."content = '$array->content', ";
            }
            if(isset($array->sorder)){
                $sql = $sql."sorder = '$array->sorder', ";
            }
            if(isset($array->meta_descr)){
                $sql = $sql."meta_descr = '$array->meta_descr', ";
            }
            if(isset($array->meta_key)){
                $sql = $sql."meta_key = '$array->meta_key', ";
            }
            if(isset($array->active)){
                $sql = $sql."active = '$array->active', ";
            }
            if(isset($array->template)){
                $sql = $sql."template = '$array->template', ";
            }
            if(isset($array->lang_id)){
                $sql = $sql."lang_id = '$array->lang_id' ";
            }

            $sql= $sql."where id = '$array->id'";
            $result=mysql_query($sql) or die(mysql_error());

            if ($result){
                header('location: '.$config->domain.'/page.php?id='.$array->id.'&lang_id='.$array->lang_id.'&suc=1');
            }else{
                header('location: '.$config->domain.'/page.php?id='.$array->id.'&lang_id='.$array->lang_id);
            }


    }

    function createArray(){
        $arr=(object)array();
        $arr->title=$_POST['title'];
        $arr->alias=$_POST['alias'];
        $arr->caption=$_POST['caption'];
        $arr->id=$_POST['id'];
        $arr->content=$_POST['content'];
        $arr->sorder=$_POST['sorder'];
        $arr->meta_descr=$_POST['meta_descr'];
        $arr->meta_key=$_POST['meta_key'];
        $arr->active=$_POST['active'];
        $arr->template=$_POST['template'];
        $arr->lang_id=$_POST['lang_id'];
        //$arr->alias_id=$_POST['alias_id'];

        return $arr;
    }
}