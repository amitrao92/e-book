<?php 
session_start();

# If search key is not set or empty
if (!isset($_GET['key']) || empty($_GET['key'])) {
	header("Location: index.php");
	exit;
}
$key = $_GET['key'];

# Database Connection File
include "db_conn.php";

# Book helper function
include "php/func-book.php";
$books = search_books($conn, $key);

# author helper function
include "php/func-author.php";
$authors = get_all_author($conn);

# Category helper function
include "php/func-category.php";
$categories = get_all_categories($conn);

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
<section class="header top-space">
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

 <section class="bann-set" style="background-image: url('asset/img/about-banner.jpg');">
     <div class="container">
         <div class="row">
             <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="laberd">
                     <h5>
                         Book Details
                     </h5>
                 </div>
             </div>
         </div>
     </div>
 </section>

<section class="book-detail">
  <div class="container">
  <?php if ($books == 0){ ?>
				<div class="alert alert-warning 
        	            text-center p-5 pdf-list" 
        	     role="alert">
        	     <img src="img/empty-search.png" 
        	          width="100">
        	     <br>
				  The key <b>"<?=$key?>"</b> didn't match to any record
		           in the database
			  </div>
			<?php }else{ ?>
    <div class="row">
    <?php foreach ($books as $book) { ?>
      <div class="col-12">
        <div class="row">
          <div class="col-6">
            <div class="left_side">
              <div class="img_area">
                <img src="uploads/cover/<?=$book['cover']?>" alt=".." />
              </div>
              <div class="name">
                <p>
                <?=$book['title']?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="book-bref">
              <p><i><b>Category:
								<?php foreach($categories as $category){ 
									if ($category['id'] == $book['category_id']) {
										echo $category['name'];
										break;
									}
								?>

								<?php } ?>
							<br></b></i></p>
                            <i><b>By:
								<?php foreach($authors as $author){ 
									if ($author['id'] == $book['author_id']) {
										echo $author['name'];
										break;
									}
								?>

								<?php } ?>
							<br></b></i>
              <div class="rating">
                <ul>
                  <li>
                    <a href="javascript:;"><i class="fas fa-star"></i></a>
                    <a href="javascript:;"><i class="fas fa-star"></i></a>
                    <a href="javascript:;"><i class="fas fa-star"></i></a>
                    <a href="javascript:;"><i class="far fa-star"></i></a>
                    <a href="javascript:;"><i class="far fa-star"></i></a>
                </li>
                </ul>
              </div>
              <div class="book-describ">
                <p>
                <?=$book['description']?>
                </p>
              </div>
              <div class="gets">
              <?php
if(isset($_SESSION["id"])) {


$pdo = mysqli_connect('localhost','root','','online_book_store_db');

  $sql = "SELECT * FROM payment WHERE  user_id= '".$_SESSION["id"]."' and status =1 order by id desc limit 1";
 $mysql = mysqli_query($pdo, $sql);
 $num = mysqli_num_rows($mysql);
   if($num > 0) {
  
$row = mysqli_fetch_array($mysql);

 $sql2 = "SELECT * FROM package WHERE  id= '".$row['pack_id']."' and status =1";
 $mysql2 = mysqli_query($pdo, $sql2);
 $num2 = mysqli_num_rows($mysql2);
  
$month = mysqli_fetch_array($mysql2);
$packageMonth = $month['month'];
$startTime = $row['timestamp'];
$expireTime = strtotime("+".$packageMonth." month", strtotime(date('d-m-Y',$startTime)));

if($expireTime > $startTime){
       
   
?>
<a href="uploads/files/<?=$book['file']?>"
                          download="<?=$book['title']?>" class="btn-primary">Buy PDG</a>
                <a href="uploads/files/<?=$book['file']?>"
                          class="btn btn-success">Read</a>
<?php }else{ 
$query = "UPDATE payment SET `status` = '0' where user_id='".$row['user_id']."'";
       $form = mysqli_query($pdo, $query);
?>      
                <a href="membership.php" class="btn-primary">Buy PDG</a>
          <a  href="membership.php" class="btn btn-success">Read</a>
<?php
   }
}else{
?>
     <a href="membership.php" class="btn-primary">Buy PDG</a>  <a  href="membership.php" class="btn btn-success">Read</a>
     <?php  
}

}else  {?>
   <a href="login.php" class="btn-primary">Buy PDG</a>
                <a  href="login.php"
                          class="btn btn-success">Read</a>
<?php  }
?>
                         
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
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