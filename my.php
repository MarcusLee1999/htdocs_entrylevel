<?php
    $hobby=$_REQUEST['hobby'];
    if($hobby == 'basketball'){
        echo 'i like basketball';
    }else if ($hobby == 'soccer'){
        echo 'i like soccer';
    }else  if ($hobby == 'music'){
        echo 'i like music';
    }else if($hobby == null){
        echo 'enter please';
    }
    else{
        echo 'i dont like it';
    }
?>
