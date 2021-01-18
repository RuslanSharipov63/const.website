<?php
require_once 'function.php';

if (isset($_POST['adm']) AND $_POST['adm'] == $out2 AND isset($_POST['pass']) AND $_POST['pass'] == $out3) {
    setcookie ("forma", "", time() -1 );
   
echo '<h1>ДОБАВИТЬ ССЫЛКУ НА САЙТ В РАЗДЕЛ ПОРТФОЛИО</h1>';

echo '<form enctype="multipart/form-data" action="create.php" method="POST">
<div><input name="picture" type="file"/></div>
<div style="margin-top: 1em"><input type="text" name="url"></div>
<input type="submit">
</form>';

} else {
    echo '
    <h2>ВВЕДИТЕ ЛОГИН И ПАРОЛЬ</h2>
    <form method="POST">
    <input type="text" name="adm" required autocomplete="off" style="background: #FFFF00;  border-color: #FF0000">
    <input type="password" name="pass" required autocomplete="off" style="background: #FFFF00;  border-color: #FF0000">
    <input type="submit" value="отправить" style="background: #800000;  border-color: #FF0000; color: #FFFF00; border-radius: 5px">
    </form>';
    
  
}





?>