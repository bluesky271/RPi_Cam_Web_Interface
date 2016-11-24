<?php
   define('BASE_DIR', dirname(__FILE__));
   require_once(BASE_DIR.'/config.php');

   $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
   if($_GET['cmd'] == "open"){
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 1");
        sleep (0.5);
    } else {
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 0");
        echo "Done!";
   }
?>
