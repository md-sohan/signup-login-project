 <?php
$name=$email= $age=$password= $image="";
 $conn=mysqli_connect("localhost","root","","practice");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $password=$_POST['pass'];
    $image=$_POST['image'];
    $sql="INSERT INTO student(Name,Email,Age,Password,Picture)VALUES('$name','$email','$age','$password','$image')";
    mysqli_query($conn,$sql);
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
        
    <h1>Student information form</h1><hr>
      <form action=""method="post">
            <table>
                    <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"value="<?php echo $name ?>" required></td>
                </tr>
                   <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?php echo $email ?>"required></td>
                </tr>
                   <tr>
                    <td>Age:</td>
                    <td><input type="text" name="age"value="<?php echo $age ?>" required></td>
                </tr>
                   <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass" value="<?php echo $password ?>"required></td>
                </tr>
                <tr>
                    <td>picture:</td>
                    <td><input type="file" name="image"value="<?php echo $image ?>"required></td>
                </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
                  <tr>
                    <td></td>
                    <td>Already Have a Account Please <a href="login.php">login</a></td>
                </tr>
          </table>
        </form>
    </div>
</body>
</html>






























