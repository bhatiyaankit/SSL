<?php
$firstteam=$_POST['firstteam'];
$secondteam=$_POST['secondteam'];
$A_team_points=$_POST['p1'];
$B_team_points=$_POST['p2'];


$query="INSERT INTO `volleyball`(`FIRST TEAM`, `SECOND TEAM`, `P1`, `P2`) VALUES ('$firstteam','$secondteam','$A_team_points','$B_team_points')";
$dns="mysql:host=localhost;dbname=sports";
$username="root";
$password="mysql";


    $db= new PDO($dns,$username,$password);
    $statement=$db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
?>