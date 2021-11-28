<?php

 $db = mysqli_connect('localhost', 'root', '', 'accounts_db');

 if (!$db) {
     echo "connection failed";
 }

?>