<?php
session_start();
$pdo = mysqli_connect('localhost','root','','online_book_store_db');
$pack_id = $_GET['pack_id'];
   $user_id = $_SESSION['id'];


if(isset($_POST['submit']))
{	 
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone      = $_POST['phone'];
  $address    = $_POST['address'];
  $country    = $_POST['country'];
  $Province    = $_POST['province'];
  $card_holder    = $_POST['card_holder'];
  $card_num    = $_POST['card_num'];
  $expire_date    = $_POST['expire_date'];
  $cvv_num    = $_POST['cvv_num']; 
  $pack_id    = $_POST['pack_id'];
  $sesion_user_id    = $_POST['user_id'];
  $timestamp = time();

	 $sql = "INSERT INTO payment (full_name,email,phone,address,country,province,card_holder,card_num,expire_date,cvv_num,pack_id,user_id,timestamp)
	 VALUES ('$full_name','$email','$phone','$address','$country','$Province','$card_holder','$card_num','$expire_date','$cvv_num','$pack_id','$sesion_user_id','$timestamp')";
	 if (mysqli_query($pdo, $sql)) {
		echo "New record created successfully !";
    header("Location: thank-you.php");
	 } 
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/app.css">
    <link rel="stylesheet" href="asset/css/media.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <title>E-library</title><style>
      .login {
    height: 39px;
}
button#basic-addon2 {
    display: contents;
}
    </style>
  </head>
  <body>

<!---------header--start-here----->
<section class="header top-space">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="headone">
            <div class="head_one_inner">
              <div class="left">
                <div class="logo">
                  <a href="index.php"><img src="asset/img/logo.jpg" alt=".." /></a>
                </div>
              </div>
              <div class="right">
                <div class="name">
                  <p>
                    E-library
                  </p>
                </div>
                <div class="search">
                  <div class="seacrg_iin">
                    <form action="search.php" method="get">
                      <div class="form-group">
                        <input type="text" class="form-control" name="key" id="search" placeholder="Search">
						<button class="input-group-text
		                 btn btn-primary" 
		          id="basic-addon2">
		          <img src="img/search.png"
		               width="10"></button>
                      </div>
                    </form>
                  </div>
                  <?php if (isset($_SESSION['name'])) {?>
                     <div class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                      <?php echo $_SESSION["name"]; ?>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        <li><a class="dropdown-item" href="change-pass.php">Change Password</a></li>
                      </ul>
                    </div>   <?php }else{ ?>
                  <div class="login">
                    <a href="login.php">Login</a>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
          <div class="navigation_inn">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid px-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">FindInfo</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="books.php">Books</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="membership.php">Membership</a>
                  </li>
                    <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="service.html">Book Service</a></li>
                      </ul>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
</section>
<!-----------header--end-end----->

  <section class="login_set">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="row">
                      <div class=" col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-12 m-auto">
                          <div class="login_set_inn">
                              <div class="head">
                                  <h5>
                                     Payment details
                                  </h5>
                              </div>
                              <form action="" method="post">
                                  <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="full_name" id="firsr" placeholder="First">
                                            </div>
                                        </div>
                                      <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"  id="email" placeholder="Email">
                                        </div>
                                    </div>
                                      <div class="col-12">
                                        <div class="form-group">
                                            <input type="text"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"class="form-control" name="phone" maxlength="13"  id="number" placeholder="Phone Number">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address"  id="address" placeholder="Address">
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                          <select class="form-select" aria-label="Default select example" name="country" >
                                            <option selected>Country</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Uk">Uk</option>
                                            <option value="China">China</option>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                          <select class="form-select" aria-label="Default select example" name="province" >
                                            <option selected>Province</option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                            </select>
                                        </div>
                                      </div>
                                        
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="card_holder"  id="Cardholder" placeholder="Cardholder name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="form-group">
                                              <input type="text"  maxlength="16"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="card_num"  id="Cardnumber" placeholder="Card Number">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="expire_date"  id="date" placeholder="Exp Dte">
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" maxlength="3"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"class="form-control" name="cvv_num" id="cvv" placeholder="CVV">
                                        </div>
                                      </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <input type="hidden"  name="pack_id" value="<?php echo $pack_id;?>">
                                            <input type="hidden"  name="user_id" value="<?php echo $user_id;?>">
                                                <button type="submit" name="submit" class="btn-primary">Procees to Payment</button>
                                            </div>
                                        </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<footer>
    <div class="foot_in">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="logo_area">
                    <div class="logo">
                    <a href="index.html"><img src="asset/img/logo.jpg" alt=".." /></a>
                    </div>
                    <p>
                    E-Library is easy and comprehensive to use
                    </p>
                    <div class="social">
                      <ul>
                        <li>
                        <a href="javascript:;"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                        <a href="javascript:;"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                        <a href="javascript:;"><i class="fas fa-envelope"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="links">
                    <div class="head">
                    <h5>
                        Useful Links
                    </h5>
                    </div>
                    <div class="link_under">
                    <ul>
                        <li>
                        <a href="index.php">Home</a>
                        </li>
                        <li>
                        <a href="books.php">Book</a>
                        </li>
                        <li>
                        <a href="service.php">Service</a>
                        </li>
                    </ul> 
                    </div>
                </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="links">
                    <div class="head">
                    <h5>
                        Contact Us
                    </h5>
                    </div>
                    <div class="link_under">
                    <ul>
                        <li>
                        <a href="tel:+123456789">12345678</a>
                        </li>
                        <li>
                        <a href="javascript:;">tersm and conditions</a>
                        </li>
                        <li>
                        <a href="javascript:;">Privacy policy</a>
                        </li>
                    </ul> 
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="asset/js/cutome.js"></script>
  </body>
</html>