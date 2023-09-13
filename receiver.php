<?php 
date_default_timezone_set("Asia/Kolkata");

if(isset($_REQUEST['sql'])) {
    file_put_contents(date('d-M-Y h:i:s a').".sql.dsi",base64_decode($_REQUEST['sql']));
}
