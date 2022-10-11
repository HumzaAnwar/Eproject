<?php 

$conn = mysqli_connect('localhost','root','' ,'musify');


if ($conn-> connect_error)   {
    die("Connection failed:".$conn->connect_error);
}
else{
    echo "connection sucessful";
}

?>