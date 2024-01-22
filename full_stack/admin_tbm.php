<?php
    $user = "schooluser";
    $pass = "Schooluser18!";
    
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=easytiger_patio', $user, $pass);
    } catch (PDOException $e) {
        print("Error!: " . $e->getMessage() . "<br/>");
        die();
    }

    $mai = $_REQUEST["muziekavond_id"];
    $bi = $_REQUEST["bandid"];
    $ha = $_REQUEST["hoofdact"];
    $as = $_REQUEST["aantal_sets"];
    $dts = $_REQUEST["duurtijd_sets"];

    if($ha == "on"){
        $ha_sa = 1;
    }else{
        $ha_sa = 0;
    }

    $sql = "INSERT INTO muziekavond_has_band (muziekavond_idmuziekavond, band_idband, hoofdact, aantal_sets, duurtijd_sets)
            VALUES ('$mai', '$bi', '$ha_sa', '$as', '$dts')";

    if($result = $dbh -> query($sql)){
        echo("Insertion Successful");
    }else{
        echo("Insertion Failed");
    };
?>