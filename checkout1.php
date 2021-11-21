<!doctype html>
<html lang="en">
  <head>
    <title>Checkout</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php 
$con=mysqli_connect('localhost','root','','pharmacy');
if(isset($_POST['check_out']))
{
  $cust_id=$_POST['cust_id'];
  $dop=date("Y-m-j");
  $top=date("h:i:s");
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $zip=$_POST['zip'];
  $card_type=$_POST['card_type'];
  $card_name=$_POST['card_name'];
  $card_num=$_POST['card_num'];
  $card_exp=$_POST['card_exp'];
  $card_cvv=$_POST['card_cvv'];
  $query="insert into payment(cust_id,dop,top,fname,lname,email,address,state,country,zip,card_type,card_name,card_num,card_exp,card_cvv,amt_paid) values ('$cust_id','$dop','$top','$fname','$lname','$email','$address','$state','$country','$zip','$card_type','$card_name','$card_num','$card_exp','$card_cvv','1500')";
  $res=mysqli_query($con,$query);

   if($res)
   {
     header('location:success.php');
   }
   else
   {
     header('location:checkout1.php');
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
  <body class="bg-light">
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
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/logo.png" alt="" width="72" height="72">
    <h2>Billing</h2>
    <p class="lead">Pay with Debit Card/ Credit Card</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <a class="btn btn-lg btn-primary" href="membership.php" role="button">Back to Membership Page</a>
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted"><br>Billing Amount</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Monthly Membership</h6>
            <small class="text-muted">Valid for a Month</small>
          </div>
          <span class="text-muted">INR 1230</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">GST</h6>
            <small class="text-muted">Tax 18%</small>
          </div>
          <span class="text-muted">INR 270</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (INR)</span>
          <strong>INR 1500</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" action="" method="POST" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="fname" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="lname" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
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
            <input name="zip" type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="col-md-6 mb-3">
            <label for="cust_id">Customer ID</label>
            <input type="text" name="cust_id" class="form-control" id="cust_id" placeholder="6 - Digit ID" value="" required>
            <div class="invalid-feedback">
              Valid Customer ID is required.
            </div>
          </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>
        <div class="row">
        <div class="col-md-5 mb-3">
            <label for="cardtype">Card Type</label>
            <select name="card_type" class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>Credit Card</option>
              <option>Debit Card</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid card.
            </div>
          </div>
        <br>
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" name="card_name" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" name="card_num" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" name="card_exp" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" name="card_cvv" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="check_out" type="submit" id="success">Continue to checkout</button>
      </form>
    </div>
  </div>


  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery.slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/form-validation.js"></script></body>
</html>
