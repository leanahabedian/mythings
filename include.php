<?
# classes

require "classes/Ahorros.class.php";
$Ahorros = new Ahorros();

//echo phpinfo();


$serv = mysql_connect("127.0.0.1:3306","root","velez456") or die("Unable to connect to database");
mysql_select_db("Mythings",$serv) or die("Unable to select database Mythings");

/* EOF */
