<?php
declare(strict_types=1);

use App\Core\Model;

require 'vendor/autoload.php';

ini_set('display_errors','On');

$model = new Model();
//create
$sql='INSERT INTO "items_car" ("name" ,"color","type") VALUES (:name ,:color,:type)';

  $params=array(
      'name'=>'Bmw',
      'color'=>'black',
      'type'=>'car'
  );

$model->query($sql,$params);
$result = $model->primaryIndex();
print_r($result);
//insert
//$params=array(
//    "status_id"=>"1"
//);
//  $sql='SELECT items_car FROM item WHERE item.status_id=:status_id';
//
//
//  $model->query($sql,$params);
//  $result=$model->records();
//  print_r($result);
;
