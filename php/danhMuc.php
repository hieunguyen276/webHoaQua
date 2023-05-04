
<?php
    include "connect.php" ;
    //Thêm dữ liệu
    $first = "" ;
    $last = "" ;
    $phone = "" ;
    $email = "" ;
    $meassage = "" ;
    if ( $_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if ( isset($_POST["sub"]))
        {
            if (isset($_POST["name"]))
                $name = $_POST['name'] ;
            if ( isset($_POST["noname"]))
                $noname = $_POST['noname'] ;
            if ( isset($_POST["chaCon"]))
                $chaCon= $_POST['chaCon'] ;

            $con = "insert into dbl_danhMuc(name_danhMuc,TenKhongDau,parent_id) values('$name','$noname','$chaCon')";
            if ( mysqli_query($link,$con) )
            {
                echo "Them du lieu thanh cong";
            
            }                  
            else 
                echo "Them du lieu that bai".mysqli_error($link);  
        }
    }
    //Xóa dữ liệu
    if( isset($_GET["task"]) && $_GET["task"] == "delete")
    {
        $id = $_GET['id_danhMuc'] ;
        $delete = "delete from dbl_danhMuc where id_danhMuc = $id " ;
        if ( mysqli_query($link, $delete))
        {
            echo "Xoa dữ liệu thành công" ;
            header ("Location: danhMuc.php") ;
        }
        else   
            echo "Xóa dữ liệu thất bại".mysqli_error($link);  
    }

?>
<html>
    <head>
        <title>Trang quan tri user</title>
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
        <div class = "admin">
            <h2>Quản lí thông tin liên hệ</h2>
            <table>
                <tr>
                    <th>id_danhMuc</th>
                    <th>name_danhMuc</th>
                    <th>TenKhongDau</th>
                    <th>parent_id</th>
                    <th>Ngày tạo</th>
                    <th>Hành động</th>
                </tr>
                <?php
                    $select = "select * from dbl_danhMuc" ;
                    $show = mysqli_query($link , $select) ;
                    while ( $row = mysqli_fetch_assoc($show) )
                    {
                        echo "<tr>"; 
                        echo "<td>".$row["id_danhMuc"]."</td>";
                        echo "<td>".$row["name_danhMuc"]."</td>";
                        echo "<td>".$row["TenKhongDau"]."</td>";
                        echo "<td>".$row["parent_id"]."</td>";
                        echo "<td>".date('d/m/Y - H:i:s')."</td>";

                        echo "<td>".
                        "<a href=' danhMuc.php?id_danhMuc=".$row["id_danhMuc"]."&task=delete '>Xoá</a>".                  
                        "</td>";   
                         echo "</tr>" ;  
                    }
                ?>
            </table>
            <h2>Them dữ liệu</h2>
            <form action = "danhMuc.php" method = "POST">
                <label></br> Tên danh muc :</label><input type = "text" name = "name">
                <label></br> Tên không dấu:</label><input type = "text" name = "noname">
                <label></br> Quan hê:</label><input type = "text" name = "chaCon">
              
                <input type = "submit" name = "sub">
            </form>
        </div>
       
    </body>
</html>
    