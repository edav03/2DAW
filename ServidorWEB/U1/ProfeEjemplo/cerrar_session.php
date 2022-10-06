<?php
session_start();

unset($_SESSION['nom']);
unset($_SESSION['clau']);
session_destroy();
header("Location: page1.html");
exit;