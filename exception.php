<?php
    function power($x,$y){
        if($x == 0 && $y<0){
            throw new Exception("can't use nagative power of 0!",2); //define exception
        }
        else{
            return $x**$y;
        }

    }
    try{
        $x=0;
        $y=-1;
        $z= power($x,$y);
        echo "$x^$y is $z;";
    }
    catch(Exception $e){
        echo "nagative power of zero! ";  //if any exception found than catch run
        $code = $e->getCode();  
        $msg = $e->getMessage();   //return msg
        $file = $e->getFile();     //return file
        $line = $e->getLine();     //line of codeS

        echo "\ncode: $code, \nMassage: $msg, \nFile: $file, \nline: $line .";
    }
    finally{
        echo "\nyou use power function.";  //it is always run 
    }
?>