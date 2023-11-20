<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
    </style>
</head>
<body>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="agenda.php">Agenda</a></li>
        <li><a href="contact.php">Contact</a>
        <li><a href="admin.php">Admin</a></li><br>
    </ul>      
    <h1>Home Pagina</h1>

    <p>testing the test to see if the testing works on the test</p>
</body>
</html>
<?php


?>