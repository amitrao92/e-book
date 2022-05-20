<?php 
session_start();
 if (isset($_SESSION['name'])) {
  $_SESSION['name'];
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
<section class="header top-space border-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="headone">
          <div class="head_one_inner">
            <div class="left">
			<div class="logo">
                  <a href="home.php"><img src="asset/img/logo.jpg" alt=".." /></a>
                </div>
            </div>
            <div class="right">
              <div class="name">
                <p>
                  E-library
                </p>
              </div>
              <div class="search">
              <?php if (isset($_SESSION['name'])) {?>
                     <div class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                      <?php echo $_SESSION["name"]; ?>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
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
    </div>
  </div>
</section>
<!-----------header--end-end----->
  <section class="login_set border-0">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="row">
                  <div class="container" style="margin-top: 10px; margin-bottom: 50px;">
 <h3 class="text-primary text-center" style="font-size: 50px;"> <?php echo "Thank You ". $_SESSION['name']; ?> </h3> <br>

   <h4 class="text-primary text-center" style="font-size: 40px;"> <?php echo "Your Service For Request Has Been Confirmed Waiting For Approval";  ?> </h4> <br>


</div> 
                  </div>
              </div>
          </div>
      </div>
  </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="asset/js/cutome.js"></script>
  </body>
</html>



