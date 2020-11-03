<?php
  require "./includes/config.php"
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Наша Лавка</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/baguetteBox.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<?php
                $courses = mysqli_query($connection,"SELECT * FROM `courses` ORDER BY `id`");
                ?>
</head>
<body>
	<div id="top"></div>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" >
		<div class="container">
			<div class="logoimg">
				<a href="javascript://0" onclick = "slowScroll ('#top')" class="navbar-brand"><img src="img/logo.png" align="left" alt="logotype"></a>
			</div>
			<div class="logotext">
				<a href="javascript://0" onclick = "slowScroll ('#top')" class="navbar-brand"><h1><span>Наша</span>Лавка<br></h1></a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item" id="top-menu-main"><a href="javascript://0" onclick="slowScroll ('#top')"class="nav-link active">Главная</a></li>
					<li class="nav-item"><a href="javascript://0" onclick="slowScroll ('#About')" class="nav-link">О нас</a></li>
					<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Контакты</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				            <a class="dropdown-item" href="javascript://0" onclick = "slowScroll ('#course')">Доставка блюд и товаров в любую точку города</a>
				            <a class="dropdown-item" href="javascript://0" onclick = "slowScroll ('#children')">Готовка разных блюд на заказ</a>
          				</div>
      				</li>
					<li class="nav-item"><a href="javascript://0" onclick = "slowScroll ('#profile')" class="nav-link">Анкета</a></li>
					<li class="nav-item"><a href="javascript://0" onclick = "slowScroll ('#contacts')" class="nav-link">Контакты</a></li>
					<li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-search"></i></a></li>
				</ul>
				<div class="theme white" id="changeTheme" onclick="changeTheme()"><button class="Stylebutton">Тема</button></div>
			</div>
		</div>
	</nav>
	<section class="top_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 col-12">
					<br>
					<p>Зарегистрируйтесь, что-бы получать уникальные скидки</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="button">Регистрация</div>
				</div>
			</div>
		</div>
	</section>
	<section class="middle_sec" id="About">
			<div class="container">
				<div class="row">
						<div class="col-12 col-md-7 offset-md-1">
							<div class="text">
								
							</div>
						</div>
						<div class="col-md-4">
							<img src="img/experts.jpg" alt="experts">
						</div>
				</div>
			</div>
	</section>
	<section class="courses" id="course">
		<div class="upper">
			<div class="container">
				<div class="row">
					<div class="col-md-7 offset-md-1">
						<div class="uptext">
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 offset-md-1"><p><span>Наша Лавка</span> </div>
				</div>
			</div>
			<div class="baseng">
			<div class="container">
					<div class="row">
							<?php
                while($course = mysqli_fetch_assoc($courses)){
                	for($i = 0; $course['id'] == 1 && $i == 0; $i++){
                ?>
							<div class="col-12 col-md-3 col-sm-12 firrst">
								<div class="baseng_top"><?php
									echo $course['coursename'];
									?></div>
								
								
							<?php
						}}
							?>
							<?php
                $courses = mysqli_query($connection,"SELECT * FROM `courses` ORDER BY `id`");
                ?>
							<?php
                while($course = mysqli_fetch_assoc($courses)){
                	for($i = 0; $course['id'] == 2 && $i == 0; $i++){
                ?>
							<div class="col-12 col-md-3 col-sm-12 middle">
								<div class="baseng_top_middle"><?php
									echo $course['coursename'];
									?></div>
								<div class="baseng_img middle_list"><img src="img/book.png" alt="logobook"></div>
								<div class="baseng_title"><p>Курс для тех, кто<br>имеет намерение<br>уверенно общаться<br>на английском языке.</p></div>
								<div class="baseng_opportunities middle_list"> <p>Пройдя курс вы сможете:</p></div>
								<div class="baseng_list middle_list">
									<ul>
										<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Сдавать экзамены,<br><span>необходимые для</span><br><span>вступления в ВУЗы</span><br><span>англоязычных стран</span></li>
										<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Выражать свои мысли в<br><span>разных жизненных</span><br><span>ситуациях</span></li>
										<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Общаться по телефону<br><span>с иностранцами</span></li>
										<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Заполнять документы</li>
									</ul>
								</div>
								<div class="baseng_price middle_list">8 занятий по 120 минут = 980 грн / месяц</div>
								<div class="baseng_button middle_list">Записаться</div>
							</div>
							<?php
						}}
							?>
							<?php
                $courses = mysqli_query($connection,"SELECT * FROM `courses` ORDER BY `id`");
                ?>
							<?php
                while($course = mysqli_fetch_assoc($courses)){
                	for($i = 0; $course['id'] == 3 && $i == 0; $i++){
                ?>
							<div class="col-12 col-md-3 col-sm-12 thirdd">
								<div class="baseng_top"><?php
									echo $course['coursename'];
									?></div>
								<div class="baseng_img thirddd"><img src="img/elearning.png" alt="ending"></div>
								<div class="baseng_title thirddd"><p>Курс для тех, кто<br>хочет стать гуру<br>английского языка.</p></div>
								<div class="baseng_opportunities thirddd"> <p>Пройдя курс вы сможете:</p></div>
								<div class="baseng_list thirddd">
									<ul>
										<li class="list_item"><i class="fas fa-check-circle"></i> Идеально чувствовать<br><span>себя</span> в любой<br><span>англоговорящей стране</span></li>
										<li class="list_item"><i class="fas fa-check-circle"></i> Свободно общаться на<br><span>самые разнообразные</span><br><span>темы</span></li>
										<li class="list_item"><i class="fas fa-check-circle"></i> Без проблем разбираться<br><span>абсолютно в любых темах</span></li>
										<li class="list_item"><i class="fas fa-check-circle"></i> Полное преодоление<br><span>языкового барьера</span></li>
									</ul>
								</div>
								<div class="baseng_price">8 занятий по 120 минут = 980 грн / месяц</div>
								<div class="baseng_button_third">Записаться</div>
							</div>
							<?php
						}}
							?>
					</div>
			</div>
		</div>
		</div>
		<div class="line"><img src="img/Line 1.png" alt="horizontal line"></div>
		<div class="mid"></div>
		<div class="bottom">
			<div class="baseng children" id="children">
				<div class="container">
					<div class="row">
						<?php
                $courses = mysqli_query($connection,"SELECT * FROM `courses` ORDER BY `id`");
                ?>
							<?php
                while($course = mysqli_fetch_assoc($courses)){
                	for($i = 0; $course['id'] == 4 && $i == 0; $i++){
                ?>
							<div class="col-12 col-md-3 col-sm-12 first children">
									<div class="baseng_top children"><?php
									echo $course['coursename'];
									?></div>
									<div class="baseng_img children"><img src="img/blocks.png" alt="blocks"></div>
									<div class="baseng_title children"><p>Курс для самых маленьких<br>с занятиями в форме активных, обучающих<br>игр и живого общения.</p></div>
									<div class="baseng_opportunities children"><p>Пройдя курс, ваш<br>ребёнок сможет:</p></div>
									<div class="baseng_list children">
										<ul>
											<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Расширить словарный<br><span>запас</span></li>
											<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Вести простые диалоги </li>
											<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Сочинять простые <br><span>рассказы</span></li>
											<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Научиться читать на<br><span>английском</span></li>
										</ul>
									</div>
									<div class="baseng_price middle_list">8 занятий по 60 минут = 630 грн / месяц</div>
									<div class="baseng_button middle_list">Записаться</div>
								</div>
								<?php
						}}
							?>
							<?php
                $courses = mysqli_query($connection,"SELECT * FROM `courses` ORDER BY `id`");
                ?>
							<?php
                while($course = mysqli_fetch_assoc($courses)){
                	for($i = 0; $course['id'] == 5 && $i == 0; $i++){
                ?>
								<div class="col-12 col-md-3 col-sm-12 middle children">
									<div class="baseng_top_middle children"><?php
									echo $course['coursename'];
									?></div>
									<div class="baseng_img middle_list"><img src="img/backpack.png" alt="rucksuck"></div>
									<div class="baseng_title"><p>Курс для детей, которые желают улучшить свои знания и оценки в школе.</p></div>
									<div class="baseng_opportunities"><p>Пройдя курс, ваш<br>ребёнок сможет:</p></div>
									<div class="baseng_list children">
										<ul>
											<li class="list_item"><i class="fas fa-check-circle"></i> Улучшить свои навыки<br><span>чтения и письма</span></li>
											<li class="list_item"><i class="fas fa-check-circle"></i> Рассказывать о своей<br><span>жизни</span></li>
											<li class="list_item"><i class="fas fa-check-circle"></i> Подтянуть свои знания <br><span>грамматики</span></li>
											<li class="list_item"><i class="fas fa-check-circle"></i> Значительно улучшить <br><span>своё произношение</span></li>
										</ul>
									</div>
									<div class="baseng_price">8 занятий по 60 минут = 630 грн / месяц</div>
									<div class="baseng_button">Записаться</div>
								</div>
								<?php
						}}
							?>
							<?php
                $courses = mysqli_query($connection,"SELECT * FROM `courses` ORDER BY `id`");
                ?>
							<?php
                while($course = mysqli_fetch_assoc($courses)){
                	for($i = 0; $course['id'] == 6 && $i == 0; $i++){
                ?>
								<div class="col-12 col-md-3 col-sm-12 third children">
									<div class="baseng_top children"><?php
									echo $course['coursename'];
									?></div>
									<div class="baseng_img"><img src="img/reading.png" alt="alphabet"></div>
									<div class="baseng_title"><p>Курс для детей, которые самостоятельно увлекаются английским</p></div>
									<div class="baseng_opportunities"><p>Пройдя курс, ваш<br>ребёнок сможет:</p></div>
									<div class="baseng_list">
										<ul>
											<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Использовать лексику и <br><span>грамматику на практике</span></li>
											<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Общаться на основные <br><span>темы своего возраста</span></li>
											<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Читать и писать более <br><span>сложные тексты</span></li>
											<li class="list_item middle_list"><i class="fas fa-check-circle middle_list"></i> Вести переписку с <br><span>англоязычными друзьями</span></li>
										</ul>
									</div>
								<div class="baseng_price middle_list">8 занятий по 60 минут = 630 грн / месяц</div>
								<div class="baseng_button middle_list">Записаться</div>
							</div>
							<?php
						}}
							?>
					</div>
				</div>
			</div>
			<div class="childtext">
				<div class="container">
					<div class="row">
							<div class="col-md-5 offset-md-1">
								<div class="uptext">
									<p>Вместе с <span>EasySpeak</span> Ваш ребёнок сможет с легкостью влиться в изучение английского языка, познакомиться с множеством детей, имеющих общие интересы, а также получить огромный опыт работы в команде, поддерживающей друг друга</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="uptext">
									<p>В дальнейшем, Ваш ребёнок сможет самостоятельно <br>переводить тексты, общаться на английском, без проблем <br>учавствовать в различных олимпиадах. После прохождения <br>курсов <span>EasySpeak</span> для вашего ребёнка не составит проблем <br>сдать любой вступительный экзамен</p>
								</div>
							</div>
					</div>
					<div class="row">
						<div class="col-md-7 offset-md-1">
							<div class="uptexto">
								<h1>Также у нас есть эксклюзивные <br>курсы для <span>детей и подростков</span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-form text-center" id="profile">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-12">
						<h2 id="Sign up">Хотите записаться уже сейчас?</h2>
						<h3>Отправьте заявку и мы Вам перезвоним</h3>
						<p>Наши менеджеры свяжуться с Вами в ближайшее время для уточнения деталей <br>и времени проведения занятий по выбранному Вами курсу.</p>
						<form>
							<div class="row">
							<div class="col-12 col-md-4">
								<input type="text" id="name" class="form-control" placeholder="Введите ваше имя">
							</div>
							<div class="col-12 col-md-4">
								<input type="email" id="email" class="form-control" placeholder="Введите ваш Email">
							</div>
							<div class="col-12 col-md-4">
								<input type="tel" id="number" class="form-control" placeholder="Введите ваш телефон">
							</div>
							<form id = "Dropdown" action="formdata" method="post" name="form1">
									 <p><select name="list1">
									  <option>Выберите желаемый курс</option>
									  <option>Курс базового английского</option>
									  <option>Курс среднего английского</option>
									  <option>Курс продвинутого английского</option>
									  <option>Английский для детей 6-8 лет</option>
									  <option>Английский для детей 8-10 лет</option>
									  <option>Английский для подростков 10-12 лет</option>
									 </select></p>
							</form>

