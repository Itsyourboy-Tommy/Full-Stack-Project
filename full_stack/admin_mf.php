<?php
    $user = "schooluser";
    $pass = "Schooluser18!";
    
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=easytiger_patio', $user, $pass);
    } catch (PDOException $e) {
        print("Error!: " . $e->getMessage() . "<br/>");
        die();
    }

    $bd = $_REQUEST["muziekavondid"];
    $bn = $_REQUEST["datum"];
    $g = $_REQUEST["aanvangstijd"];
    $h = $_REQUEST["entreeprijs"];
    $o = $_REQUEST["drankomzet"];

    $sql = "INSERT INTO muziekavond (idmuziekavond, datum, aanvangstijd, entreeprijs, drankomzet)
            VALUES ('$bd', '$bn', '$g', '$h', '$o')";

    if($result = $dbh -> query($sql)){
        echo("Insertion Successfully");
    }else{
        echo("Insertion Failed");
    };
?>