﻿<?php
session_start();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Đăng nhập</title>
        <link rel="stylesheet" type="text/css" href="css/top_header.css"/>
        <link rel="stylesheet" type="text/css" href="css/content.css"/>
        <link rel="stylesheet" type="text/css" href="css/footer.css"/>
        <link rel="stylesheet" type="text/css" href="css/login_content.css"/>
		<style type="text/css">
			a:link{
				text-decoration:none;
				color:#05b2e9;
			}
			a:visited {
				color: #05b2e9;
			}
			a:hover {
				color: #3C3;
			}
			a:active {			
				color: #F00;
			}
		</style>
</head>

<body>
	<div class="top">
    	<center><a href="index.php"><img src="images/File-1414989219.png" alt="" width="1140" height="65" /></a></center>
	</div>
    <!--------- START HEADER----------------->
	<div class="header">
        <div id="homepage_icon"><a href="index.php"><abbr title="Home Page"><img src="images/Homepage_icon.jpg" width="80" height="97"/></abbr></a></div>
	  	<div class="search_area">
            <form action="search_result.php" method="post">
            	<div class="search_div"><input type="text" name="search" class="search"/></div>
            	<input name="submit" type="submit" class="button" value="TÌM" />
            </form>
                <div class="title"><a href="search.php"><img src="images/title.png" width="261" height="35" alt="muasachonline.vn" /></a></div>
        </div>
		<div class="login_area">
           	<div class="login_icon"><img src="images/login_icon.png" width="45" height="41" align="middle" /></div>
			<div class="login_text1"><a href="login.php">Đăng nhập</a> | <a href="registered.php">Đăng ký</a></div>     
            <div class="hotline"><img src="images/phone_icon.jpg" width="15" height="15" /><span class="hotline_text">Hotline:</span> <span class="phone_number">1900-6035</span><span style="font-size:12px">(8-21h kể cả T7,CN)</span></div>
        </div>
    </div>
    <br />
	<hr />
    <!--------- END HEADER ------------------>
    <div class="main">
    	<!----- START CONTENT --------->
        <div class="start">
            <span><a href="index.php">Trang chủ</a> / <strong>Mua sách trực tuyến Giảm Giá Hơn 20% - Nhà Sách HEDSPI</strong>
        </div>
		<div class="logout">
		<br><br><br><br><br><br>
		<legend class="info_titlebox3">Bạn đã đăng xuất thành công. <a href="index.php">Click here</a> để quay lại trang chủ</legend>
		</div>
	  <!------ END CONTENT ---------->
	</div>
	<!--------------- FOOTER ------------------>
	<div class="footer">
       	<div class="leter_icon"><img src="images/Homepage/icon_sign.png" width="25" height="25" /></div>
		<span id="footer_title">Đăng Kí Nhận Bản Tin Hedspi - <span style="font-weight:normal">Nhiều Tiện Lợi và Ưu Đãi đang chờ bạn!</span></span>
        <div class="hand_icon"><img src="images/Homepage/hand-right-128.png" width="40" height="40" /></div>
        <form>
            <div class="input"><input type="text" name="input" class="input_class"/></div>
            <input name="button" type="button" class="button_class" value="Đăng Ký - Nhận Tiện Ích" />
        </form>
            <div class="clr"></div>
            <p>© Đại Học Bách Khoa Hà Nội<br /><br />Lớp Thực Hành Cơ Sở Dữ Liệu - Việt Nhật B- K57<br />Thành viên: Ngô Văn Thịnh, Trần Bảo Huy, Đặng Mỹ Linh, Đồng Xuân Mạnh</p>
    </div>
	
</body>
</html>
