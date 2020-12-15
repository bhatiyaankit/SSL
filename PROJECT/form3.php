<?php
$PlayerName = $_POST['playername'];
$password2=$_POST['password'];


$query="SELECT * FROM orgnizers;";
$dns="mysql:host=localhost;dbname=organizer";
$username="root";
$password="mysql";
$db= new PDO($dns,$username,$password);
    $statement=$db->prepare($query);
    $statement->execute();
$z=0;
while($orgnizers =$statement->fetch())
{
   // echo $participants['PlayerName']."<br>".$participants['Password']."<br>";
    $x=$orgnizers['NAME'];
     $y=$orgnizers['BRANCH'];  
    
    if(($x==$PlayerName) && ($y==$password2)) 
    { $z=1;
     break;
     
    }
    
}
if($z==1)
    echo "LOGGED IN AS A ORGANIZER";
else
    echo "please sign up";