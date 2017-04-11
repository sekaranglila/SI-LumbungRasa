<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DBConnector{
    private static $servername = "localhost:3307";
    private static $connection;
    
    public static function connect($role, $password){
        //stub, semua role bakal connect ke db sebagai root dgn password ""
        DBConnector::$connection = new mysqli(DBConnector::$servername, "root", "", "LumbungRasa");
        if(DBConnector::$connection->connect_error){
            die("Connection failed: ".DBConnector::$connection->connect_error);
        }
        return DBConnector::$connection;
        
    }
    
}
