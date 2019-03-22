<?php 
session_start();
$conn=mysqli_connect("localhost","root","","practice");
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
?>
<html>
    <head>
        <title>welcome you home page</title>
        <style>
            body{
                background-color: silver;
                
            }
            .header-area{
                width:100%;
                height: 150px;
                background-color: #E9EBEE;
                color:#111;
                
            }
            .left-sidbar-area{
                width:200px;
                height:520px;
                background-color: darkseagreen;
                float:left;
                
            }
            .maincontent-area{
                background:#fff;
                width:100%;
                height:500px;
                
            }
            .footer-area{
                background-color: #616161;
                color:#fff;
                width:100%;
                height:100px;
            
            }
            .catagory{
                margin-top: 100px;
              
            }
            .catagory ul{
                list-style: none;
            }
            .catagory ul li{
               padding:10px;
              
            }
            .catagory ul li a{
                text-decoration: none;
                color:#111 ;
            }
            .catagory ul li a:hover{
                
                color:orangered;
            }
        </style>
    </head>
    <body>
      <div class="header-area">
            <h1 style="text-align:center;padding-top:30px">WELLCOME TO YOUR HOME PAGE</h1>
            <span style="float:right;"><a style="text-decoration:none;margin-right:20px;font-size:20px;" href="logout.php">logout</a></span>
        </div>
      <div class="left-sidbar-area">
      <div class="catagory">
            <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">PROFILE</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">EDIT</a></li>
          </ul>
        </div>
        
        </div>
      <div class="maincontent-area">
            <h2 style="text-align:center">Hello <?php echo $_SESSION['username'] ?> </h2>
          <hr>
        </div>
      <div class="footer-area"></div>
    
    </body>
</html>