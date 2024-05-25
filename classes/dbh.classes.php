<?php

class Dbh{
    protected function connect()
    {
        try
        {
            $username = "root";
            $password = "masterofpuppets";
            $dbh = new PDO('mysql:localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        }
        catch(PDOException $e)
        {
            print "Erro:" . $e->getMessage(). "<br/>";
            die();
        }
    }
}