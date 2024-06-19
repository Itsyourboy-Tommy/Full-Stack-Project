<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php
    $user = "schooluser";
    $pass = "Schooluser18!";
    
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=easytiger_patio', $user, $pass);
    } catch (PDOException $e) {
        print("Error!: " . $e->getMessage() . "<br/>");
        die();
    }
/*    $query = $dbh->prepare("select * from band");
    $result = $query->execute();
    $all = $query->fetchAll();*/
    ?>
    <style>
        body{
            background:url('background.gif');
            background-size:100%;
            background-repeat: repeat-y;
            background-attachment: fixed;
            height:99%;
            width:99%;
        }
        h1, p{
            text-align: center;
            color: white;
        }
        ul{
        list-style-type: none;
        overflow: hidden;
        margin: 0;
        padding: 0;
        background-color: #072541;
        }
        li{
        float: left;
        }
        li a{
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }        
        li a:hover{
            background-color: #526D82;
        }
        .active {
            background-color: #427D9D;
        }
        table{
            width: 100%;
        }
        #table, tr, th{
            border: 1px solid;
            color: white;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="agenda.php">Agenda</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="admin.php">Admin</a></li><br>
    </ul>   
    <h1>Agenda</h1>

    <p>Hier kun je de agenda van EasyTiger Patio:</p><br>

<div style="overflow-x: auto;">
    <table class="tabel">
        <tr>
            <th>Muziekavond</th>
            <th>Datum</th>
            <th>band</th>
            <th>genre</th>
            <th>herkomst</th>
            <th>omschrijving</th>
            <th>Hoofdact of Supportact</th>
            <th>aantalsets</th>
            <th>duurtijd sets</th>
            <th >Entree Prijs</th>
        </tr>
        <?php
        /*    $query = $dbh->prepare("select * from band");
            $result = $query->execute();
            $all = $query->fetchAll();
            foreach( $all as $row ) {
        echo("
        <tr>
            <td>" . $row["naam"] . "</td>
            <td>" . $row["genre"] . "</td>
            <td>" . $row["herkomst"] . "</td>
            <td>" . $row["omschrijving"] . "</td>");
            };
            $query = $dbh->prepare("select * from muziekavond_has_band");
            $result = $query->execute();
            $all = $query->fetchAll();
            foreach( $all as $row ) {
                if($row["hoofdact"] == "1"){
                    echo("
                    <td>" . "Hoofdact" . "</td>
                ");}else{
                    echo("
                    <td>" . "Supportact" . "</td>
                    ");}
                        echo("
            <td>" . $row["aantal_sets"] . "</td>
            <td>" . $row["duurtijd_sets"] . "</td>"
        );
            };
            $query = $dbh->prepare("select * from muziekavond");
            $result = $query->execute();
            $all = $query->fetchAll();
            foreach( $all as $row ) {
        echo("
            <td style='text-align: center'>" . $row["entreeprijs"] . "</td>
        </tr>");
        };*/
        
        $query = $dbh->prepare(
        "SELECT * FROM muziekavond 
        INNER JOIN muziekavond_has_band ON muziekavond.idmuziekavond = muziekavond_has_band.muziekavond_idmuziekavond
        INNER JOIN band ON muziekavond_has_band.band_idband = band.idband;");
        $result = $query->execute();
        $all = $query->fetchAll();

        $int = 1;

        foreach($all as $key => $value){
            $id_Muziekavond = $value["idmuziekavond"];
            if($value["hoofdact"] == 1){
                $ha_sa = "Hoofdact";
            }else{
                $ha_sa = "Supportact";
            };

/*            if($value["idmuziekavond"] == $int){
                echo("<tr>
                <td>" . $value["idmuziekavond"] . "</td>
                <td>" . $value["datum"] . "</td>");
                echo($int);
                ++$int;
            }else{
                echo("
                <td>  </td> 
                <td>  </td>");
            };*/

            if($key > 0){
            $prev = $all[$key - 1];
            if($value["datum"] !== $prev["datum"]){
                echo("<tr>
                <td>" . $value["idmuziekavond"] . "</td>
                <td>" . $value["datum"] . "</td>");
            }else{
                echo("
                <td>  </td> 
                <td>  </td>");
            }}else{
            echo("<tr>
            <td>" . $value["idmuziekavond"] . "</td>
            <td>" . $value["datum"] . "</td>");  
            };
            
/*            if($key > 0 && $value["datum"] == $prev["datum"]){
            echo("OLA");
        }else{
            echo("<tr>
            <td>" . $value["idmuziekavond"] . "</td>
            <td>" . $value["datum"] . "</td>");}*/
            echo("
            <td>" . $value["naam"] . "</td>
            <td>" . $value["genre"] . "</td>
            <td>" . $value["herkomst"] . "</td>
            <td>" . $value["omschrijving"] . "</td>
            <td>" . $ha_sa . "</td>
            <td>" . $value["aantal_sets"] . "</td>
            <td>" . $value["duurtijd_sets"] . "</td>
            <td>" . $value["entreeprijs"] . "</td>
            </tr>");};
        ?>
    </table>
</div>
</body>
</html>