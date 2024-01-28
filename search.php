<?php
    require_once "App/Config/Func.php";
    if(isset($_POST["btnsearch"])&&($_POST['kyw']!="")){
        $kyw=create_slug($_POST['kyw'],1);
        header('location: '.BASEPATH.'product/search/'.$kyw);
    }else{
        header('location: '.BASEPATH);
    }
    