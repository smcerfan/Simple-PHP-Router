<?php 

    #--------------------------------------------------#
    #--------Routes:: Configratation Coding Here-------#
    #--------------------------------------------------#
    #-------------------Requesst URL-------------------#
    $request = $_SERVER['REQUEST_URI'];
    $ROUTER = str_replace('/github','',$request);
    #--------------------------------------------------#
    #--------------------------------------------------#
    #----------Function of Routeing Start--------------#
    if($ROUTER == '/'){
        include('templates/index.php'); // index page 
    #--------------------------------------------------#   
    }elseif($ROUTER == ''){
        include('templates/index.php'); // Index Page
    #--------------------------------------------------#   
    }elseif($ROUTER == '/home'){
        include('templates/home.php'); // Index Page
    #--------------------------------------------------#   
    }elseif($ROUTER == '/about'){
        include('templates/about.php'); // Index Page
    #--------------------------------------------------#   
    }elseif($ROUTER == '/contact'){
        include('templates/contact.php'); // Index Page
    #--------------------------------------------------#   
    }else{
        include('templates/notfound.php'); // 404 Not Found
    }
    #--------------Routes Function End Here------------#
    #--------------------------------------------------#
    #--------------------------------------------------#

?>