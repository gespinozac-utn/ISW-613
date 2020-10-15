<?php
    require('functions.php');

    if($_POST){
        session_start();
        
        if(addCliente($_REQUEST)){
            header("location: /dashboard.php?status=ok");
        }else{
            header("location: /dashboard.php?status=error");
        }
    }