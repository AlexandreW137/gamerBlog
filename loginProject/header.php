<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cdn.datatables.net_1.13.4_css_jquery,.css">
</head>
<body>
    <div class="container">

    <header>
        <div class="logo">
    <img src="img/semfundoazul.png" alt="">
    <h1>GamerBlog</h1>
    </div>
    <nav>

    <ul>
        <li> <a href="#">
            Blog
            </a>
        </li>

        <li>
            <a href="#">About
            </a>
            </li>
            
        <li><a href="#">Contact</a></li>
        <?php
        @session_start();
                    if($_SESSION){
                        echo('<li class="nav-item">
                        <a class="nav-link link-danger" 
                        style="text-decoration: none;"
                        href="controller/logoutController.php?cod=logout">Logout</a>
                        </li>');
                    }
                    @session_abort();
                    ?>
                
        </ul>
    </nav>
    

    </header>
    </div>
