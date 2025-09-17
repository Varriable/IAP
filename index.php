<?php
require 'ClassAutoLoad.php';

$ObjLayout->header($conf);
$ObjLayout->navbar($conf);
$ObjLayout->banner($conf);
if (isset($success)) echo "<div class='alert alert-success'>$success</div>";
$ObjLayout->content($conf);
$ObjLayout->footer($conf);