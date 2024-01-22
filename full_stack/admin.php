<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body{
            background:url('background.gif');
            background-size:100%;
            background-repeat: repeat-y;
            background-attachment: fixed;
            height:99%;
            width:99%;
        }
        h1, p, h3{
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
        form{
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="agenda.php">Agenda</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a class="active" href="admin.php">Admin</a></li><br>
    </ul>   
    <h1>Admin Pagina</h1>

    <h3>Voeg een band toe</h3>

    <form action="admin_bf.php" method="POST">
        bandID: <input type="number" name="bandid"><br>
        Band Name: <input type="text" name="band_name"><br>
        Genre: <input type="text" name="genre"><br>
        Herkomst: <input type="text" name="herkomst"><br>
        Omschrijving: <input type="text" name="omschrijving"><br><br>
        <input type="submit"><br>
    </form>

    <h3>Voeg een muziekavond toe</h3>

    <form action="admin_mf.php" method="POST">
        muziekavondID: <input type="number" name="muziekavondid"><br>
        Datum: <input type="date" name="datum"><br>
        Aanvangstijd: <input type="time" name="aanvangstijd"><br>
        Entreeprijs: <input type="text" name="entreeprijs"><br>
        Drankomzet: <input type="text" name="drankomzet"><br><br>
        <input type="submit">
    </form>

    <h3>Tussen band & muziekavond</h3>

    <form action="admin_tbm.php" method="POST">
        MuziekavondID: <input type="number" name="muziekavond_id"><br>
        BandID: <input type="number" name="bandid"><br>
        Hoofdact: <input type="checkbox" name="hoofdact"><br>
        Aantal Sets: <input type="text" name="aantal_sets"><br>
        Duurtijd Sets: <input type="text" name="duurtijd_sets"><br><br>
        <input type="submit">
    </form>
</body>
</html>
<?php

?>