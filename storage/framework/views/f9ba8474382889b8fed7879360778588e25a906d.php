<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Web Librerias</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout home_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href="<?php echo e(route('index')); ?>">Home</a> </li>
                                 <li><a href="<?php echo e(route('books')); ?>">Books</a></li>
                                 <li><a href="<?php echo e(route('library')); ?>">Library</a></li>
                                 <li><a href="<?php echo e(route('contact')); ?>">Contact us</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Buscas librerias?<br> Visita nuestro sitio!</h1>
                        
                        <div class="button_section"> <a class="main_bt" href="<?php echo e(route('library')); ?>">Librerias</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="#"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Buscas librer??as?<br> Visita nuestro sitio!</h1>
                        
                        <div class="button_section"> <a class="main_bt" href="<?php echo e(route('library')); ?>">Librerias</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="#"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Buscas librerias?<br> Visita nuestro sitio!</h1>
                        
                        <div class="button_section"> <a class="main_bt" href="<?php echo e(route('library')); ?>">Librerias</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="#"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="aboutheading">
                     <h2>Intro<strong class="black">ducci??n</strong></h2>
                     <span>Que es una libreria y para que te servirve nuentra API?</span>
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                     <p> 
                        Una librer??a es un establecimiento comercial o tienda que se dedica a la venta de libros. Existen librer??as de todo tipo, desde peque??os locales con pocos ejemplares hasta edificios enteros que ofrecen miles de publicaciones.
                     <br>Esta API te facilita la b??squeda de libreiras ya que te brinda opciones de estas y los detalles de cada una como lo que es la direcci??n de cada una de las librer??as, asi como tambi??n el horario en el que las puedes encontarar abiertas.  
                     </p>
                     <a href="library.html">Ver librer??as</a>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                  <div class="about-box">
                     <figure><img src="images/about.png" alt="img" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- end about -->
     
      <!-- Contact -->
      <div class="Contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage3">
                     <h2>Contact</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <form>
                     <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Name" type="Name">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Phone Number" type="Phone Number">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Email" type="Email">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <textarea class="textarea" placeholder="Message">Message</textarea>
                        </div>
                     </div>
                  </form>
               </div>
               <button class="send-btn">Send</button>
            </div>
         </div>
      </div>
      <!-- end Contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html><?php /**PATH G:\API EMMANUEL\API Librerias\librerias\resources\views/index.blade.php ENDPATH**/ ?>