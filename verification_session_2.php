<?php

if ($_SESSION['niv'] != 0) {
    header('Location: index.php');
    exit;
}
