<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <link rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">


    
</head>
<body>
<section class="header"> 
        <a href="home.php" class="logo">TRANG CHỦ</a>
        <nav class="navbar">
        <a href="Home.php
            ">NHÀ</a>
            <a href="About.php
            ">TÔI</a>
            <a href="Package.php
            ">TÂM SỰ</a>
            <a href="Book.php
            ">ĐẶT LỊCH</a>


        </nav>
        <div id="menu-btn" class="fas fa-bars">  </div>
    </section>
    <div class="heading" style="background-image: url(images/bo.jpg)">
    <h1>
    ĐẶT LỊCH 
    </h1></div>
    <section class="booking">
        <h1 class="heading-title">ĐẶT LỊCH NGAY </h1>
        <form action="Book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>
                        name :
                    </span>
                    <input type="text" placeholder="Nhap ten cua ban" name="name">

                </div>
                <div class="inputBox">
                    <span>
                        email :
                    </span>
                    <input type="email" placeholder="Nhap email cua ban " name="email">
                    

                </div>
                <div class="inputBox">
                    <span>
                        phone :
                    </span>
                    <input type="number" placeholder="Nhap sdt cua ban" name="phone">
                    

                </div>
                <div class="inputBox">
                    <span>
                        dia chi :
                    </span>
                    <input type="text" placeholder="Nhap dc cua ban" name="address">

                    

                </div>
                <div class="inputBox">
                    <span>
                      where to  :
                    </span>
                    <input type="text" placeholder="Nhap noi muon den " name="location">
                    

                </div>
                <div class="inputBox">
                    <span>
                        how many :
                    </span>
                    <input type="number" placeholder="Nhap so nguoi " name="guests">

                    

                </div>
                <div class="inputBox">
                    <span>
                       arrivals:
                    </span>
                    <input type="date"name="arrivals">

                    

                </div>
                <div class="inputBox">
                    <span>
                       leaving :
                    </span>
                    <input type="date"name="leaving">

                    

                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

    <section class="footer">
        <div class="box-container">
        <div class="box">
            <h3>TRUY CẬP NHANH</h3>
            <a href="Home.php
            "><i class="fas fa-angle-right"></i>NHÀ</a>
            <a href="About.php
            "><i class=" fas fa-angle-right"></i> TÔI </a>
            <a href="Package.php
            "><i class=" fas fa-angle-right"></i> TÂM SỰ</a>
            <a href="Book.php
            "><i class=" fas fa-angle-right"></i> ĐẶT LỊCH</a>

        </div>
        <div class="box">
            <h3>THẮC MẮC</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Thắc mắc thì hỏi</a>
            <a href="#"><i class="fas fa-angle-right"></i> Chúng tôi là ai  </a>
            <a href="#"><i class="fas fa-angle-right"></i>  Chất lượng </a>
            <a href="#"><i class="fas fa-angle-right"></i> Đội ngũ </a>

        </div>
        <div class="box">
            <h3>LIÊN HỆ</h3>
            <a href="#"><i class="fas fa-phone"></i> 0346792097</a>
            <a href="#"><i class="fas fa-phone"></i> 0346792097</a>
            <a href="#"><i class="fas fa-envelope"></i> @gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> viet nam ho chi minh </a>

            
            

          

        </div>
        <div class="box">
            <h3>THEO DÕI  </h3>
            <a href="#"><i class="fab fa-facebook"></i> facbook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
       
        </div>
    </div>
    <div class="credit">SỐNG KHÔNG ĐI   |  ĐỜI KHÔNG NỂ
    </div>
    </div>
    </section>
 






<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>