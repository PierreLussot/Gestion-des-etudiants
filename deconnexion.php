<?php
session_start();
session_destroy();
$_SESSION['niv'] = [];
header('Location: index.php');
