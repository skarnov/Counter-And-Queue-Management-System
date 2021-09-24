<?php
    
    require 'database.php';
    require 'functions.php';
    
    $config = array();
    $config['time_zone'] = date_default_timezone_set('Europe/Lisbon');    
    $config['current_date'] = date('Y-m-d');
    $config['current_time'] = date('H:i:s');
    $config['session_status'] = session_start();
    $config['title'] = 'Lime CMS';
    $config['url'] = 'https://counter.evistechnology.com/';
    $config['logged_user'] = $_SESSION['admin_id'];