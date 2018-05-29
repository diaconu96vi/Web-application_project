<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/6/2018
 * Time: 8:29 PM
 */

class Connection{
    public static function connectDB($config){

        try {

            return new PDO(
                $config['host'].";dbname=".$config['dbname'],
                $config['user'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }
    }
}