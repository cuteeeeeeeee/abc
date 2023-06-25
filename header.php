<!DOCTYPE html>
<html>
    <head>
        <title>The Best choice of your phone</title>
        <style>
            *{
                margin:0;
                padding:0;
            }


            body{
                background-color : #F5F5F7;
                color:#000000;
                
            }

            header{
                background-color:#F5F5F7;
                color:#000000;
                text-align:center;
                margin-top:100px;
                margin-bottom:20px;
            }
            
            footer{
                background-color:#F5F5F7;
                color:#000000;
                text-align:center;
                align-content:flex-end;
            }

            article{
                padding:20px;
                text-align:center;
                margin-top:50px;
            }

            h3{
                color:#1D1D1F;
            }

            table{
                background-color:#FFFFFF;
                border-collapse:collapse;
                border:2px outset white;
                width : 100%;
                border-radius:25px;
                padding:20px;
                height:150px;
                color:#000000;
                margin-top:20px;
                
            }
              
            td{
                padding:10px;
            }
            tr:hover{
                background-color:#86868B;
                color:#CECECE;
            }

            nav{
                background-color:#F5F5F7;
                padding:30px;
            }

            a{
                background-color:#0071E3;
                color:white;
                padding: 8px 8px;
                text-decoration:none;
                display:inline-block;
                border-radius:8px;
            
                
            }
            a:hover{
                background-color:#0077ED;
                color:#FFFFFF;
            }

            input,
            select,
            button{
                padding:6px;
                margin-top:8px;
                border-radius:8px;
                margin-bottom:8px;
            }

           input[type=submit]{
            background-color:#0071E3;
            color:#000000;
            margin-bottom:20px;
            margin-top:5px;
           }

           input[type=submit]:hover{
            background-color:#0077ED;
            color:#FFFFFF;
            margin-bottom:20px;
           }

        .respon{
            width:100%;
            height:auto;
            margin-top:70px;
        }    
        
        </style>
    </head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>

<header>
<!-- tajuk sistem. Akan dipaparkan disebelah atas -->
<h1>The Best Choice of your phone</h1>
<p>Your Phone ,Your Style ,Your Perfect Choice!</p>


<img class='respon' src='img/The Best choice of your phone.jpg'>

</header>



<nav>
<!-- Bahagian Menu Asas.
     Menu terbahagi kepada 3 jenis iaitu
     1. Menu staff dimana staff dapat akses semua perkara
     2. Menu pembeli dimana pembeli hanya boleh memilih barangan tetapi pembeli perlu login dahulu.
     3. Menu di laman utama - bagi pelawat yang tidak login pelawat tidak dapat memilih barangan
-->
<?PHP
# Menu staff : dipaparkan sekiranya staff telah login
if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "staff")
{
    echo "
       |<a href='index.php'>Laman Utama</a>
       |<a href='senarai-pembeli.php'>Senarai pembeli</a>
       |<a href='senarai-staff.php'>Senarai staff</a>
       |<a href='senarai-barang.php'>Senarai barang</a>
       |<a href='logout.php'>Logout</a>
      |<hr>";
}
# Menu pembeli : dipaparkan sekiranya pembeli telah login
else if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "pembeli")
{
    echo "
     |<a href='index.php'>Laman Utama</a>
     |<a href='pembeli-pilih.php'>Perbandingan barang</a>
     |<a href='logout.php'>Logout</a>
     <hr> ";
} else {
    #menu Laman Utama : dipaparkan sekiranya staff atau pembeli tidak login
    echo "
     |<a href='index.php'>Laman Utama</a>
     |<a href='pembeli-signup-borang.php'>Pengguna Baru</a>
     |<a href='pembeli-login-borang.php'>Login Pengguna</a>
     |<a href='staff-login-borang.php'>Login Staff</a>
    <hr>";
}
?>

</nav>
<article>

