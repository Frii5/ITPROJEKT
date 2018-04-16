<?php
//index.php
include 'connect.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
    
<head>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/JavaScript.js"></script>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A Secure Forum" />
    <meta name="keywords" content="Forum, Secure, Free" />
    <title>Forum</title>
    
</head>
    
<body>
    
<div class="navbar-fixed">
    <nav>
    <div class="nav-wrapper" class="card-panel teal lighten-2">
      <a href="index.php" class="brand-logo">&nbsp&nbspForum&nbsp&nbsp</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down"> 
        <li><a href="create_topic.php">Create Topic</a></li>
        <li><a href="create_cat.php">Create Category</a></li>
          
        <?php
          if (isset($_SESSION['signed_in']) && $_SESSION['signed_in'])
            {
                echo '<li><a href="signout.php" class="waves-effect waves-light btn">Sign out</a></li>';
            }
            else
                {
                    echo '<li><a href="signin.php" class="waves-effect waves-light btn">Log In</a></li>  
                        <li><a href="signup.php" class="waves-effect waves-light btn">Sign Up</a></li>';
                } 
         ?>      
      </ul>   
    </div>    
    </nav>
    

    <br/><br/>
<div class="parallax-container">
      <div class="parallax"><img src="images/Parallaximage1.png"></div>
    </div>
          
<div id="content">
    
    <div class="main">
    
        <div id="page"> 
        
        
                   