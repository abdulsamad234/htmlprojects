<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>AR CBT</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

       

    </head>

    <body>
       <?php
            foreach($positions as $port){
                $first_name = ucfirst($port["first_name"]);
                $last_name = ucfirst($port["last_name"]);
            }
        ?>
        
        <div id = "rapper">
            <nav id = "top_nav" class="navbar-inverse" role = "navigation">
                <div class="container-fluid">
                    <div id = "nav_head" class="navbar-header">
                        <h2 id = "brand">AR CBT</h2>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class = "nav_item" data-toggle = "tooltip" title = "show/hide sidebar"><a id="menu-toggle" href="#" class = "glyphicon glyphicon-menu-hamburger">
                        </a></li>
                        <li class = "dropdown nav_item" id = "last"><a href="#" class = "glyphicon glyphicon-user dropdown-toggle" data-toggle = "dropdown"><span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li> 
                            </ul>
                        </a></li>
                    </ul>
                </div>
            </nav>
            <div id="wrapper">
                <!-- Sidebar -->
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul id="sidebar_menu" class="sidebar-nav">
                        <li class="sidebar-brand"><img src = "img/lambo.jpg" class = "img-circle" id = "profile_image" height = "200px" width = "200px"><h4 id = "full_name"><?= $first_name." ".$last_name?></h4></li>
                        <a id = "logout" href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span></a>
                    </ul>
                    <ul class="sidebar-nav" id="sidebar">
                        <li><a href = "student_dashboard.php">Available Exams<span class="sub_icon glyphicon glyphicon-book"></span></a></li>
                        <li><a href = "add_subject.php">View Results<span class="sub_icon glyphicon glyphicon-plus"></spa n></a></li>
                    </ul>
                    <ul class="sidebar-nav sidebar-bottom" id = "items">
                        <li><a>Link1<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                        <li><a>Link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                    </ul>
                </div>
            <script src = "js/scripts.js"></script>
                <!-- Page content -->
                <div id="page-content-wrapper">
                    <!-- Keep all page content within the page-content inset div! -->
                    <div class="page-content inset">
            
                    
            
