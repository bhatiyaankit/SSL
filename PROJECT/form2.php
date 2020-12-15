<?php

$PlayerName = $_POST['playername'];
$password1=$_POST['password'];


$query="SELECT * FROM participants;";
$dns="mysql:host=localhost;dbname=schooldb";
$username="root";
$password="mysql";
$db= new PDO($dns,$username,$password);
    $statement=$db->prepare($query);
    $statement->execute();
$z=0;
while($participants =$statement->fetch())
{
   // echo $participants['PlayerName']."<br>".$participants['Password']."<br>";
    $x=$participants['PlayerName'];
     $y=$participants['Password'];  
    
    if(($x==$PlayerName) && ($y==$password1)) 
    { $z=1;
     break;
     
    }
    
}
if($z==1)
    echo "LOGGED IN";
else
    echo "please sign up";