<?php
require 'ClassAutoLoad.php';
session_start();
session_destroy();
header("Location: signin.php");
exit;
?>