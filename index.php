<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="login-style.css">
</head>
<body>
    <div class="center">
        
        <h1>Login</h1>
<form action="#" method="POST" autocomplete="off">
        <div class="form">
            <input type="text" name="Username" class="field" placeholder="Username">
            <input type="password" name="Password" class="field" placeholder="Password">
            <div class="Forgetpass"><a href="#" class="link"  onclick="message()">Forget password ?</div>
            <input type="Submit" name="" value="Login" class="btr">
            <div class="signup">New member ?<a href="#" class="link">signup here </div>
        </div>
    </div>
</form>
    <script>
       function message()
        {
     alert("Try to remember password")
        }
    </script>
</body>
</html>
<?php
    include "table1.php";
    if(isset($_POST['login']))
    {
       $username=$_POST['Username'];
       $password=$_POST['password'];
       $query="SELECT*FROM     WHERE EMAIL='$username'&& password='$password'";
       $data=mysqli_query($conn,$query);
       $total=mysqli_num_rows($data);
       echo $total;
    }

?>