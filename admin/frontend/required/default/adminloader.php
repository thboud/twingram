<?php
if(isset($_SESSION['displayName'])){
    include_once DEFAULT_THEME_DIR . "sidebar.php";
}


if(isset($_GET['adminpath'])){
    
    if(isset($_SESSION['displayName'])){
        ?> <div id="admincontainer"> <?php
        include_once DEFAULT_THEME_DIR  . $_GET['adminpath'] . ".php";
        ?> </div> <?php
    }else{
        header("location: /admin/");
    }

}else{

    if(isset($_SESSION['displayName'])){
          header("location: /admin/index.php?adminpath=dashboard");
    }else{
          include_once DEFAULT_THEME_DIR . "login.php";
    }
          
}