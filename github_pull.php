<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}
print("<pre>" . execPrint("cd /var/www/customdroplet.com/public_html && git pull") . "</pre>");
?>
