<!doctype html>
<html>
    
    <head>
        <tilte> DATABASE CONNECTION</tilte>
    </head>
    <body>
        
        <?php
        $dns="mysql:host=localhost;dbname=schooldb";
        $username="root";
        $password="mysql";
        
        try
        {
            $db=new PDO($dns,$username,$password);
            echo "success";
        }
        catch(Exception $e)
        {
            $error_message=$e->getMessage();
            echo "<p>error message : $error_message</p>";
        }
            
        
        ?>
    </body>
</html>