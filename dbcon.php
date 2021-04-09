<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "lewdcc_idk";
 $dbpass = "Cartof1243$";
 $db = "lewdcc_pastr";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>