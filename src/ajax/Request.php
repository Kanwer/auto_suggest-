<?php
include "../utils/MyEsUtils.php";
$action=$_REQUEST["action"];

$data=$_REQUEST["search_field"];


switch($action){

case 'search':

$MyEsUtilsObj=new MyEsUtils();
 $qry=$MyEsUtilsObj->getQuery($data);


$method="GET";
$response=$MyEsUtilsObj->performCurlCall($method,$qry);
$arr = json_decode($response,true);
        $details= $arr['hits']['hits'];
        foreach($details as $key=>$v)
        {
            $firstname[]=$v['_source']['firstname'];
        }

}