<?php
session_start();
session_unset();
session_destroy();
header('Location: a3-despedida.php');
exit();
