<?php
    $user = "schooluser";
    $pass = "Schooluser18!";
    
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=easytiger_patio', $user, $pass);
    } catch (PDOException $e) {
        print("Error!: " . $e->getMessage() . "<br/>");
        die();
    }

    $bd = $_REQUEST["bandid"];
    $bn = $_REQUEST["band_name"];
    $g = $_REQUEST["genre"];
    $h = $_REQUEST["herkomst"];
    $o = $_REQUEST["omschrijving"];

    $sql = "INSERT INTO band (idband, naam, genre, herkomst, omschrijving)
            VALUES ('$bd', '$bn', '$g', '$h', '$o')";

    if($result = $dbh -> query($sql)){
        echo("Insertion Successfully");
    }else{
        echo("Insertion Failed");
    };
?>