<!doctype html>
<html lang="en">
  <head>
    <title>Staff Signin Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<?php 
if(isset($_POST['signin'])){
    session_start();
    $con=mysqli_connect('localhost','root','','pharmacy');
    $staff_id = $_POST['staff_id'];
    $password = $_POST['password'];
    $query ="select * from verify where id='$staff_id' and password='$password' ";
    $rs = mysqli_query($con,$query);
    $row = mysqli_fetch_array($rs,MYSQLI_ASSOC);
    $staff_id = $row["id"];
    $password = $row["password"];

    if(mysqli_num_rows($rs) == 1){
      $_SESSION['staff_id'] = $staff_id;
      $_SESSION['password'] = $password;
      header('location:signins/dashboard.php');
    } else {
      echo "<script>
                alert('Incorrect ID or Password');
                window.location.href='signins.php';
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
  <h1 class="h3 mb-3 font-weight-normal"> Staff Sign in</h1>
  <label for="inputid" class="sr-only">Staff Number</label>
  <input type="text" id="inputid" name="staff_id" class="form-control" placeholder="Staff Number" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="signin" type="submit">Sign in</button>
</form>
</body>
</html>
