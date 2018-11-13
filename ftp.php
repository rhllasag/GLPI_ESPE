<?php
$file = 'fromFTP.txt';
$remote_file = '/home/ftpglpi/ftp/files/fromFTP.txt';
$ftp_server = "10.1.0.61";
$ftp_user_name = "ftpglpi";
$ftp_user_pass = "ftpglpi";


// establecer una conexión básica
$conn_id = ftp_connect($ftp_server);

// iniciar sesión con nombre de usuario y contraseña
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// cargar un archivo
if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
 echo "se ha cargado $file con éxito\n";
} else {
 echo "Hubo un problema durante la transferencia de $file\n";
}

// cerrar la conexión ftp
ftp_close($conn_id);
?>
Ver tambié