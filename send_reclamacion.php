
<?php
  
  session_start(); 
  require_once 'coneccion.php';

  $json = array(); 
  
  
function response($error_message) {    
    return array('load' => false, 'error_message' => $error_message);
}
 
  $args = array(
    'lib_nom' => FILTER_SANITIZE_STRING,
    'lib_ape' => FILTER_SANITIZE_STRING,
    'lib_depa' => FILTER_SANITIZE_STRING,
    'lib_ciudad' => FILTER_SANITIZE_STRING,
    'lib_domicilio' => FILTER_SANITIZE_STRING,
    'lib_dni' => FILTER_VALIDATE_INT,
    'lib_telf' => FILTER_SANITIZE_STRING,
    'lib_email' => FILTER_VALIDATE_EMAIL,
    'lib_monto' => FILTER_SANITIZE_STRING,
    'lib_prod_serv' => FILTER_SANITIZE_STRING,
    'lib_reclamo' => FILTER_SANITIZE_STRING,
    'lib_detalle' => FILTER_SANITIZE_STRING,
    'lib_pedido' => FILTER_SANITIZE_STRING,
  );

$telf = strlen($_POST['lib_telf']);
$monto = strlen($_POST['lib_monto']);
$pedido = strlen($_POST['lib_pedido']);

$params = filter_input_array(INPUT_POST, $args);

$params['lib_nom'] = trim($params['lib_nom']);
$params['lib_ape'] = trim($params['lib_ape']);


if($params['lib_nom'] == '') {
  $json = response('Escriba su nombre');
} else if ($params['lib_ape'] == '') {
  $json = response('Escriba su apellido');
} else if(!$params['lib_depa']){
  $json = response('Seleccione departamento');
} else if (!$params['lib_ciudad']) {
  $json = response('Seleccione ciudad.');
} else if (!$params['lib_domicilio']) {
  $json = response('Escriba su dirección.');
} else if (!$params['lib_dni']) {
  $json = response('Escriba su DNI');
} else if ( $telf > 0 && !$params['lib_telf']) {
  $json = response('Escriba su teléfono.');
} else if (!$params['lib_email']) {
  $json = response('Escriba un email correcto.');
} else if ( $monto > 0 && !$params['lib_monto'] ) {
  $json = response('Escriba su monto.');
} else if (!$params['lib_prod_serv']) {
  $json = response('Elija producto o servicio.');
} else if (!$params['lib_reclamo']) {
  $json = response('Elija su reclamo o queja.');
} else if (!$params['lib_detalle']) {
  $json = response('Escriba el detalle de su reclamo.');
} else if ( $pedido > 0 && !$params['lib_pedido']) {
  $json = response('Escriba su pedido');
} else {  
      
      $json = json_encode($_POST);      
      $sql= "INSERT INTO pf_reclamaciones(reclamaciones) VALUES('$json')";
      mysql_query($sql);
      mysql_close();
      $json = array('load' => true, 'ultima_reclamacion' => $last_id, 'success_message' => 'SU RECLAMO HA SIDO INGRESADO CORRECTAMENTE');
 
}
echo json_encode($json);      
       
?>