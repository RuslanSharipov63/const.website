<?php
require_once 'config.php';

$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
mysqli_set_charset($conn, "utf-8");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['url']) AND $_POST['url'] != '') {
    
$url = $_POST['url'];
$picture = $_POST['picture'];
move_uploaded_file($_FILES['picture']['tmp_name'], 'images/'.$_FILES['picture']['name']);

$sql = "INSERT INTO portfolio (url, picture) VALUES ('".$url."', '".$_FILES['picture']['name']."')";

if(mysqli_query($conn, $sql)) {
    header("Location: /project_my_portal/header.php");
    //echo 'Новая запись добавлена';
} else {
    echo 'Произошла ошибка, попробуйте еще раз';
}

mysqli_close($conn);
}


if (isset($_POST['submit'])) {
	$url    = Clean::str($_POST['url']);
	$picture   = Clean::str($_POST['picture']);
	
}
?>