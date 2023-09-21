<?php
if (!isset($_SESSION['login'])) {
    header('location:index.php?cod=172');
    exit; // Add an exit statement after the header redirect
}
?>