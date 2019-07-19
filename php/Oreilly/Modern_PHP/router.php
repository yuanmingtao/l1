<?php
// return false;  //will return original http request uri.

// echo "china"; //will ouput this string.

if (php_sapi_name() === 'cli-server')
{
    //PHP web server
    echo "PHP web server";
}else{
    //other web server
}