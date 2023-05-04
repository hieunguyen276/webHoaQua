<?php
    include "connect.php" ;

?>
<!doctype html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
       //     if ( isset($_GET["task"]) && $_GET["task"] == "delete" )
            $id = $_GET['id'] ;
            $delete = "delete from gallery where id = $id " ;
            if ( mysqli_query($link, $delete))
            {
                echo "Xoa dữ liệu thành công" ;
                header ("Location: gallery.php") ;
            }
            else   
                echo "Xóa dữ liệu thất bại" ;
         ?>
    </body>
</html>