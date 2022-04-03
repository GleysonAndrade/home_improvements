<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'home_improvements');
$conn = mysqli_connect (HOST, USER, PASSWORD, DB);

if (!$conn) {
    
    echo "N connected";
} else {
    // echo "connected";

}
?>
