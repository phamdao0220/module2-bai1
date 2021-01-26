<?php
function inverse($x){
    if (!$x){
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}
try{
    echo inverse(5)."<br>";
    }catch (Exception $e){
    echo 'Caught exception:',$e->getMessage(),"<br>";
}finally{
    echo "First finally."."<br>";
}
try{
    echo inverse(0)."<br>";
}catch (Exception $e){
    echo 'Caught exception:',$e->getMessage().'<br>';
}finally{
    echo"Second finally"."<br>";
}
