<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Treemakasih - Register</title>
	<link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="buket.html">Buket Bunga</a></li>
                  <li class="nav-item"><a class="nav-link" href="kotak.html">Kotak Bunga</a></li>
                  <li class="nav-item"><a class="nav-link" href="papan.html">Papan Bunga</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>           
              <li class="nav-item active"><a class="nav-link" href="register.html">Register</a></li>

            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">0</span></button> </li>
              <li class="nav-item"><a class="button button-header" href="loginindex.php">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Register</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Register Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Sudah punya akun?</h4>
							<p>Telusuri berbagai koleksi bunga terbaik khusus untuk yang terkasih</p>
							<a class="button button-account" href="loginindex.php">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Buat Akun</h3>
						<form method="post" action="prosestambah2.php">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
            				<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-register w-100">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Register Box Area =================-->



  <footer class="footer">
    <div class="footer-area">
      <div class="container">
        <div class="row section_gap">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title large_title"> Vision & Mission
              <h5 class="footer_title">  Vision </h5>
              <p> Menjadi penyedia sarana transaksi online pertama dan terpercaya bagi pelaku bisnis florist.</p>
              <br>
              <h5 class="footer_title"> Mission </h5>
              <p>
                <li> Menggunakan teknologi web dan internet secara tepat </li>
                <li> Menyediakan produk dan layanan terbaik kepada pelanggan </li>
                <li> Menjaga hubungan yang baik dengan mitra kami </li>
              </p>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Quick Links</h4>
              <ul class="list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget instafeed">
              <h4 class="footer_title">Gallery</h4>
              <ul class="list instafeed d-flex flex-wrap">
                <li><img src="img/p2.png" width="75" alt=""></li>
                <li><img src="img/k3.png" width="75" alt=""></li>
                <li><img src="img/b2.png" width="75" alt=""></li>
                <li><img src="img/b5.png" width="71" alt=""></li>
                <li><img src="img/k6.png" width="75"alt=""></li>
                <li><img src="img/k5.png" width="71" alt=""></li>
              </ul>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Contact Us</h4>
              <div class="ml-40">
                <p class="sm-head">
                  <span class="fa fa-location-arrow"></span>
                  Head Office
                </p>
                <p>Universitas Negeri Jakarta <br>
                  Jl. Rawamangun Muka, RT.11/RW.14, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220
                </p>

                <p class="sm-head">
                  <span class="fa fa-phone"></span>
                  Phone
                </p>

                <p>+6289529564985</p>
  
                <p class="sm-head">
                  <span class="fa fa-envelope"></span>
                  Email
                </p>
                <p>treemakasihofficial@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row d-flex">
          <p class="col-lg-12 footer-text text-center">
            <!-- Copyright Section -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart" aria-hidden="true"></i> by Smatech Development
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->


  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>