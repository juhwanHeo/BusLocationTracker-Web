<?php
 $connect = mysqli_connect('localhost', 'db username', 'db password', 'locationDB');

 if(!$connect){
        die('Could not connect : '.mysqli_error());
 }

 //mysql_select_db("heojuhwan",$connect);

 mysqli_query("set names utf8");

 $qry = "INSERT INTO riding_user_information (str_user_id, str_datetime, str_latitude, str_longitude)
         VALUES('$_POST[str_user_id]','$_POST[str_datetime]','$_POST[str_latitude]','$_POST[str_longitude]')";

 if(!mysqli_query($connect, $qry)){
        die('Error :' .mysqli_error());
 }

 echo "1 record added";

 //mysql_close($connect);
 $connect->close();
?>
