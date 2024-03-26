<?php
    $state = $_REQUEST['stateValue'];
    if($state == "SA"){
        echo "Adelaide,Mount Baker,Glenelg,Modbury";
    }
    else if($state == "NSW"){
        echo "NSW1,NSW2,NSW3,NSW4";
    }else if($state == "VIC"){
        echo "VIC1,VIC2,VIC3,VIC4";
    }

?>