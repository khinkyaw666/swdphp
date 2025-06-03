<?php 
    function divide($a,$b){

    }

    try {
        echo divide(10,0);
    }catch (Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }


?>