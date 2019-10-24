<?php
    function connect_to_db() {
        $servername = "mysql";
        $username = "samaranin";
        $password = "meganium2912";
        $dbname = "samaranin-dev";

        try {
            $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
?>