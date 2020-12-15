<!doctype html>
<html>
<head>
    <style type="text/css">
    .box
    {
        border-style: solid;
        height: 20%;
        width: 20%;
        text-align: center;
    }
</style>
    </head>
<body>
    <h3>volleyball DAY 1 (19-12-2020)</h3>
<hr>
<div>
    
    <?php
    $query="SELECT * FROM `volleyball`;";
     $dns="mysql:host=localhost;dbname=sports";
     $username="root";
      $password="mysql";

    $db= new PDO($dns,$username,$password);
       $statements=$db->prepare($query);
  $statements->execute();

 
    while($volleyball = $statements->fetch())
        
{       echo "<table border='2px' cell spacing='2px' cell padding='2px'  width='50%' text-align='center'><tr>";
     echo   "<td> MATCH :</td></tr><br>";
   echo "<tr><td>IIT ".$volleyball['FIRST TEAM']. " VS " .$volleyball['SECOND TEAM']."</td></tr><br>";
    echo "<tr><td>FINAL SCORE : ".$volleyball['P1']." - ".$volleyball['P2']."</td></tr></table><br>";
        
  
}
    $statements->closeCursor();
?>
    
    </div>
    </body></html>