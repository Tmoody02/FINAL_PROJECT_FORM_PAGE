<?php
$connect = mysql_connect(“TYLER-PC\WEB_FORM”, “Tyler”, “12345678”); if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“database_name”, $connect);
$user_info = “INSERT INTO Customers VALUES ('$_POST[bname]', '$_POST[cfname]', '$_POST[clname]', '$_POST[date]', '$_POST[service]')”; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

echo “Your information was added to the database.”;

mysql_close($connect); ?>
