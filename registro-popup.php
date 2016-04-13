<?php
  define('APP_DOMAIN', 'http://www.perufon.com');

  $s_registry = '';
  $s_call = '';
  $body = '';

  if(isset($_GET['do']) && $_GET['do']=='call' && isset($_GET['token'])){
    $s_registry = 'display:none;';
    $s_call = '';
    $body = 'body_confirmation';
    $logo = APP_DOMAIN .'/public/images/logo-perufon.png';
  } else {
    $s_registry = '';
    $s_call = 'display:none;';
    $body = '';
    $logo = APP_DOMAIN .'/public/images/logo-perufon-white.png';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
</head>
<body style="background:transparent !important">
  <link rel="stylesheet" href="<?php echo APP_DOMAIN ?>/wp-content/themes/optimizePressTheme/pages/marketing/1/style.min.css">
  <link href="<?php echo APP_DOMAIN ?>/public/css/styles_register.css" rel="stylesheet">
<div class="formSuscribir">
  <div class="titulo_form">
    <span class="os-bold">¡Rellene el formulario para Probar Sin Costo!</span>
  </div>
  <div class="info_free u-regular">Recibirá una Prueba GRATUITA</div>
  <div id="form_mobile">
    <form id="frm-register">
      <input type="hidden" name="do" value="register">
      <div>
      <label for="nombre" style="visibility: hidden;">Nombre</label>
      <input class="form-control" type="text" id="nombre" name="nombre" autocomplete="off" placeholder="Nombre" required>
      </div>
      <div>
      <label for="apellido" style="visibility: hidden;">Apellido</label>
      <input class="form-control" type="text" id="apellidos" name="apellido" autocomplete="off" placeholder="Apellidos">
      </div>
      <div>
      <label for="email" style="visibility: hidden;">Correo</label>
      <input class="form-control" type="email" id="email" name="email" autocomplete="off" placeholder="E-Mail" required>
      </div>
      <div>
      <label for="celular" style="visibility: hidden;">Celular</label>
      <input type="tel" class="form-control codtelf" id="telf" name="telefono" autocomplete="off" maxlength="9" placeholder="Celular">
      </div>
      <div style="display:none;">
      <label for="apellido" style="visibility: hidden;">Ciudad</label>
      <select name="ciudad" id="cbo_ciudad">
        <option value="1">Amazonas</option>
        <option value="2">Ancash</option>
        <option value="3">Apurimac</option>
        <option value="4">Arequipa</option>
        <option value="5">Ayacucho</option>
        <option value="6">Cajamarca</option>
        <option value="7">Cusco</option>
        <option value="8">Huancavelica</option>
        <option value="9">Huanuco</option>
        <option value="10">Ica</option>
        <option value="11">Junin</option>
        <option value="12">La Libertad</option>
        <option value="13">Lambayeque</option>
        <option value="14" selected>Lima</option>
        <option value="15">Loreto</option>
        <option value="16">Madre de Dios</option>
        <option value="17">Moquegua</option>
        <option value="18">Pasco</option>
        <option value="19">Piura</option>
        <option value="20">Puno</option>
        <option value="21">San Martin</option>
        <option value="22">Tacna</option>
        <option value="23">Tumbes</option>
        <option value="24">Ucayali</option>
      </select>
      </div>
      <div style="display:none;">
      <label for="apellido" style="visibility: hidden;">Fecha de Nacimiento</label>
      <select name='dia' id='dia' style="width:21%"><option value='27' selected>DIA</option></select>
      <select name='mes' id='mes' style="width:21%"><option value='06' selected>MES</option></select>
      <select name='ani' id='ani' style="width:21%"><option value='1990' selected>AÑO</option></select>
      </div>
      <div style="display:none;">
      <label for="apellido" style="visibility: hidden;">Sexo</label>
      <label class="sexo"><input type='radio' name='sexo' id='sex' value='M' checked> Masculino </label>
      <label class="sexo"><input type='radio' name='sexo' id='sex' value='F'> Femenino </label>
      </div>
      <div>
      <label for="apellido" style="visibility: hidden;">Mensajes</label>
      <p class="comment-form-author" id="register-message-result"></p>
      </div>
      <div>
      <button type="submit" class="btn btn-default btn-green v2c_btn_submit" aria-label="Left Align">
        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Enviar
      </button>
      </div>
    </form>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo APP_DOMAIN ?>/public/js/scripts_register.min.js"></script>
<script>
jQuery('.v2c_btn_submit').click(function(){

    function campo(vacio){
      var seleccionar = jQuery('#' + vacio);
        seleccionar.focus();
      jQuery('#' + vacio).css({'background':'#EED3D7', 'color':'#b94a48', 'outline':'2px solid #B94A48'});
      setTimeout(function(){
        jQuery('#' + vacio).css({'background':'', 'color':'', 'outline':''});
      },3000);
    }

    if(jQuery('#nombre').val() == ''){
      campo('nombre');
      return;
    }
    if(jQuery('#email').val() == ''){
      campo('email');
      return;
    }
    if(jQuery('#celular').val() == ''){
      campo('celular');
      return;
    }

    jQuery('#formCV').submit();

  })
  window.onload = function(){
    jQuery('#form_mobile div>label').css('visibility','hidden');
    jQuery('#form_mobile input#nombre').attr('placeholder','Nombre');
jQuery('#form_mobile input#apellido').attr('placeholder','Apellidos');
    jQuery('#form_mobile input#email').attr('placeholder','E-Mail');
    jQuery('#form_mobile input#celular').attr('placeholder','Celular');
    jQuery('#form_mobile input[type="submit"]').val('Pruebe ¡Sin Costo!');
  }
</script>



<script>

   var mql = window.matchMedia("screen and (max-width: 959px)")
  if (mql.matches){ // if media query matches
    jQuery('#form_mobile').appendTo(jQuery('#per-mobile'));
    jQuery('#form_mobile div>label').css('visibility','hidden');
    jQuery('#form_mobile input#nombre').attr('placeholder','Nombre');
    jQuery('#form_mobile input#email').attr('placeholder','E-Mail');
    jQuery('#form_mobile input#celular').attr('placeholder','Celular');
    jQuery('#form_mobile input[type="submit"]').val('Pruebe ¡Sin Costo!');
  }
  else{
     console.dir('resolucion mayor a 960');
  }

</script>
</body>
</html>