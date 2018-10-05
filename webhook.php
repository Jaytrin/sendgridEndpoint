<?php

require_once('credentials.php');
//Log for errors
// error_log("something wrong, ".print_r($_POST,true));

$query = "INSERT INTO receivedEmail SET subject='{$_POST['subject']}', body='{$_POST['html']}', sender='{$_POST['from']}', recipient='{$_POST['to']}', sent=NOW()";

mysqli_query($conn, $query);

?>