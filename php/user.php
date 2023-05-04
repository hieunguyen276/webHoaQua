<?php
include("connect.php");
//Thêm dữ liệu
if ( $_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST["sub"])) {
        if (isset($_POST["first"]))
            $first = $_POST['first'] ;
        if ( isset($_POST["last"]))
            $last = $_POST['last'] ;
        if ( isset($_POST["phone"]))
            $phone = $_POST['phone'] ; 
        if ( isset($_POST["email"]))
            $email = $_POST['email'] ;
        if ( isset($_POST["meassage"]))
            $meassage = $_POST['meassage'] ;

        $con = "insert into user(first,last,phone,email,meassage) values('$first','$last','$phone','$email','$meassage')";
        if ( mysqli_query($link,$con) )
        {
            echo "Them du lieu thanh cong";
        
        }                  
        else 
            echo "Them du lieu that bai".mysqli_error($link);  
    }
}
//xoá dữ liệu
if( isset($_GET["task"]) && $_GET["task"] == "delete")
{
    $id = $_GET['id'] ;
    $delete = "delete from user where id = $id " ;
    if ( mysqli_query($link, $delete))
    {
        echo "Xoa dữ liệu thành công" ;   
    }
    else   
        echo "Xóa dữ liệu thất bại".mysqli_error($link);  
}
//sửa dữ liệu
if (isset($_POST["update"])) {
    $sql_delete = "update user set first = '" . $_POST["first"] . "',last = '" . $_POST["last"] . "',phone ='" . $_POST["phone"] . "',email ='" . $_POST["email"] . "',meassage ='" . $_POST["meassage"] . "'  where id = '" . $_POST["id"] . "'";
    if (mysqli_query($link, $sql_delete)) {
         echo "update dữ liệu thành công";
    } else {
        echo "sua dữ liệu thất bại";
    }
}
?>
<html>

<head>
    <title>Trang quản lý user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type = "text/css">
            .admin{
                margin : 0 auto ;
                width : 800px ;
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
<body style="background-color: violet;">
    <div class="admin">
        <h2 style="text-align:center;">Trang quản trị member</h2>
        <table class="table-striped" border = "1">
            <!--tạo tiêu đề của bảng-->
            <tr>
                <th>id</th>
                <th>First</th>
                <th>Last</th>
                <th>Phone</th>
                <th>Email</th>
                <th>meassage</th>
                <th>Hành động</th>
            </tr>
            <!--hiển thị dữ liệu của bảng-->
            <?php
            $sql_select = "select * from user";
            $result = mysqli_query($link, $sql_select);

            if (mysqli_num_rows($result) > 0) {
               
                while ($row = mysqli_fetch_assoc($result)) {
                    if (isset($_GET["task"]) && $_GET["task"] == "update") {
                        if (isset($_GET["id"]) && $_GET["id"] == $row["id"]) {
                            echo "<form action='user.php' method='post'><tr>";
                            echo "<td>" .$row["id"]. "</td>";
                            echo "<td><input type='text' name='first' value = '" . $row["first"] . "'></td>";
                            echo "<td><input type='text' name='last' value = '" . $row["last"] . "'></td>";
                            echo "<td><input type='text' name='phone' value = '" . $row["phone"] . "'></td>";
                            echo "<td><input type='text' name='email' value = '" . $row["phone"] . "'></td>";
                            echo "<td><input type='text' name='meassage' value = '" . $row["meassage"] . "'></td>";
                            echo "<td>";
                            echo "<input type='submit' class='btn btn-warning' name='update' value='update'>";
                            echo "<input type='hidden' class='btn btn-warning' name='id' value='" . $row["id"] . "'>";
                            echo "</td>";
                            echo "</tr></form>";
                        } else {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["first"] . "</td>";
                            echo "<td>" . $row["last"] . "</td>";
                            echo "<td>" . $row["phone"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["meassage"] . "</td>";
                            echo "<td>";
                            echo "<a href='user.php?task=update&id=" . $row["id"] . "' class='btn btn-warning'>Sửa</a>";
                            echo "<a href='user.php?id=" . $row["id"] . "&task=delete' class='btn btn-danger'>Xoá</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["first"] . "</td>";
                        echo "<td>" . $row["last"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["meassage"] . "</td>";
                        echo "<td>";
                        echo "<a href='user.php?task=update&id=" . $row["id"] . "' class='btn btn-warning'>Sửa</a>";
                        echo "<a href='user.php?id=" . $row["id"] . "&task=delete' class='btn btn-danger'>Xoá</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
            
                }
            } else {
                echo "Bảng không chứa dữ liệu";
            }
            ?>
        </table>
        <form action="user.php" method="POST" >
            <input type = "text" placeholder = "First" name = "first"></br>
            <input type = "text" placeholder = "Last" name = "last"></br>
            <input type = "text" placeholder = "Phone" name = "phone"></br>
            <input type = "text" placeholder = "Email" name = "email"></br>
            <input type = "text" placeholder = "Meassage" name = "meassage"></br>
            <input type="submit" name="sub" value="Thêm mới">
        </form>
    </div>
</body>

</html>