<?php

class db
{
  

    public function conexionDB()
    {
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="id11762251_gtacars";
        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }
}
