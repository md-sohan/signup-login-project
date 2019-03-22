 <?php
session_start();
 $conn=mysqli_connect("localhost","root","","practice");
if(isset($_POST['login'])){
        //$name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql="SELECT * FROM student WHERE Name='$email' OR Email='$email' AND Password='$password'";
   $query=mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($query);
	if($rows==1){
		$user=mysqli_fetch_array($query);
		$_SESSION['username']=$user['Name'];
		$_SESSION['useremail']=$user['Email'];
		header('location:welcome.php');

	}else{
		 $error="Invalid User Name or Password";
		
	
	}
   }

?>


<html>
    <head>
        <title>title</title>
        
        <style>
            .form{
                width:600px;
                margin:auto;
                padding:20px;
                background:#999;
                border-radius: 5px;
                color:#fff;
                text-align: center;
            }
        
        </style>
    </head>
<body>
    <div class="form">
        
    <h1>Student Login Form</h1><hr>
      <form action=""method="post">
            <table>
                    <tr>
                    <td></td>
                </tr>
                   <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                   <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass" required></td>
                </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="login"value="login"></td>
                </tr>
                   <tr>
                    <td></td>
                    <td>If you have not Account please.<a href="index.php">Sign Up</a></td>
                </tr>
                
          </table>
        </form>
    </div>
</body>
</html>
