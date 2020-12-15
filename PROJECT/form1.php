<?php

$PlayerName = $_POST['playername'];
$sports = $_POST['sports'];
$college = $_POST['college'];
$gender = $_POST['radio'];
$email = $_POST['emailid'];
$password=$_POST['password'];
$query="INSERT INTO `participants`(`PlayerName`, `sports`, `college`, `gender`, `email`,`Password`) VALUES ('$PlayerName','$sports','$college','$gender','$email','$password')";

$dns="mysql:host=localhost;dbname=schooldb";
$username="root";
$password="mysql";


    $db= new PDO($dns,$username,$password);
    $statement=$db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
?>