<div class="col-12 col-md-12">
								<button type="button" id="checkButton" class="formbutton">Отправить</button>
							</div>
							</div>
					</form>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer" id="contacts">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-5">
						<div class="contacts">
							<h1>Наши контакты:</h1>
							<p>+380930227873</p>
							<p>+380684582373</p>
							<p>+3809306435427</p>
						</div>
					</div>
					<div class="col-12 col-md-7">
						<div class="branch">
							<h1>Наши филиалы:</h1>
							<p><span>Киев (наш офис), ул. Льва Толстого, 5</span></p>
							<p>Винница, ул. Соборная, 15</p>
							<p>Львов, ул. Сахарова, 31</p>
							<p>Одесса, ул. Академическая, 3</p>
							<p>Харьков, ул. Калинина, 64</p>
							<p>Полтава, ул. Айвовая, 11</p>
						</div>
					</div>
					<div class="col-12 col-md-5">
						<div class="ourmail">
							<h1>Наша почта:</h1>
							<p>Easyspeak@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="socialnetworks">
							<ul class="list-inline d-flex justify-content-center">
								<li class="list-inline-item"><a href="#"><i class="fab fa-vk"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-telegram"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-viber"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-12">
						<h3>&copy; 2020 EasySpeak &copy; All Rights Reserved.</h3>
						<h4>Site by Dmitry Yarechuk</h4>
					</div>
				</div>
			</div>
		</footer>
	<script src="js/jquery-3.0.0.min.js"></script>
	<script>
		function slowScroll (id) {
			var offset = 0;
			$('html, body').animate({
				scrollTop: $(id).offset ().top - offset
			}, 700);
			return false;
		}
	</script>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>