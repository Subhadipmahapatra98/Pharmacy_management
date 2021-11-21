<!doctype html>
<html lang="en">
  <head>
    <title>Customer Signin Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
<?php 
if(isset($_POST['signin'])){
    session_start();
    $con=mysqli_connect('localhost','root','','pharmacy');
    $cuid = $_POST['cust_id'];
    $pwd = $_POST['password'];
    $query ="select * from signup where cust_id='$cuid' and password='$pwd' ";
    $rs = mysqli_query($con,$query);
    $row = mysqli_fetch_array($rs,MYSQLI_ASSOC);
    $usr = $row["cust_id"];
    $pd = $row["password"];

    if(mysqli_num_rows($rs) == 1){
      $_SESSION['cid'] = $usr;
      $_SESSION['pid'] = $pd;
      $dol=date("Y-m-j");
      $tol=date("h:i:s");
      $query1="insert into signinc(cust_id,password,dol,tol) values ('$cuid','$pwd','$dol','$tol')";
      mysqli_query($con,$query1);
      header('location:signinc/dashboard.php');
    } else {
      echo "<script>
                alert('Incorrect ID or Password');
                window.location.href='signinc.php';
                </script>";
      
    } 
}    
 ?>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <form action="" method="POST" class="form-signin">
  <img class="mb-4" src="images/logo.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal"> Customer sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" id="inputEmail" name="cust_id" class="form-control" placeholder="Customer ID" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label><?php  ?>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="signin" type="submit">Sign in</button>
  <br>or <br><br> <a class="btn btn-md btn-primary" href="signup.php">Sign-up Now</a>
</form>
</body>
</html>