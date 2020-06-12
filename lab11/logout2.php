<?php
//启动会话
session_start();
//删除会话
session_unset();
//结束会话
session_destroy();
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
