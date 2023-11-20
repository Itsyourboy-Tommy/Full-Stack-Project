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
        <li><a href="contact.php">Contact</a></li><br>
    </ul>   
    <h1>Agenda</h1>

    <p>Hier kun je de agenda van EasyTiger Patio:</p><br>

<div style="overflow-x: auto;">
    <table class="tabel">
        <tr>
            <th>Event Naam</th>
            <th>Band</th>
            <th>Genre</th>
            <th>Hoofdact of Supportact</th>
            <th>Aantal sets</th>
            <th>duurtijd sets</th>
            <th></th>
            <th >Entree Prijs</th>
        </tr>
        <?php
            $query = $dbh->prepare("select * from band");
            $result = $query->execute();
            $all = $query->fetchAll();
            foreach( $all as $row ) {
        echo("
        <tr>
            <td>" . $row["naam"] . "</td>
            <td>" . $row["genre"] . "</td>
            <td>" . $row["herkomst"] . "</td>
            <td>" . $row["omschrijving"] . "</td>");
            }
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
            <td>" . $row["aantal sets"] . "</td>
            <td>" . $row["duurtijd sets"] . "</td>"
        );
            }
            $query = $dbh->prepare("select * from muziekavond");
            $result = $query->execute();
            $all = $query->fetchAll();
            foreach( $all as $row ) {
        echo("
            <td style='text-align: center'>" . $row["entreeprijs"] . "</td>
        </tr>");
        }?>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
    </table>
</div>
</body>
</html>