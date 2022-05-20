<?php  
session_start();

# If the admin is logged in
if (!isset($_SESSION['user_id']) &&
    !isset($_SESSION['user_email'])) {
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
                <div class="login">
				<?php if (isset($_SESSION['user_id'])) {?>
		          	<a class="" 
		             href="admin.php">Admin</a>
		          <?php }else{ ?>
		          <a class="" 
		             href="login.php">Login</a>
		          <?php } ?>
                </div>
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
                      <div class=" col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-12 m-auto">
                          <div class="login_set_inn">
                              <div class="head">
                                  <h5>
                                      Admin Login
                                  </h5>
								  <?php if (isset($_GET['error'])) { ?>
                                 <div class="alert alert-danger" role="alert">
		                    	  <?=htmlspecialchars($_GET['error']); ?>
		                       </div>
		                           <?php } ?>
                              </div>
                              <div class="user">
                                <i class="fad fa-user-shield"></i>
                              </div>
                              <form  method="POST" action="php/auth.php">
                                  <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" 
		                                             id="exampleInputEmail1" 
		                                               aria-describedby="emailHelp" require>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" type="password" 
		                                        class="form-control" name="password" id="exampleInputPassword1" require>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn-primary">Login</button>
                                            </div>
											<a href="signup.php">signup</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="asset/js/cutome.js"></script>
  </body>
</html>

<?php }else{
  header("Location:admin.php");
  exit;
} ?>

