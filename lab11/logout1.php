<?php
setcookie("UserName", "", -1);
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
