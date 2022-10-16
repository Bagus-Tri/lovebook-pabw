<?php
session_start();
session_unset();
echo "Anda sudah logout<br>";
echo "<a href=\"a01_form_login.php\">login ulang</a>";
?>