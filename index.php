<?php
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");

$main_color = "#9769E5";
$description = "Индивидуальные IT занятия и консультации от Lonagi";
$cache_vers = '';

require_once("php/rb.php");
require_once("php/db.php");
require_once("php/nvg-data.php");
require_once("php/Mail/myMail.php");

$cccc = new nvgData("stati","ips",'ip',"edulonagi",6,1,1);
$cccc2 = new nvgCount("stati","visitors","edulonagi");
$cccc2->enableLangC("langs");
$cccc2->Count();

if(isset($_POST['sendEmail']) and isset($_POST['namer']) and isset($_POST['congtad']) and isset($_POST['textrt']))
{
	$m = "От ".$_POST['namer']."\nКонтакт ".$_POST['congtad']."\nСообщение:\n".$_POST['textrt'];
	sendM("lonagi22@gmail.com","Education Lonagi",$m);
}
?>

<!DOCTYPE HTML>
<html lang='ru'>
<head>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="<?php echo $main_color; ?>" />
<meta name="msapplication-TileColor" content="<?php echo $main_color; ?>">
<title>IT Education by Lonagi</title>
<link rel="image_src" href="img/vk_share.png">
<meta name="twitter:image" content="img/vk_share.png" />
<meta itemprop="image" content="img/vk_share.png">
<meta property="og:image" content="img/vk_share.png"/>
<meta name="twitter:image" content="img/vk_share.png">
<meta property="og:title" content="IT Education by Lonagi"/>
<meta name="og:title" content="IT Education by Lonagi"/>
<meta property="twitter:title" content="IT Education by Lonagi">
<meta itemprop="name" content="IT Education by Lonagi">
<meta name="twitter:title" content="Lonagi">
<meta property="og:site_name" content="Lonagi"/>
<meta name="twitter:description" content="<?php echo $description; ?>">
<meta property="twitter:description" content="<?php echo $description; ?>">
<meta name="twitter:card" content="<?php echo $description; ?>">
<meta name="description" content="<?php echo $description; ?>"/>
<meta itemprop="description" content="<?php echo $description; ?>">
<meta name="twitter:card" value="<?php echo $description; ?>">
<meta name="og:description" content="<?php echo $description; ?>"/>
<meta property="og:description" content="<?php echo $description; ?>"/>
<meta name="keywords" content="it,education,consulting,lessons,lonagi,programing,school,courses,python,javascript,php,c#,c++"/>
<meta name="subject" content="IT"/>
<meta name="language" content="ru">
<meta property="og:locale" content="ru-MD"/>
<meta name="owner" content="Alexandr Vopilov">
<meta name="author" content="Alexandr Vopilov">
<meta property="og:type" content="landing"/>
<meta property="og:url" content="https://edu.lonagi.pw"/>

<link href="https://ex.nvg-group.com/libs/mdb/4.1.1/f.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="res/styles.min.css?<?php echo $cache_vers; ?>" rel="stylesheet" type="text/css" media="all"/>
</head>

<div class="modal fade" id="modler" tabindex="-1" role="dialog" aria-labelledby="modlerl" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modlerl">ЗАПИСЬ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="?sent" method="POST">
      <div class="modal-body">
        
		  <div class="form-group">
		    <label for="namer">Имя</label>
		    <input type="text" class="form-control" id="namer" name="namer" aria-describedby="namerh">
		  </div>
		  <div class="form-group">
		    <label for="congtad">Контактные данные</label>
		    <input type="text" class="form-control" id="congtad" name="congtad">
		  </div>
		  <div class="form-group">
		    <label for="textrt">Сообщение</label>
		    <textarea class="form-control" id="textrt" name="textrt" rows="5"></textarea>
		  </div>

      </div>
      <div class="modal-footer mb-4">
        <button type="submit" name="sendEmail" class="btn btn-info btn-block btn-raised">Записаться</button>
      </div>

      </form>
    </div>
  </div>
</div>

<body>

<div class="bg-gradient py-3 topnav" data-src="img/topnav.png">
	<div class="container pb-5">
		<div class="row">
			<div class="col-md-3">
				<img src="img/logo.png">
			</div>
			<div class="col-md-5 mt-2 text-center">
				<div class="bordered-box-white px-0 py-1 roboto">
					<a href="#about" onclick="nvgjs.ScrollTo('#about');" class="">Обо мне</a>
					<a href="#lessons" onclick="nvgjs.ScrollTo('#lessons');" class="mx-4">Занятия</a>
					<a href="#consulting" onclick="nvgjs.ScrollTo('#consulting');" class="">Консультация</a>
				</div>
			</div>
			<div class="col-md-4 text-right">
				<div class="mt-3">
					<a class="text-light roboto" href="tel:+37368579171">+373 (68) 57 91 71</a>
					<br>
					<a class="text-light roboto" href="mailto:lonagi22@gmail.com">lonagi22@gmail.com</a>
					<div class="mt-2">
						<a class="socicon" href="https://vk.com/lonagi" target="_blank">
							<img src="img/vk.svg" width="24">
						</a>
						<a class="socicon" href="https://t.me/Appjkekes" target="_blank">
							<img src="img/tg.svg" width="24">
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="heading0 heading1 roboto mt-5">
			Индивидуальные занятия программирования
		</div>
		<div class="heading0 heading2 roboto mt-3 mb-5">
			Консультации или уроки под график
		</div>
	</div>
</div>

