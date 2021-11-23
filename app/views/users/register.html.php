<?php ob_start();
$form= new FormHelper();
?>
<!-- Modal -->
<section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(<?=ROOT_URL?>/public/img/slider_2.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="<?=ROOT_URL?>/public/img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Inicia sesion</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Debes iniciar sesion para poder reservar</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>
  
  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter40">
        <div class="col-md-12">
          <h2 class="mt0">Iniciar sesion</h2>
          <form method="post" class="probootstrap-form">
          <div class="form-group">
              <label for="email">Email</label>
              <div class="form-field">
                <i class="icon icon-mail"></i>
                <?=$form->input("email",["name" => "email", "class" => "form-control"]);?>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Password</label>
              <div class="form-field">
                <?=$form->input("password",["name" => "password", "class" => "form-control"]);?>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Confirmar Password</label>
              <div class="form-field">
                <?=$form->input("password",["name" => "confirmpassword", "class" => "form-control"]);?>
              </div>
            </div>
            <div class="form-group">
                <h4>
                    <a href="<?=ROOT_URL?>/users/register">¿Ya tienes una cuenta? Inicia sesion aqui</a>
                </h4>
            </div>
            <div class="form-group">
              <?=$form->input("submit",["name" => "submit", "class" => "btn btn-primary btn-lg", "id"=>"submit", "value"=>"Registrate"]);?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php $content=ob_get_clean()?>
<?php include 'app/views/layout.html.php'?>