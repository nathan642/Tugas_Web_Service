<?php


class PDOUtil
{
    public static function createConnection(){
        $link = new PDO("mysql:host=localhost; dbname=siswa","root","");
        $link->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
        $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $link;
    }
    public static function createConnectionWithMySqli(){
        $connect= mysqli_connect("localhost","root","","siswa");
        $query1="SELECT * FROM nama";
        $result=mysqli_query($connect,$query1);
        return $result;
    }

    public static function closeConnection(PDO $link){
        if($link != null){
            $link= null;
        }
    }
}