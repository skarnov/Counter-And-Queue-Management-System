<?php

    $page_name = $_SERVER['QUERY_STRING'];
    
    if($page_name == 'login_process') {
        require 'database.php';
        require 'jacks/core/login/loginProcess.php';
    }
    
    if($_SESSION['admin_id']){
        if($page_name == ''){
            require 'jacks/core/header.php';
            require 'jacks/core/index.php';
            require 'jacks/core/footer.php';
        }
        
        elseif($page_name == 'logout') {
            require 'jacks/core/login/logout.php';
            require 'jacks/core/login/login.php';
        }
        
        elseif($page_name == 'counters') {
            require 'jacks/core/header.php';
            require 'jacks/additional/counters/counters.php';
            require 'jacks/core/footer.php';
        }
        
        elseif($page_name == 'add_counter') {
            require 'jacks/core/header.php';
            require 'jacks/additional/counters/add_counter.php';
            require 'jacks/core/footer.php';
        }
        
        elseif($page_name == 'saveCounter') {
            require 'jacks/additional/counters/saveCounter.php';
        }
        
        elseif($page_name == 'counter_status') {
            require 'jacks/core/header.php';
            require 'jacks/additional/counters/counter_status.php';
            require 'jacks/core/footer.php';
        }
        
        elseif($page_name == 'editQueue') {
            require 'jacks/additional/counters/editQueue.php';
        }
        
        elseif($page_name == 'display') {
            require 'jacks/additional/display/display.php';
        }
    }
        
    elseif(!$_SESSION['admin_id']){
        require 'jacks/core/login/login.php';
    }