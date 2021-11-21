<!doctype html>
<html lang="en">
  <head>
    <title>Checkout</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<?php 
$con=mysqli_connect('localhost','root','','pharmacy');
if(isset($_POST['signup']))
{
  $cust_id=$_POST['cust_id'];
  $password=$_POST['password'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $mobile_num=$_POST['mobile_num'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $zip=$_POST['zip'];
  $query="insert into signup(cust_id,password,first_name,last_name,mobile_num,email,address,state,country,zip) values ('$cust_id','$password','$first_name','$last_name','$mobile_num','$email','$address','$state','$country','$zip')";
  $res=mysqli_query($con,$query);

   if($res)
   {
     header('location:signinc.php');
   }
   else
   {
     header('location:signup.php');
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
   
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <header>
  <div class="navbar navbar-light bg-light shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="homepage.php" class="navbar-brand d-flex align-items-center">
        <img src="images/logo.png" width="50" height="50">&emsp;
        <span class="navbar-brand text-primary" href="../homepage.php">East-West Pharmacy</span>
      </a>
      </div>
  </div>
</header>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/logo.png" alt="" width="72" height="72">
    <h2>Sign-up</h2>
    <p class="lead">Be the first to experiance the best in quality service of Premium Health Care.<br> Sign-up Now.</p>
  </div>

    </div>
    <center>
    <div class="col-md-6 order-md-1 text-left">
      <form action="" method="POST" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="first_name" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="last_name" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3 ">
          <label for="username">Mobile Number</label>
          <div class="input-group">
            <input type="mobile" name="mobile_num" class="form-control" id="mobile" placeholder="0123456789" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your Mobile Number is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="state">State</label>
            <select name="state" class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>Rajasthan</option>
              <option>West Bengal</option>
              <option>Orissa</option>
              <option>Gujarat</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="country">Country</label>
            <select name="country" class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>India</option>
              
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" name="zip" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
          <div class="col-md-6 mb-5">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" id="password" placeholder="New Password" value="" required>
            <div class="invalid-feedback">
              Valid Password is required.
            </div>
          </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="signup">Sign-up</button>
      </form>
    </div>
  </div>
</center>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery.slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/form-validation.js"></script>
      </body>
</html>
