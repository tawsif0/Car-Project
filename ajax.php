<?php

    if (isset($_POST['action'])) {
        echo select();
    }

    function select() {
        echo "The insert function is called.";
        
        
    }

    function insert() {
        echo " insert function is called.";
        exit;
    }
?>