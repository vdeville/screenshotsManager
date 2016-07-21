<?php

require_once 'config.inc.php';

if(isset($_POST)){

    $img = $_POST['name'];

    if(unlink(PATH_TO_IMG.$img)){
        echo "Ok";
        return true;
    } else{
        echo "Error";
        return false;
    }
}