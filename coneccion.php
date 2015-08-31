<?php

  	/*$cn = mysql_connect('localhost', 'root', '') or die ("error!!!".mysql_error()); 
  	mysql_select_db('prueba') or die ("error2".mysql_error());*/
  	$cn = mysql_connect('200.41.87.214', 'perufon', '%p3ruf0n$2013$%') or die ("error!!!".mysql_error()); 
	mysql_select_db('perufon_2.0') or die ("error2".mysql_error());

	$rs = mysql_query("SELECT MAX(id_reclamacion) AS id FROM pf_reclamaciones", $cn);
	if ($row = mysql_fetch_row($rs)) {
		$last_id = ( trim($row[0]) + 1 );
	}
?>
