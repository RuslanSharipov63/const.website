<?php

require_once 'config.php';

$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
mysqli_set_charset($conn, "utf-8");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM portfolio";
$result = mysqli_query($conn, $sql);

$a = array();

if (mysqli_num_rows($result) > 0) {
 
  while($row = mysqli_fetch_assoc($result)) {
      $out = '';
    $a[] = $row;
   
    for($i=0; $i<count($a); $i++) {
        $out .= '<div><a href="'.$a[$i]['url'].'" target="_blank"><img src="images/'.$a[$i]['picture'].'"></a></div>';
    }
   
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

$conn2 = mysqli_connect(SERVER, USER, PASSWORD, DB);
mysqli_set_charset($conn2, "utf-8");


if (!$conn2) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql2 = "SELECT * FROM info";
$result2 = mysqli_query($conn2, $sql2);

$a2 = array();

if (mysqli_num_rows($result2) > 0) {
 
  while($row2 = mysqli_fetch_assoc($result2)) {
      $out2 = '';
    $a2[] = $row2;
   
    for($i=0; $i<count($a2); $i++) {
        $out2 = $a2[$i]['admin']; 
        $out3 = $a2[$i]['password'];
    }

  }
} 



mysqli_close($conn2);




?>