<?php
//establish connection to database

class Dbh
{
    protected function connect()
    {
        try {
            $username = "root";
            $password = "Brainiac5";
            $dbh = new PDO('mysql:host=localhost;dbname=reservation_app', $username, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }
}
