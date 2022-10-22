<?php


class Dbh 
{
   public string $hostname="localhost";
   public string $username="root";
   public string $password="Bello@11";
   public string $dbname="zuriphp";

   protected function connect(){
    return mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
   }
}
