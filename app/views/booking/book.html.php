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
                  <h1 class="probootstrap-heading probootstrap-animate">Reservar una habitacion</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Aqui podras reservar una habitacion en segundos</div>
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
          <h2 class="mt0">Formulario de reserva</h2>
          <form method="post" class="probootstrap-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Nombre</label>
                  <?=$form->input("text",["name" => "name", "class" => "form-control"]);?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Apellido</label>
                  <?=$form->input("text",["name" => "lastname", "class" => "form-control"]);?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <div class="form-field">
                <i class="icon icon-mail"></i>
                <?=$form->input("email",["name" => "email", "class" => "form-control"]);?>
              </div>
            </div>
            <div class="form-group">
              <label for="room">Habitacion</label>
              <div class="form-field">
                <i class="icon icon-chevron-down"></i>
                <?= $form->select([''=>'Seleccione una habitacion', 'standard'=>'Habitacion estandar', 'espolon'=>'Habitacion Espolon','deluxe'=>'Familia Deluxe'],['name'=>'room','class'=>'form-control']) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-arrival">Llegada</label>
                  <div class="form-field">
                    <i class="icon icon-calendar2"></i>
                    <?=$form->input("text",["name" => "arrival", "class" => "form-control", "id"=>"date-arrival"]);?>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-departure">Salida</label>
                  <div class="form-field">
                    <i class="icon icon-calendar2"></i>
                    <?=$form->input("text",["name" => "departure", "class" => "form-control", "id"=>"date-departure"]);?>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb30">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="adults">Adultos</label>
                  <div class="form-field">
                    <i class="icon icon-chevron-down"></i>
                    <?= $form->select([''=>'Numero de adultos', '1'=>'1', '2'=>'2','3'=>'3','4+'=>'4+'],['name'=>'adults','class'=>'form-control']) ?>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="children">Niños</label>
                  <div class="form-field">
                    <i class="icon icon-chevron-down"></i>
                    <?= $form->select([''=>'Numero de niños', '1'=>'1', '2'=>'2','3'=>'3','4+'=>'4+'],['name'=>'childs','class'=>'form-control']) ?>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="form-group">
              <?=$form->input("submit",["name" => "submit", "class" => "btn btn-primary btn-lg", "id"=>"submit", "value"=>"Reserva"]);?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>

  <?php $content=ob_get_clean()?>
<?php include 'app/views/layout.html.php'?>