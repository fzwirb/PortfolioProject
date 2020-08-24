<?php 
    try {

        $myPDO = new PDO("pgsql:host=localhost;dbname=Github_Repo","postgres", "test");
        echo "yayayayayayay";

    }catch(PDOException $e){

        echo $e->getMessage();
    }


?>