<?php 
include "connect.php" ;
if( $_SERVER["REQUEST_METHOD"] == "POST")
    {
    if( isset($_GET["task"]) && $_GET["task"] == "update")
    {
        if ( isset($_POST["sub"]))
        {
            $id = $_GET["id"] ;
            $first = $_POST["first_up"] ;
            $last = $_POST["last_up"] ;
            $phone = $_POST["phone_up"] ;
            $email = $_POST["email_up"] ;
            
            

                $sql_update= "update  user set name = '$first' last = '$last' phone = '$phone' email = '$email' where id = '$id' ";
            
                if (mysqli_query($link, $sql_update))
                { 
                    echo "update du lieu thanh cong" ;
                   
                }
                else
                    echo "update du lieu that bai" ;
        }  
    }
    }
?>
<!doctype html>
<html>
    <head>
        <title> Update du lieu</title>
    </head>
    <body>
        <h2>update lại dữ liệu</h2>
        <form action = "update.php" method = "POST" >
            
                <input type = "text" name = "first_up">
                <input type = "text" name = "last_up">
                <input type = "text" name = "phone_up">
                <input type = "text" name = "email_up">
             
            </br><input type = "submit" name = "sub">
        </form>
    </body>
</html>