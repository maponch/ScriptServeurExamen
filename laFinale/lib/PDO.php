<?php
/**
 * @return void
 */
function connect()
{
    global $connect;
    try {
        $connect = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PSW);
        foreach ($connect->query('SELECT * from user') as $row) {
            print_r($row);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}