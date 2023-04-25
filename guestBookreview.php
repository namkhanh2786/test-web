<?php
    if(isset($_GET['btnSubmit']))
    {
        #code content will be update here
        $namepost = $_GET['namepost'];
        $emailpost = $_GET['emailpost'];
        $namebook = $_GET['namebook'];
        $nameauthor = $_GET['nameauthor'];
        $description = $_GET['description'];
        $bookcover = $_GET['bookcover'];
        $gerne = $_GET['gerne'];

        $to = "thpt.lequydon.nk.2022.2025@gmail.com";

        header("Location: guest.php");
        #notification
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUST/Review Sách</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/dist/js/alertify.js"></script>
    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
    /* Start https://www.cursors-4u.com */ 
    * {cursor: url(https://cur.cursors-4u.net/games/gam-14/gam1340.cur), auto !important;} 
    /* End https://www.cursors-4u.com */

    body
    {
        overflow-x: hidden;
    }

    nav 
    {
        background-color: rgba(255, 255, 255, 0.001);
        display: flex;
        justify-content: center;
    }
    
    ul
    {
        list-style-type: none;
    }

    li
    {
        display: inline-block;
        margin-right: 10px;
        transition: transform .5s;
    }

    li:hover
    {
        transform: scale(1.12);
    }
    
    a
    {
        color: crimson;
        font-weight: bold;
        transition: all 1s ease 0s;
    }

    a:hover
    {
        text-decoration: none;
        font-weight: bold;
        color: deepskyblue;
        transition: all 0.5s ease 0s; /* glow chậm lại */
        transform: scale(1.12);
    }

    .logotext
    {
        color:#68f322; 
        font-family: 'Helvetica';
        transition: all 1.5s ease 0s;
        font-weight: bold;
    }

    .logotext:hover
    {
        color: lightgreen;
        transition: all 0.5s ease 0s;
        font-weight: bold;
    }

    .logotext img
    {
        margin-left: 0px;
        margin-right: 2px;
    }

    footer
    {
        text-align: center;
        margin-top: 50px;
        background-color: #222237;
        color: aliceblue;
        padding-top: 50px;
        padding-bottom: 50px;
    }
</style>

<nav class="navbar fixed-top navbar-light navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="guest.php" target="">
            <h4 class="logotext"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/339645190_963296404841364_2948126206449050955_n.png?_nc_cat=104&ccb=1-7&_nc_sid=aee45a&_nc_ohc=Nw9l6opzTxcAX_tLBFy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQTmmmUO9pgH3ZEEBksYwruC2-mWKyWRHf1MS-BBibIkw&oe=64560D72" 
              width="50" height="50" class="d-inline-block align-content-center" alt="">TRUST</h4>
        </a>
        <ul>
            <li><a href="guestBookreview.php">REVIEW SÁCH</a></li>
            <li></li><li><li></li></li>
            <li><a href="guestBook.php">XEM REVIEW SÁCH</a></li>
        </ul>
    </div>
</nav>

<style>
    body
    {
        background: url('https://wallpapercave.com/wp/wp2763910.gif');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    form
    {
        font-family: 'Ubuntu', sans-serif;
    }

    .reviewForm
    {
        margin-top: 50px;
    }

    .reviewInp
    {
        position: relative;
        width: 250px;
        color: aliceblue;
    }

    .reviewInp input
    {
        width: 455%;
        background-color: rgba(255, 255, 255, 0.05);
        border: none;
        outline: none;
        box-shadow: none;
        letter-spacing: 0.1em;
        margin-bottom: 2px;
        color: aliceblue;
        border-radius: 3px;
        margin-bottom: 10px;
        font-family: 'Comfortaa', sans-serif;
    }

    .reviewInp span
    {
        position: absolute;
        left: 0;
        padding: 0 15px 5px;
        padding-bottom: 20px;
        color: rgba(255, 255, 255, 0.65);
        pointer-events: none;
        letter-spacing: 0.1em;
        transition: 0.5s;
    }

    .reviewInp input:valid ~ span,
    .reviewInp input:focus ~ span
    {
        transform: translateY(-60px);
        font-size: 13px;
        color: cyan;
    }

    .inputline
    {
        position: absolute;
        left: 0;
        bottom: 0;
        border-bottom: solid aliceblue;
        overflow: hidden;
        width: 400%;
        height: 2px;
    }

    .reviewInp textarea
    {
        width: 455%;
        height: 200px;
        background-color: rgba(0, 0, 0, 0.5);
        letter-spacing: 0.1em;
        margin-bottom: 2px;
        color: aliceblue;
        border-radius: 10px;
    }

    select
    {
        width: 90.3%;
        position:absolute;
        background-color: aliceblue;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.65);
        padding: 10px;
        color: aliceblue;
        text-transform: uppercase;
        font-family: 'Abel', sans-serif;
    }

    .select option
    {
        color: #222237;
        color: aliceblue;
        text-transform: uppercase;
        font-family: 'Comfortaa', sans-serif;
    }

    .buttongroup
    {
        color: aliceblue;
        margin-left: 40%;
    }

    .btn
    {
        transition: transform .5s;
        margin-right: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        border: 2px solid aliceblue;
    }

    .btn:hover
    {
        transform: scale(1.25);
        background-color: rgba(0, 0, 0, 0.9);
        font-weight: bold;
    }
    
    .text
    {
        color: aliceblue;
        font-family: 'Open Sans', monospace;
        transition: all 0.3s ease 0s;
    }

    .text:hover
    {
        color: cadetblue;
    }
</style>

<br><br><br>

<body>
    <div class="reviewForm container">
        <h3 class="col mb-5 text">CẢM NHẬN VỀ SÁCH CỦA BẠN Ở ĐÂY NÈ😄</h3>
        <form action="" method="get" enctype="multipart/form-data" autocomplete="off">
            <div class="col reviewInp">
                <input autocomplete="off" name="namepost" autocapitalize="off" type="text" required>
                <span>Tên Của Bạn<strong><small style="color: crimson;">*</small></strong></span>
                <i class="inputline ml-3"></i>
            </div>
            <div class="col reviewInp mt-5">
                <input autocomplete="off" name="emailpost" autocapitalize="off" type="email" required>
                <span>Email Của Bạn<strong><small style="color: crimson;">*</small></strong></span>
                <i class="inputline ml-3"></i>
            </div>
            <div class="col reviewInp mt-5">
                <input autocomplete="off" name="namebook" autocapitalize="off" type="text" required>
                <span>Tên Sách<strong><small style="color: crimson;">*</small></strong></span>
                <i class="inputline ml-3"></i>
            </div>
            <div class="col reviewInp mt-5">
                <input autocomplete="off" name="nameauthor" autocapitalize="off" type="text" required>
                <span>Tên Tác Giả<strong><small style="color: crimson;">*</small></strong></span>
                <i class="inputline ml-3"></i>
            </div>
            <div class="col reviewInp mt-5">
                <textarea autocomplete="off" name="description" placeholder="Review Về Sách*" autocapitalize="off" type="text" required></textarea>
            </div>
            <div class="col reviewInp mt-5">
                <input name="bookcover" type="file">
                <span style="color: #222237; font-weight: bold;">Bìa Sách</span>
                <i class="inputline ml-3"></i>
            </div>
            <div class="col mt-5 select">
                <select name="gerne">
                    <option value="type" selected>-- Thể loại sách --</option>
                    <option>Tiểu thuyết / truyện ngắn</option>
                    <option>Tiểu thuyết / truyện dài</option>
                    <option>Lãng mạn</option>
                    <option>Truyện thiếu nhi</option>
                    <option>Truyện nước ngoài</option>
                    <option>Truyện Việt Nam</option>
                    <option>Sách học tập</option>
                </select>
            </div>
            <br><br>
            <div class="col buttongroup mt-5">
                <input type="submit" name="btnSubmit" class="btn btn-success" value="ĐĂNG">
                <input type="reset" name="btnReset" class="btn btn-info" value="XÓA">
            </div>
        </form>
    </div>
</body>

<footer>
    <p class="col">&copy; <span style="color: #68f322;">TRUST</span> 2022-2023</p>
    <p class="col"><a href="https://wallpapercave.com/wp/wp2763910.gif"><span>Background Source</span></a></p>
</footer>
</html>