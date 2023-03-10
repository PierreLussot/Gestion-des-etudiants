<?php
            session_start();
            if (!isset($_SESSION['niv'])) {
                header('Location: index.php');
            }