<div class="container position-relative" style="min-height: 200px;">
	<div class="row">
		<div class="col-md-4">
			<div class="mx-auto shadow !position-absolute card text-white bg-dark mb-3" style="top:-53px;max-width: 18rem;">
			  <div class="card-header">Формат 1</div>
			  <div class="card-body">
			    <h5 class="card-title">Занятия</h5>
			    <p class="card-text">Тут мы сможем выучить какой-либо язык программирования (Python, PHP, JavaScript, C#), догнать IT мышление или др.</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="mx-auto shadow !position-absolute card text-white bg-dark mb-3" style="top:-53px;max-width: 18rem;">
			  <div class="card-header">Формат 2</div>
			  <div class="card-body">
			    <h5 class="card-title">Консультация</h5>
			    <p class="card-text">Консультация может одноразовой или многоразовой. Тут мы можем обсудить интересующие тебя вопросы.</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
				<div class="mx-auto shadow !position-absolute card text-white bg-dark mb-3" style="top:-53px;max-width: 18rem;">
				  <div class="card-header">Формат 3</div>
				  <div class="card-body">
				    <h5 class="card-title">Помощь</h5>
				    <p class="card-text">Возможно нужно вместе посмотреть код какого-то проекта. Я его смогу и разобрать и объяснить. Проанализируем и изменим.</p>
				  </div>
				</div>
			</div>
	</div>
</div>
<div class="container mt-5 pb-4">
	<div>
		<h2 class="text-grad roboto">Как начать?</h2>
		<p class="text-op roboto">
			Просто напиши мне «<span>Хочу заниматься</span>».
		</p>
		<div class="mt-4 pl-3">
			<img src="img/arrow.svg" width="64">
			<a target="_blank" href="https://vk.com/lonagi"><img src="img/vk2.svg" width="64" class="ml-5"></a>
			<a target="_blank" href="https://t.me/Appjkekes"><img src="img/tg2.svg" width="64" class="ml-3"></a>
		</div>
	</div>
</div>

<div id="about" class="bg-bg topnav mt-5 py-5" data-src="img/bg.png">
	<div class="container">
		<div class="row">
			<div class="col-md-5 text-center">
				<div class="shadow position-relative img-rounded d-inline-block">
					<img src="img/photo.png" width="500" class="position-absolute" style="left: -40%">
				</div>
			</div>
			<div class="col-md-5 text-light text-left roboto" style="font-size: 20px;">
				<div class="pl-3 mt-4">
					В сфере IT я с 2012 года, поэтому у меня огромный опыт в разработке, менеджменте, организации и анализе проектов. <br><br> Какие ЯП я знаю, с которыми я имею большое количество проектов? Python, PHP, Javascript, C#, C++ <br><br> Занимался созданием игр, Android приложениями, Web-сайтами, Машинным обучением, Искусственным интеллектом, Прошивками микроконтроллеров (Arduino) <br><br> Вообще моё портфолио сюда не вместить.
				</div>
			</div>
		</div>
	</div>
</div>

<div id="lessons" class="py-4 mt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">Цены</h1>
				    <p class="lead">
				    	<span class="d-block mt-3"><img src="img/mdl.svg" width="32"> 200 лей / урок</span>
				    	<span class="d-block mt-3"><img src="img/rub.svg" width="32"> 800 рублей / урок</span>
				    	<div class="mt-3">
				    		Оплачивать можно сразу несколько уроков и получить <strong>скидку</strong>, а можно оплачивать отдельно каждый урок.<br>
				    		Оплатить можно наличными, кто с Молдовы, а можно и через Visa, MasterCard
				    	</div>
				    </p>
				  </div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">Условия</h1>
				    <p class="lead">
				    	Занятия могут проходить как вживую, так и онлайн через Zoom, Discord.
				    	<br><br>
				    	Можем заниматься столько, сколько тебе нужно. Также, я могу создать гибкий для тебя график и составить программу на месяцы.
				    	<br><br>
				    	Если тебе хочется стать программистом, начать разбираться в этой теме, либо надо просто догнать школьную/университетскую программу, то обращайся!
				    </p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="consulting" class="bg-bg topnav py-5 mt-5" data-src="img/bg.png">
	<div class="container">
		<div class="jumbotron">
		  <h1 class="display-4">Запись на консультацию</h1>
		  <p class="lead">Первая (ознакомительная) консультация - <strong class="font-weight-bold">бесплатная!</strong><br>
		  Длится консультация 60 минут. Цена 300 лей / 1200 рублей</p>
		  <hr class="my-4">
		  <p>На консультации ты сможешь задать любые интересующие тебя вопросы и я дам ответы! Также, мы вместе сможем просмотреть твой проект и я дам рекомендации по его улучшению. <br>
		  Чтобы понять, нужна консультация или уроки, напиши мне и мы обсудим все детали!</p>
		  <a class="btn btn-info btn-raised btn-block mt-5 btn-lg" href="#modler" data-toggle="modal" role="button">Записаться</a>
		</div>
	</div>
</div>

<div id="footer" class="bg-light py-4">
	<div class="container text-center text-dark">
		&copy; Copyright 2020-<?php echo date("Y"); ?>
		<br>
		<a target="_blank" href="https://lonagi.pw" class="text-dark">Lonagi PW</a>
	</div>
</div>

<footer>
<script src="https://ex.nvg-group.com/libs/jquery/3.4.1/f.min.js"></script>
<script src="https://ex.nvg-group.com/libs/mdb/4.1.1/popper.js"></script>
<script src="https://ex.nvg-group.com/libs/mdb/4.1.1/f.js"></script>
<script src="https://ex.nvg-group.com/libs/nvg/7.6.9/f.min.js"></script>
<script src="res/code.min.js?<?php echo $cache_vers; ?>"></script>
</footer>
</body>
</html>