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
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Perufon</title>
    <meta name="description" content="Centrales Telefónicas a Costo CERO, Llamadas Gratuitas">
    <meta name="author" content="JALP">
    <link href="<?php echo APP_DOMAIN ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo APP_DOMAIN ?>/public/css/styles_register.css" rel="stylesheet">
    <link rel="icon" href="<?php echo APP_DOMAIN ?>/favicon.ico">
    <link rel="stylesheet" href="https://service.v2contact.com/chat/css">
    <script src="https://service.v2contact.com/chat/api-source"></script>    
</head>
  <body class="<?php echo $body ?>">
    <header>
      <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo APP_DOMAIN ?>">
                    <figure>
                      <img src="<?php echo $logo ?>" alt="Perufon" title="Perufon">
                    </figure>
                  </a>
                </div>            
              </div>
            </nav>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">          
          <div class="jumbotron encabezado">          
            <h1>Crea tu Cuenta en <span class="os-extrabold">3 Simples</span> Pasos</h1>      
          </div>
        </div>
      </div>     
      <div class="row">        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div id="bloque1" class="formulario" style="<?php echo $s_registry;?>">
            <form class="form-horizontal" id="frm-register">
              <input type="hidden" name="do" value="register">
              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="nombre">Nombre</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="nombre" name="nombre" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="apellidos">Apellidos</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="apellidos" name="apellido" autocomplete="off">
                </div>
              </div>
              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="email">Email</label>
                <div class="col-sm-9">
                  <input class="form-control" type="email" id="email" name="email" autocomplete="off" required>
                </div>
              </div>               
              <div class="form-group form-group-sm" id="prueba_tel">
                <label class="col-sm-3 control-label" for="telf">Celular</label>
                <div class="col-sm-9">
                  <input type="tel" class="form-control codtelf" id="telf" name="telefono" autocomplete="off" maxlength="9">
                </div>
              </div>
              <div class="form-group form-group-sm" style="display:none;">
                <label class="col-sm-3 control-label" for="apellidos">Ciudad</label>
                <div class="col-sm-9">
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
              </div>  
              <div class="form-group form-group-sm" style="display:none;">
                <label class="col-sm-3 control-label" for="apellidos">Fecha de nacimiento</label>
                <div class="col-sm-9">
                  <select name='dia' id='dia' style="width:21%"><option value='27' selected>DIA</option></select>
                  <select name='mes' id='mes' style="width:21%"><option value='06' selected>MES</option></select>
                  <select name='ani' id='ani' style="width:21%"><option value='1990' selected>AÑO</option></select>
                </div>
              </div> 
              <div class="form-group form-group-sm" style="display:none;">
                <label class="col-sm-3 control-label" for="apellidos">Sexo</label>
                <div class="col-sm-9">
                  <label class="sexo"><input type='radio' name='sexo' id='sex' value='M' checked> Masculino </label>
                  <label class="sexo"><input type='radio' name='sexo' id='sex' value='F'> Femenino </label>
                </div>
              </div> 
              <div class="form-group form-group-sm">
                <label class="col-sm-3 control-label" for="apellidos"></label>
                <div class="col-sm-9">
                  <p class="comment-form-author" id="register-message-result"></p>                  
                </div>
              </div>         
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-default btn-green" aria-label="Left Align">
                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Enviar
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div id="bloque2" class="confirmacion_registro" style="<?php echo $s_call;?>">
            <form id="frm-validate-code"><br><br>
              <input type="hidden" name="do" value="validate-code">
              <input type="hidden" name="token" value="<?php echo $_GET['token'];?>">
              <div class="bloque1">
                <span>Te llamaremos  en un minuto con el  código de confirmación</span><br><br>
                <label for="cod_call">Ingrese el Código de la llamada</label><br>
                <div class="inputs_call">
                  <input type="text" name="cod_call" id="cod_call" required>
                  <input type="button" id="recod1" class="btn btn-default" value="Reenviar Código">
                </div>
              </div>
              <div class="bloque1" id="call-message-result" style="margin-left: 10%;margin-right: 10%;margin-bottom: 10%;"></div>
              <div class="confirmar">
                <input type="submit" class="btn btn-success" value="Confirmar">
              </div>
            </form>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="fondo_pasos contact">
            <div class="info" style="margin-top: 12px;">
              <p class="adress uno">
                <span style="margin-top: 23px;">Rellene el formulario y <br> CONFIRMA tu correo electrónico.</span>
              </p>
            </div>
          </div>
          <div class="fondo_pasos contact">
            <div class="info" style="margin-top: 12px;">
              <p class="adress dos">
                <span style="margin-top: 18px;">Reciba una llamada telefónica al número <br>telefónico que nos proporcionaste<br> e ingresa el CÓDIGO DE CONFIRMACIÓN.</span>
              </p>
            </div>
          </div>
          <div class="fondo_pasos contact">
            <div class="info" style="margin-top: 12px;">
              <p class="adress tres">
                <span style="margin-top: 17px;">FELICIDADES haz activado tu cuenta!<br>Tienes <span class="os-extrabold">S/. 1 Sol</span> para probar las funciones <br>
                  y adquirir el plan que mas te convenga :)</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br>
      <footer>
        <p>&copy; <?php echo date('Y'); ?> <a href="http://www.perufon.com/">Perufon</a>. </p>
      </footer>
    </div>   

    <div id="v2c_api_chat"><div class="v2c_api_content"></div></div>
    <script src="https://service.v2contact.com/chat/api/8a02b22c9b06b49e9c19c6103903749e"></script>
    <script src="<?php echo APP_DOMAIN ?>/public/js/scripts_register.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo APP_DOMAIN ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
  </body>
</html>