<?php
$ftp_server = "10.1.0.61";
$ftp_user_name = "ftpglpi";
$ftp_user_pass = "ftpglpi";


// definir algunas variables
$local_file = '/var/www/html/glpi/test.txt';
$server_file = '/files/test.txt';

// establecer una conexión básica
$conn_id = ftp_connect($ftp_server);

// iniciar sesión con nombre de usuario y contraseña
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// intenta descargar $server_file y guardarlo en $local_file
if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
    echo "Se ha guardado satisfactoriamente en $local_file\n";
} else {
    echo "Ha habido un problema\n";
}

// cerrar la conexión ftp
ftp_close($conn_id);

?>
