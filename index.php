<?php

declare(strict_types=1);

//use App\Core\Model;
use App\Controller\ItemsCarController;
require 'vendor/autoload.php';

ini_set('display_errors', 'On');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');



$controller = new ItemsCarController();
$controller->handleRequest();
//$model = new Model();
//$sql = "INSERT INTO `items_car` (`name` ,`color`,`type`) VALUES (:name, :color, :type)";
//
//$params = array(
//
//    ':name' => 'Bmw',
//    ':color' => 'black',
//    ':type' => 'car'
//);
//$model->query($sql, $params);
//$result = $model->primaryIndex();
//


//if ($result) {
//    if (is_numeric($result)) {
//        // update item
//
//        $id = $result;
//
//        $sql = "UPDATE items_car SET items_car.status_id = :status_id, items_car.updated = :updated WHERE items_car.id = :id";
//
//        $params = array(
//            ':id'=>$id,
////            ':id' => $result,
//            ':status_id' => 1,
//            ':updated' => date('Y-m-d H:i:s')
//        );
//
//        $model->query($sql, $params);
//
//        $result = $model->error ?? true;
//
//        if ($result) {
//            if (is_bool($result)) {
//                // select items
//
//                $sql = "SELECT items_car.* FROM items_car WHERE items_car.status_id = :status_id";
//
//                $params = array(
//                    ':status_id' => 1
//                );
//
//                $model->query($sql, $params);
//
//                $result = $model->records();
//
//                if ($result) {
//                    if (is_array($result)) {
//                        // select item
//
//                        $sql = "SELECT items_car.* FROM items_car WHERE items_car.id = :id LIMIT 1";
//
//                        $params = array(
////                            ':id' => 1
//                            ':id'=>$id
//                        );
//
//                        $model->query($sql, $params);
//
//                        $result = $model->record();
//
//
//                        if ($result) {
//                            if (is_object($result)) {
//                                // delete item
//                                print_r($result);
//
////                                $sql = "DELETE FROM items_car WHERE items_car.id = :id";
////
////                                $params = array(
////                                    ':id' => $id
////                                );
////
////                                $model->query($sql, $params);
////
////                                $result = $model->error ?? true;
//
//                                if ($result) {
//                                    if (is_bool($result)) {
//                                        print_r($result);
//                                    } else {
//                                        print_r($result);
//                                    }
//                                }
//                            }
//                        } else {
//                            print_r($result);
//                        }
//                    }
//                } else {
//                    print_r($result);
//                }
//            } else {
//                print_r($result);
//            }
//        }
//    } else {
//        print_r($result);
//    }
//}
