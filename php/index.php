<?php
     $link = mysqli_connect("localhost","root","","store") or die("Lỗi kết nối!".mysqli_error($link)) ;
?>
<!doctype html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8"> 
        <title>Organic Store</title>  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" href = "../CSS/Style.css">
        <link rel = "shortcut icon" href="../images/icon.ico">
    </head>
    <body>
        <div class = "content"> 
            <!--MENU-->
            <div class = "menu-slide"> 
                <div class = menu>
                    <div class = "row">

                        <div class = "col-5">
                            <div class = "row logo">
                                <div id = "logo-left">
                                    <h1 >OS</h1>
                                </div>
                                <div class = "logo_right">
                                    <h6 >Organic</h6>
                                    <h6>Store</h6>
                                </div>
                            </div>
                        </div>
                        <div class = "col-7">
                            <div class = "row">
                                <nav class ="nav">    
                                    <ul class = "nav-menu">               
                                        <li ><a class = "nav_head" href ="#" title ="Trang Chủ"><b> Trang Chủ </b></a></li>
                                    
                                        <li ><a class = "nav_head" href ="#about" title ="Giới Thiệu"><b> Giới Thiệu </b></a></li>
                                
                                        <li ><a class = "nav_head" href ="#services" title ="Dịch vụ"><b> Dịch vụ </b></a></li>
                                
                                        <li ><a class = "nav_head" href ="#gallery" title ="Bộ sưu tập"><b> Bộ sưu tập</b></a></li>
                                    
                                        <li ><a class = "nav_head" href ="#blog" title ="Tin tức"><b> Blog </b></a></li>
                                    
                                        <li ><a class = "nav_head" href ="#get" title ="Liên Hệ"><b> Liên Hệ </b></a></li>
                                       
                                     </ul> 
                                </nav>
                            </div>
                        </div>
                    </div>
                <!---->    
                </div>
                <div class = "menu-content">
                    <div class = "lk-icon">
                        <a href="https://www.facebook.com/profile.php?id=100025687897347" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/?hl=vi" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-rss"></a>    
                    </div>
                    <div class = "content">
                        <h6 id = "Healthy">Healthy Food</h6>
                        <span id = "Store">Organic Store</span>
                    </div>
                    <div class = "text">
                        <p>Hiện nay, các loại trái hữu cơ cũng như thực phẩm hữu cơ đang ngày một phổ biến và được sử dụng rộng rãi hơn. Đây là các sản phẩm nói không với chất hóa học, 
						từ khâu trồng trọt đến khâu thành phẩm và bảo quản,….được người tiêu dùng ưa chuộng những năm gần đây.</p>
                    </div>
                </div>    
            </div>
        <!-- About us -->
            <div id = "about">
                <div class = "about-head">
                    <span> Giới Thiệu</span>
                    <p> Luôn đem lại cho khách hàng những sản phẩm tốt nhất</p>
                </div>
                <div class = "row"> 
                    <div class = "col-5">
                        <div class = "about-img1">
                            <img class = "ab" src = "../images/About1.jpg">
                        </div>
                        <div class = "about-img2">
                            <img class = "ab" src = "../images/About2.jpg">
                        </div>
                    </div>
                    <div class = "col-7">
                        <div>
                            <h2>Thức ăn của chúng ta phải là thuốc của chúng ta, Các chất hữu cơ trong y học của chúng ta phải là thức ăn của chúng ta vì sức khỏe của bạn</h2>
                        </div>
                        <div >
                            <p>Mặc dù chưa có kết luận chính thức nào về việc sử dụng thực phẩm hữu cơ có lợi hơn thực phẩm thông thường 
							ở ngưỡng an toàn. Tuy nhiên có khá nhiều công trình nghiên cứu chứng minh rằng, hàm lượng dinh dưỡng trong thực phẩm hữu cơ thường cao hơn.

                        Cụ thể, hàm lượng chất chống oxy hóa trong thực phẩm hữu cơ cao hơn giúp bảo vệ cơ thể khỏi các tế bào gây bệnh, 
						nhất là ung thư. Các nghiên cứu cũng chỉ ra rằng, việc sử dụng thực phẩm hữu cơ có khả năng làm tăng hệ miễn dịch ở các vật nuôi.

                       Các nghiên cứu quan sát cho thấy có mối liên quan giữa thực phẩm hữu cơ với việc giảm nguy cơ dị ứng và bệnh chàm ở trẻ em cũng như trẻ sơ sinh.
                         </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Store -->
            <div class = "ab-store">
                <div class = "row">
                    <div class = "col-6 ab-left">
                        <h2>Lưu Trữ Thông Tin</h2>
                      
                        <p>Thực phẩm hữu cơ là thực phẩm được sản xuất theo phương pháp tuân thủ các tiêu chuẩn của canh tác hữu cơ. 
						Các tiêu chuẩn khác nhau trên toàn thế giới, nhưng canh tác hữu cơ có các thực hành xoay vòng các nguồn lực, 
						thúc đẩy cân bằng sinh thái và bảo tồn đa dạng sinh học. Các tổ chức quy định các sản phẩm hữu cơ có thể hạn chế sử dụng 
						một số loại thuốc trừ sâu và phân bón trong các phương pháp canh tác được sử dụng để sản xuất các sản phẩm đó. 
						Thực phẩm hữu cơ thường không được chế biến bằng cách sử dụng chiếu xạ, dung môi công nghiệp hoặc phụ gia thực phẩm tổng hợp.</p>
                        <div class = "ab-button">
                            <a id = "text-button" href = "#blog">Đọc thêm</a>
                        </div>
                    </div>
                    <div class = "col-6 ab-right">
                        <img src = "../images/About3.jpg">
                    </div>
                </div>
            </div>
            <!-- Services -->
            <div id= "services">
                <div class = "services-head">
                    <span> Các Dịch Vụ Cung Cấp</span>
                    <p> Không đơn thuần là phương pháp nuôi trồng thực phẩm nói không với hóa chất, thực phẩm hữu cơ còn 
					là một mô hình nông trại giúp cân bằng hệ sinh thái và bảo tồn sự đa dạng của sinh học. 
					Các sản phẩm muốn được công nhận là thực phẩm hữu cơ phải trải qua quá trình kiểm tra nghiêm ngặt.</p>
                </div>
                <div class = "sv-content">
                    <div class = "sv-images" row>
                        <div class = "sv-img1 sv-img ">
                            <img src = "../images/sv1.jpg"> 
                            <div class = "content">
                                <h5>Rau Sạch </h5>
                                <p>Những loại rau củ quả tươi mang lại lợi ích tuyệt vời cho sức khoẻ</p>
                            </div>  
                        </div>
                        <div class = "sv-img2 sv-img "  >
                            <img src = "../images/sv2.jpg"> 
                            <div class = "content">
                                <h5>Trái cây</h5>
                                <p>Thực tế, thực phẩm hữu cơ an toàn, song một số thực phẩm chế biến vẫn có nguy cơ có hàm lượng calo, đường, muối, chất béo cao. 
								Do đó, nếu bạn đang có ý định giảm cân và nghĩ ăn bao nhiêu thực phẩm hữu cơ cũng được thì bạn đã nhầm.</p>
                            </div>
                        </div>
                        <div class = "sv-img3 sv-img " >
                            <img src = "../images/sv3.jpg"> 
                            <div class = "content">
                            <h5>Làm Vườn</h5>
                                <p>Các nghiên cứu đã chứng minh được mức độ nitrat trong thực phẩm hữu cơ thấp hơn 30% so với cây trồng thông thường.</p>
                            </div> 
                        </div>
                       
                    </div>
                    <div class = "sv-images">
                        <div class = "sv-img4 sv-img">
                            <img src = "../images/sv4.jpg"> 
                            <div class = "content">
                                <h5>Ngũ Cốc</h5>
                                <p>Cụ thể, sữa và các sản phẩm từ sữa hữu cơ chứa axit béo omega - 3 cao hơn, 
								lượng sắt, vitamin E và một số carotenoids cao hơn tốt cho sức khỏe, giảm nguy cơ mắc các bệnh về tim mạch.</p>
                            </div>  
                        </div>
                        <div class = "sv-img5 sv-img">
                            <img src = "../images/sv5.jpg"> 
                            <div class = "content">
                                <h5>Hữu Cơ Organic</h5>
                                <p>Lựa chọn rau hữu cơ organic cho mỗi bữa ăn gia đình bạn</p>
                            </div>
                        </div> 			
						 <div class = "sv-img6 sv-img">
                            <img src = "../images/sv6.jpg"> 
                            <div class = "content">
                                <h5>Công Nghệ Trồng Rau Sạch</h5>
                                <p>Nông trại hữu cơ không đơn thuần chỉ là một phương pháp nuôi trồng cây cối và vật nuôi không có sự can thiệp của hóa chất</p>
                            </div> 
                        </div>
						
                </div>
            </div>
            <!-- Services-footer -->
            <div class = "sv-footer"> 
                <div class = "row">
                    <div class = "col-7">
                        <img src="../images/sv-f1.jpg">
                    </div>
                    <div class = "col-5">
                    <?php
                        $sql = "select * from dichvu" ;
                        $show = mysqli_query($link,$sql) ;
                        while ( $row = mysqli_fetch_assoc($show))
                        {        
                       echo "<div class = 'row'>" ;
                            echo '<div class = "right-text">' ; 
                                echo '<h6>'.$row["giaCa"].'vnđ/kg</h6>' ;
                                echo '<h5>'.$row["name"].'</h6>' ;
                                echo "<a href = '#get'>Mua Ngay</a>";
                            echo "</div> " ;
                            echo '<div class ="right-img">' ;
                                echo "<img src = '". $row['images']."' >"  ;
                            echo "</div> " ;
                        echo "</div> " ;
                           }
                        ?>
                           </div>
                        </div>
            </div>
        <!-- Thực Phẩm Sạch    -->

        <div id = "gallery">
            <div class = "gallery-head">
                <span> Thực phẩm sạch</span>
                <p>Việc cân bằng dinh dưỡng cho cơ thể mỗi người là điều thiết yếu, đặc biệt đối với rau – củ – quả tươi là điều không thể bỏ qua. Vì những thực phẩm chúng ta ăn hàng ngày không chỉ ảnh hưởng đến sức khỏe thể chất, mà còn tác động đến trạng thái lành mạnh về cảm xúc, tinh thần. </p>
            </div>
            <div class = "ga-content" >
            <?php
                        $sql_ga= "select * from gallery" ;
                        $show_ga = mysqli_query($link,$sql_ga) ;
                        echo '<div class = "row"> ' ;
                        while ( $row_ga = mysqli_fetch_assoc($show_ga))
                        {
                            echo '<div class ="col-4">' ;
                                echo "<img src = '". $row_ga['images']."' >"  ;
                            echo "</div> " ;
                        }   
                    echo '</div>' ;
                ?>
            </div>
        </div>
        <!-- Blog -->
        <div id = "blog">
            <div class = "blog-head">
                <span> Tin tức</span>
                <p> Rau là món ăn bổ sung chất xơ hiệu quả, là nguyên liệu nấu ăn không thể thiếu đối với bữa cơm truyền thống của người Việt Nam. Món ăn từ rau cung cấp đầy đủ chất dinh dưỡng và thơm ngon. Mong rằng bài viết về rau củ quả này sẽ là trợ thủ đắc lực cho công việc nội trợ</p>
            </div>
            <div class = "row">
                <div class = "col-4" >
                    <div class ="bl">
                        <div>
                            <img src = "../images/blog1.jpg"> 
                        </div>
                        <div class = "jul">JUL 5</div>
                        <div class = "bl-left">
                            <a href = "#"><h3>Lợi ích sức khỏe của thực phẩm sạch</h3></a>
                            <p>Rau đóng vai trò quan trọng trong việc bổ sung dinh dưỡng của con người, do rau ít chất béo và carbohydrate, nhưng dồi dào vitamin, khoáng chất và chất xơ</p>
                            <div class ="bl-list">
                                <ul>
                                    <a href = "#"><li>27/11/2020</li></a>
                                </ul>
                            </div>
                        </div>   
                    </div>  
                </div>
                <div class = "col-4">
                    <div class ="bl">
                        <div>
                            <img src = "../images/blog2.jpg"> 
                        </div>
                        <div class = "jul">JUL 5</div>
                        <div class = "bl-left">
                            <a href = "#"><h3>Lợi ích sức khỏe của thực phẩm sạch</h3></a>
                            <p>Ngũ cốc và các loại hạt khô cũng là một lựa chọn thay thế cho rau tươi bổ sung nhiều chất dinh dưỡng và năng lượng cần thiết</p>
                            <div class ="bl-list">
                                <ul>
                                    <a href = "#"><li>27/11/2020</li></a>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class = "col-4">
                    <div class ="bl">
                        <div>
                            <img src = "../images/blog3.jpg"> 
                        </div>
                        <div class = "jul">JUL 5</div>
                        <div class = "bl-left">
                            <a href = "#"><h3>Lợi ích sức khỏe của thực phẩm sạch</h3></a>
                            <p>Củ quả hữu cơ  có được sự an toàn tuyệt đối cùng với thành phần dinh dưỡng đảm bảo</p>
                            <div class ="bl-list">
                                <ul>
                                    <a href = "#"><li>27/11/2020</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Blog-Map -->
        <div class="row" style="background:#003399;padding:8px 8px 5px;">
            <div class="col-12">
            <iframe  style = "width : 100% ;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0160542692897!2d105.77146031744384!3d21.072021000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBN4buPIC0gxJDhu4thIGNo4bqldA!5e0!3m2!1svi!2s!4v1606867418994!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
            </div>
        </div>
        <!-- Get in touch -->
        <div id ="get">
            <div class = "get-head">
                <span> Liên Lạc </span>
                <p> Liên Hệ Với Chúng Tôi Khi Bạn Cần</p>
            </div>
            <div class ="get-content">
                <!-- <div class = "row"> -->
                <!--form -->
                    <form method = "POST" action = "user.php" name = "body_form">
                    <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="First name" id="first" name="first">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" id="last" name="last">
                          </div>
                        </div>
                        <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">
                            </div>
                            <div class="col">
                              <input type="email" class="form-control" placeholder="Email" id = "mail" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id = "meassage" name = "meassage" class="form-control" id="exampleFormControlTextarea1 meassage" rows="5"placeholder="Meassage"></textarea>
                        </div> 
                        <div class ="send">
                            <button type="submit" class="btn btn-primary form-control" id="sub" name="sub">Send</button> 
                        </div>             
                    </form>   
                
                <!-- </div> -->
                <div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class = "footer">
            <div class = "row">
                <div class ="col-4">
                    <h3>Địa Chỉ</h3>
                    <div>
                        <div>
                            <h6>Địa Chỉ</h6>
                            <p>Số 18 Phố Viên - phường Đức Thắng - quận Bắc Từ Liêm - Hà Nội</p>
                        </div>
                        <div>
                            <h6>Số ĐT</h6>
                            <p>0967488027
                            </p>
                        </div>
                        <div>
                            <h6>Email</h6>
                            <p>hieunguyenminh@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class ="col-4">
                    <h3>Twitter Us</h3>
                    <div>
                        <div>
                            <p class = "tw">sit amet consectetur adipiscing info@example.com</p>
                            <h6>Posted 3 days ago.</h6>
                        </div>
                        <div>
                            <p class = "tw">sit amet consectetur adipiscing info@example.com</p>
                            <h6>Posted 3 days ago.</h6>
                        </div>
                    </div>
                </div>
                <div class ="col-4">
                    <h3>Bản Tin</h3>
                    <div class = "new">
                        <form >
                            <div class="seach-mail">
                                <input class="form-control" placeholder="Your Email">
                            </div>
                            <div class = "mail">
                                <a href ="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                </svg>
                                </a>
                            </div>
                        </form>   
                        <div>
                            <p>Chúng tôi sẽ cung cấp đầy đủ thông tin yêu cầu của quý khách hàng</p>
                        </div>       
                    </div>         
                </div>
            </div>
            <div class = "bt_muiTen">
                <a href = "#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
                </svg></a>
            </div>
        </div>
        <!-- Footer-bottom -->
        <div class = "footer-bottom">
            <p>© 2020 Organic Store. All Rights Reserved | Design by <a href ="#">Nhom_5</a></p>
        </div>
        </div>
        <script src="../Java_Script/index.js"></script>
    </body>
</html>