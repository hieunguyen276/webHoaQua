<?php
    include "connect.php" ;
    //Xóa dữ liệu
    if( isset($_GET["task"]) && $_GET["task"] == "delete")
    {
        $id = $_GET['id'] ;
        $delete = "delete from gallery where id = $id " ;
        if ( mysqli_query($link, $delete))
        {
            echo "Xoa dữ liệu thành công" ;
            header ("Location: gallery.php") ;
        }
        else   
            echo "Xóa dữ liệu thất bại" ;
    }
    //Thêm dữ liệu
    if( $_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ( isset($_POST["sub"]))
        {
            if ( isset($_POST["title"]))
            $name = $_POST["title"] ;
            $file_path =  "..image/" ;
            $path = $file_path.basename($_FILES["myFile"]["name"]) ;
            if ( move_uploaded_file( $_FILES["myFile"]["tmp_name"] , $path ))
            {
                echo "Upload thanh cong!" ;
                $sql_insert = "insert into gallery (name,images) values ('$name',' $path')" ;
            
                if (mysqli_query($link, $sql_insert))
                { 
                    echo "Them du lieu thanh cong" ;
                }
                else
                    echo "them du lieu that bai" ;
            }
            else
                echo "Upload thất bại!" ;
        }
    }
  
?>

<html>
    <head>
        <title >Trang quan tri danh muc</title>
        <style type = "text/css">
            .admin{
                margin : 0 auto ;
                width : 700px ;
            }
            h2{
                color : red ;
            }
            tr th{
                border : 1px solid yellow ;
                padding-right : 20px ;
            }
        </style>
    </head>
    <body>
        <!-- Xay dựng câu truy vấn  -->
     
        <?php
             
            $sql = "select * from gallery" ;
            $show = mysqli_query($link, $sql) ;
           
            
        ?>
        <div class = "admin">
            <h2>Trang quan li danh muc gallery</h2>
            <table>
                <tr>
                    <th>id_Ga</th>
                    <th>Name_Ga</th>
                    <th>images</th>
                    <th>Ngày tạo</th>
                    <th>Hành động</th>
                </tr>
            <?php
                while( $row = mysqli_fetch_assoc($show))
                {
                echo "<tr>"; 
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td><img style='width:150px;'src = '".$row["images"]."'></td>";
                    echo "<td>".date('d/m/Y - H:i:s')."</td>";

                    echo "<td>".
                    "<a href=' gallery.php?id=".$row["id"]."&task=delete '>Xoá</a>".
                    "<a href=' update.php?id=".$row["id"]."&task=update'> Sửa </a>".
                    "</td>";
      
                echo "</tr>" ;            
                }
                ?>
            </table> 

            <h2>Them dữ liệu</h2>
            <form action = "gallery.php" method = "POST" enctype = "multipart/form-data">
               <label></br> Name :</label><input type = "text" name = "title">
               <label></br>Images :</label> <input type = "file" name = "myFile">

                </br><input type = "submit" name = "sub">
            </form>
        </div>
    </body>
</html>