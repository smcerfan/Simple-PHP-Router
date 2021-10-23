<?php 


    // views/url.php is the path of your template. 
    #--------------------------------------------------#
    #--------Routes:: Configratation Coding Here-------#
    #--------------------------------------------------#
    #-------------------Requesst URL-------------------#
    $request = $_SERVER['REQUEST_URI'];
    $ROUTER = str_replace('/cdphp','',$request); // /cdphp use your path or leave it. 
    #--------------------------------------------------#
    #--------------------------------------------------#
    #----------Function of Routeing Start--------------#
    if($ROUTER == '/'){
        include('views/index.php'); // index page 
    #--------------------------------------------------#   
    }elseif($ROUTER == ''){
        include('views/index.php'); // Index Page
    #--------------------------------------------------#   
    }elseif($ROUTER == '/home'){
        include('views/index.php'); // Index Page
    #--------------------------------------------------#   
    }elseif($ROUTER == '/dd-submited'){
        include('confiq/dedicated-developer.php'); 
    #--------------------------------------------------#
    }else{
        include('views/error.php'); // 404 Not Found
    }
    #--------------Routes Function End Here------------#
    #--------------------------------------------------#
    #--------------------------------------------------#

?>
