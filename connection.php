<?php

	$host='10.1.0.113:1521/PAS8';
	$usuario='UTIC';
	$password='UT1C9090*';

	$conn=oci_pconnect($usuario,$password,$host);
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

	$query="SELECT UZGTPERSON_NOMBRE, UZGTPERSON_CORR, UZGTTELE_NUM_TELEFONO, UZGTEXTE_NUM_EXTENSION FROM BANINST1.BZPVGUIAT WHERE ID_TERCEROS='magallardo'";
	//$query="SELECT UZGTPERSON_NOMBRE, UZGTPERSON_PUEST, UZGTPERSON_CORR,UZGTPERSON_CEDULA, UZGTTELE_NUM_TELEFONO, UZGTEXTE_NUM_EXTENSION FROM BANINST1.BZPVGUIAT WHERE ID_TERCEROS='".$this->fields['name']."'";
	$resultado=oci_parse($conn,$query);

	@oci_execute($resultado);
	while (($row =oci_fetch_array($resultado))!=false){
	$telefono_banner=$row['UZGTTELE_NUM_TELEFONO'];
	$ext_banner=$row ['UZGTEXTE_NUM_EXTENSION'];
	$n_banner= $row['UZGTPERSON_NOMBRE'];
//	$n_cedula=$row ['UZGTPERSON_CEDULA'];
//	$n_puesto=$row ['UZGTPERSON_PUEST'];
	$val_correo=$row['UZGTPERSON_CORR'];
	}
	oci_close($conn);
	echo "Ok";
?>