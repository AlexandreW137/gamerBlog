<<<<<<< HEAD
<?php if (!isset($_SESSION['login'])) {
    header('location:index.php?cod=172');
    exit; 
}
=======
<?php
if (!isset($_SESSION['login'])) {
    header('location:index.php?cod=172');
    exit; // Add an exit statement after the header redirect
}
?>
>>>>>>> 3cfa888d502b66542fa1cf0f038d3562bb664e45
