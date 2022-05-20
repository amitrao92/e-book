<?php 
session_start();
error_reporting(0);

# Database Connection File
include "db_conn.php";
$pdo = mysqli_connect('localhost','root','','online_book_store_db');

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

	 $sql = "INSERT INTO contact_detail (name,email,phone,message)
	 VALUES ('$name','$email','$phone','$message')";
	 if (mysqli_query($pdo, $sql)) {

    $to = "demo@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $message = $name . " Wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message To Service Joy" . $name . "\n\n" . $_POST['message'];
  
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
  
    mail($to,"Service Joy Enquiry",$message,$headers);
    mail($from,"Service Joy Enquiry",$message2,$headers2); 
    echo '<div class="alert alert-danger" style="width: 52.3%; margin-top: 5%;">
    <strong>Mail Sent. Thank you </strong> we will contact you shortly.</div></center>';
   // header("Location: login.php");
  
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <title>E-library</title>
    <style>
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
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="search" placeholder="Search">
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
                    <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i></a>
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
                      <div class=" col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-12">
                          <div class="login_set_inn">
                            <div class="head text-start">
                              <h5>
                                  Contact us
                              </h5>
                          </div>
                              <form action="" method="post">
                                  <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="firsr" placeholder="First" require>
                                            </div>
                                        </div>
                                      <div class="col-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="phone" id="number" placeholder="Phone Number">
                                        </div>
                                    </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" require>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                              <textarea class="form-control" rows="4" name="message" placeholder="Message" id="floatingTextarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn-primary">Send</button>
                                            </div>
                                        </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class=" col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-12">
                          <div class="map_area">
                            <div class="map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178790.95737339216!2d-73.87072979478495!3d45.55819642583336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2sMontreal%2C%20QC%2C%20Canada!5e0!3m2!1sen!2sin!4v1647108431096!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
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
                        <a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                        <a href="javascript:;"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                        <a href="javascript:;"><i class="fa-solid fa-envelope"></i></a>
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