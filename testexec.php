<?php
shell_exec("/var/www/html/test.sh");
header('Location: http://192.168.1.222/testscript/index.html?success=true');
?>