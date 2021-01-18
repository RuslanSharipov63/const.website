<!DOCTYPE html>
<html lang="ru">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Создание сайтов, настройка интернет-рекламы</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="monitor.ico" rel="shortcut icon" type="image/x-icon"/>
	<link type="text/css" rel="stylesheet" href="main.css"/>
	

    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  
  
</head>
<body>
    
   <div class="headerContainer" id="top">
       <div class="header">
           <div><img src="images/foreignobject.svg" alt="смартфон"><a href="tel:+79277114181"><span>телефон</span> +7 927 711 41 81</a></div>
           <div><img src="images/konvert.svg" alt="конверт" style="height: 2em"><a href="mailto:sharipov.r@mail.ru"><span>e-mail:</span> sharipov.r@mail.ru</a></div>
           </div>
           
           
           <div class="wrapper">
		<input type="checkbox" id="check-menu">
			<label for="check-menu">МЕНЮ</label>
				<div class="burger-line first"></div>
				<div class="burger-line second"></div>
				<div class="burger-line third"></div>
				<div class="burger-line fourth"></div>

		<nav class="main-menu">	
				<a href="#about">ОБО МНЕ</a>
				<a href="#port">ПОРТФОЛИО</a>
				<a href="#services">УСЛУГИ</a>
				<a href="#mail">НАПИСАТЬ ПИСЬМО</a>
				
	   </nav>
</div>
           
           
           <div class="menuContainer">
          <div class="menu">
              <div>ГЛАВНАЯ</div>
              <div><a href="#about">ОБО МНЕ</a></div>
              <div><a href="#port">ПОРТФОЛИО</a></div>
              <div><a href="#services">УСЛУГИ</a></div>
               <div><a href="#mail">НАПИСАТЬ ПИСЬМО</a></div>
          </div>
          <div class="zag">
          <h2>РУСЛАН ШАРИПОВ</h2> 
          <h1>{ СОЗДАНИЕ САЙТОВ } <br> НАСТРОЙКА ИНТЕРНЕТ-РЕКЛАМЫ</h1>
          </div>
          </div>
   </div>
   <p id="about">ОБО МНЕ</p>
   
   <div class="aboutMe"> 
   <div class="imageAboutMe"></div>
   <div class="textAboutMe">
       <div>Приветствую вас на моей страничке в глобальной сети. Берегу ваше время и не 
   буду рассказывать насколько эффективно продвижение в интернете. Думаю это и так все знают.</div>
<div>На этом сайте все удобно, лаконично и понятно. Этот же подход я использую в работе с клиентами. 
Без накруток и сложных терминов (чтобы запутать заказчика), все подчинённо цели клиента. 
Если ваша стратегия: повышение узнаваемости, сайт увидят на всех возможных интернет - площадках, 
если рост продаж - телефоны компании "раскалятся" от звонков. При этом цена будет не высокой, а объективной.</div>
<div>Я не беру десятки тысяч рублей за полчаса работы. Именно поэтому среди моих заказчиков там много небольших фирм. 
Кстати многие из них, во многом благодаря эффективному продвижению в сети уже переходят в статус крупных предпринимателей.
Мои услуги начинаются от 5 тыс рублей. В минимальную цену входит создание простого сайта до 10 страниц, его мобильная версия и 
настройка контекстной рекламы.</div> 
<div>Звоните! Пишите! Отвечу на все ваши вопросы!</div>
</div>
   </div>
   
   <p id="services">УСЛУГИ</p>
   
   
   <div class="uslugi">
      <div class="uslugiText">
       <div> &#10004 Разработка сайтов</div>
       <div> &#10004 Адаптация под мобильные устройства</div>
       <div> &#10004 Настройка Яндекс.Директ/Google Реклама</div>
       </div>
       
       <div class="imageUslugi"></div>
   </div>
   
   
   <p id="port">ПОРТФОЛИО</p>
   
   <div class="portfolio">
       
       <?php require_once 'function.php'; 
       echo $out; 
       ?>
       
      
   
   </div>
   
   <p id="mail">НАПИСАТЬ ПИСЬМО</p>
  
 <form name="form">
       <input type="text" name="name" class="name" placeholder="Ваше имя" required="required">
       <br>
       <input type="text" name="email" class="email" placeholder="Ваша почта"required="required">
       <br>
       <textarea cols="32" rows="5" name="message" class="message" placeholder="Введите ваше сообщение" required="required"></textarea>
       <br>
       <input type="submit" class="submit" value="отправить">
 </form> 
   

   <div class="footer">
       
   <div class="contacts">
       <a href="tel:+79277114181">+7 927 711 41 81</a>
       <a href="mailto:sharipov.r@mail.ru">SHARIPOV.R@MAIL.RU</a>
       </div>
       
       <div class="footerMenu">
           <div><a href="#top">ГЛАВНАЯ</a></div>
           <div><a href="#port">ПОРТФОЛИО</a></div>
           <div><a href="#services">УСЛУГИ</a></div>
       </div>
       
       <div class="time">
       <?php 
       $t = time();
       echo "РУСЛАН ШАРИПОВ &#169; ".date('Y', $t);
       ?>
       </div>
       
   </div>
   
   
      <?php
echo '<script language = "javascript">
    
    $(document).ready(function() {
        $("input.submit").on("click", function() {
       let nameValue = $("input.name").val();
       let emailValue = $("input.email").val();
       let messageValue = $("textarea.message").val();
       
       
     
     $.ajax({
  method: "POST",
  url: "pochta.php",
  data: { name: nameValue, email: emailValue, message: messageValue }
  
     
})
  .done(function() {
    
  });

    $("input.name").val("");
    $("input.email").val("");
    $("textarea.message").val("");
   alert("Благодарю за сообщение!");
     
        
        
    });
   
 
});
 
 
 

</script>'

?>
   
   
</body>
</html>
</html>

