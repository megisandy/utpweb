<!DOCTYPE html>
<html>
<head>
    <title>web private</title>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- menghubungkan dengan file jquery -->
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
    <header>
        <h1 class="judul">WEB PRIVATE</h1>
        <h3 class="deskripsi">Pendaftaran Private Online</h3>
    </header>

    <div class="menu">
        <ul>
            <li><a href="indexawal.php?page=home"><b>HOME</b></a></li>
            <li><a href="indexawal.php?page=tentang"><b>JOIN CLASS</b></a></li>
            <li><a href="indexawal.php?page=tutorial"><b>ABOUT TUTOR</b></a></li>
            <li><a href="logout.php"><b>LOGOUT</b></a></li>
        </ul>
    </div>

    <div class="badan">


    <?php 
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                include "home.php";
                break;
            case 'tentang':
                include "crud.php";
                break;
            case 'tutorial':
                include "about.php";
                break;          
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }else{
        include "home.php";
    }

     ?>

    </div>
</div>
</body>
</html>