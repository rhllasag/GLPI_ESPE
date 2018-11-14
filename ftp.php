<?php
$file = 'fromFTP.txt';
$uploaded='/var/www/html/glpi/'.$file;
$remote_file = '/files/'.$file;
$ftp_server = "10.1.0.61";
$ftp_user_name = "ftpglpi";
$ftp_user_pass = "ftpglpi";


// establecer una conexión básica
$conn_id = ftp_connect($ftp_server);
ftp_pasv($conn, true);
if($conn_id){
echo "CONN ok";
}
else{
echo "NO CONN";
}
// iniciar sesión con nombre de usuario y contraseña
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
if($login_result){
echo "login ok";
}
else{
echo "NO LOGIn";
}
// cargar un archivo
if (ftp_put($conn_id, $remote_file, $uploaded, FTP_BINARY)) {
 echo "se ha cargado $file con éxito\n";
} else {
 echo "Hubo un problema durante la transferencia de $file\n";
}

// cerrar la conexión ftp
ftp_close($conn_id);
?>

