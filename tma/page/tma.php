<?php
if(isset($_GET['pg']) && $_GET['pg'] == "tma") {
    $pg = $_GET['pg'];

    if(isset($_GET['action']) && $_GET['action'] == "new") {
        require_once('tma_new.php');
    }else if(isset($_GET['action']) && $_GET['action'] == "edit") {
        //require_once('tma_edi.php');
    } else {
        require_once('tma_list.php');
    }
} else {
    header("Location: index.php");
} ?>