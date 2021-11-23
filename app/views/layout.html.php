<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pension El Espolon de Logroño</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/styles-merged.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/style.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>/public/css/custom.css">
  </head>
  <body>
  <header role="banner" class="probootstrap-header">
    <div class="row">
        <a href="index.html" class="probootstrap-logo visible-xs"><img src="<?=ROOT_URL?>/public/img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="<?=ROOT_URL?>/pages/home">Home</a></li>
            <li><a href="<?=ROOT_URL?>/booking/book">Reservar</a></li>
            <li><a href="rooms.html">Habitaciones</a></li>
            <li class="hidden-xs probootstrap-logo-center"><a href="index.html"><img src="<?=ROOT_URL?>/public/img/logo.png" class="hires" width="181" height="50" alt=""></a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="">Contacto</a></li>
            <?php
              if(isset($_SESSION['is_logged_in'])){
                echo '<li><a href="'.ROOT_URL.'/users/logout">Cerrar Sesion</a></li>';
              }else{
                echo '<li><a href="'.ROOT_URL.'/users/login">Iniciar Sesion</a></li>';
              }
            ?>


          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect With Us</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
        </div>
  </header>

    <?php echo $content?>

    <footer role="contentinfo" class="probootstrap-footer">
        <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <h3>Blog</h3>
            <ul class="probootstrap-blog-list">
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="<?=ROOT_URL?>/public/img/logrono.jpeg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>Los 12 imprescindibles de Logroño</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>Que en Logroño se vive bien, de eso no hay ninguna duda. La capital riojana es una de las ciudades...</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="<?=ROOT_URL?>/public/img/logrono.jpeg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>Los 12 imprescindibles de Logroño</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>Que en Logroño se vive bien, de eso no hay ninguna duda. La capital riojana es una de las ciudades...</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="<?=ROOT_URL?>/public/img/logrono.jpeg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>Los 12 imprescindibles de Logroño</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>Que en Logroño se vive bien, de eso no hay ninguna duda. La capital riojana es una de las ciudades...</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <h3>Contacto</h3>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>C. de Juan XXIII, 4, 1º C, 26001 Logroño, La Rioja</span></li>
              <li><i class="icon-mail"></i><span>info@pensionespolon.com</span></li>
              <li><i class="icon-phone2"></i><span>+34 600 00 00 00 - +34 941 00 00 00</span></li>
            </ul>
            
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-md-12 text-center">
          <ul class="probootstrap-footer-social">
            <li><a href=""><i class="icon-twitter"></i></a></li>
            <li><a href=""><i class="icon-facebook"></i></a></li>
            <li><a href=""><i class="icon-instagram2"></i></a></li>
          </ul>
          <p>
            <small>&copy; 2021 <a href="" target="_blank">Pension El Espolón</a>. All Rights Reserved. <br> Designed &amp; Developed by <a href="" target="_blank">Javier Mármol</a></small>
          </p>
          
        </div>
      </div>
    </div>
  </footer>
  <script src="<?=ROOT_URL?>/public/js/scripts.js"></script>
  <script src="<?=ROOT_URL?>/public/js/main.js"></script>
  <script src="<?=ROOT_URL?>/public/js/custom.js"></script>


  </body>
</html>
