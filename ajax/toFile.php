<?php
 var_dump($_POST);

var_dump($_FILES); 

$path ="./upload/";
$name = $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $path.$name);