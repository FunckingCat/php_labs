<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./reset.css">
	<link rel="stylesheet" href="./style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Redacted+Script:wght@300;400;700&display=swap"
		rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Redacted+Script:wght@300;400;700&display=swap"
		rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Redacted+Script:wght@300;400;700&display=swap"
		rel="stylesheet">
	<title>LAB 2</title>
</head>

<body>
	<header>
		<div class="profile">
			<a href="#">
				<img src="./static/img/moslogo.png" alt="profile picture" class="profpic">
			</a>
		</div>
		<h1>Page 1</h1>
	</header>
	<main>
		<section class="hero" id="hero">
			<div class="content">
				<div class="greet">
					<div class="headers">
						<h2>Hi There, Im</h2>
						<h1>David Zhuravlev</h1>
					</div>
					<img src="./static/svg/peep-8.svg" alt="mascot" class="mascot">
				</div>
				<form method="POST" action= "//httpbin.org/post" class="callform">
					<input name="name" type="text" placeholder="John Phedor" required>
					<input name="phone" type="tel" placeholder="8 (985) 431 31 27" required>
					<input name="anek" type="text" placeholder="Анекдот" required>
					<button type="submit" class="but">SEND</button>
				</form>
				<a href="./page2.php" class="bstyle">
					Перейти на вторую страницу
				</a>
			</div>
		</section>
		<!-- <section class="info" id="info">
			<div class="content">
				<div class="bio">
					<h2>Опыть работы</h2>
					<p>
						<span class="text"> Опыта работы на бевых проектах я не имею </span>Lorem ipsum dolor sit amet
						consectetur adipisicing elit. Id omnis laboriosam mollitia rerum iusto aspernatur, <span
							class="text"> МосПолитех </span>quod qui numquam optio beatae, cupiditate enim vero nobis
						facilis sunt eius sed! Consequatur, ducimus!
						Lorem ipsum, dolor <span class="text"> Школа 21 </span> sit amet consectetur adipisicing elit.
						Praesentium blanditiis fuga, officia voluptates est error beatae modi, <span class="text">
							могу как во front- так и в back-end </span>sapiente explicabo non dolore dignissimos
						incidunt. Ad nobis, amet blanditiis quam repellendus maiores!
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Id omnis <span class="text"> системное
							программирование в UNIX системах </span>laboriosam mollitia rerum iusto aspernatur, quod qui
						numquam optio beatae, cupiditate enim vero nobis facilis sunt eius<span class="text"> около 4
							лет</span> sed! Consequatur, ducimus!
					</p>
				</div>
				<div class="tec">
					<h2>Технологии котрыми я владею</h2>
					<div class="teclist">
						<div class="plate"><img src="./static/svg/Linux.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/bash.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/C.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/Plus.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/Sharp.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/nginx.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/html.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/css.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/scss.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/js.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/react.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/redux.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/postgresql.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/python.svg" alt="tecpic"></div>
						<div class="plate"><img src="./static/svg/django.svg" alt="tecpic"></div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- <section class="cardssec" id="works">
			<div class="content">
				<h2>Also you can ckeck up my work in GitHub and GitLab repos</h2>
				<div class="card">
					<a href="https://github.com/FunckingCat" target="blank">
						<div>
							<img src="./static/svg/github_white.svg" alt="git">
						</div>
						<div class="label">
							<h3>GitHub - FunckingCat</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore minima molestias, vel
								magnam ea facere nostrum porro iste temporibus veritatis magni rerum excepturi numquam
								voluptatum reiciendis commodi saepe, quibusdam illo?</p>
						</div>
					</a>
				</div>
				<div class="card">
					<a href="https://gitlab.com/mospolytech_fit/211-321/zhuravlev-david" target="blank">
						<div>
							<img src="./static/svg/gitlab.svg" alt="git">
						</div>
						<div class="label">
							<h3>GitLab</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore minima molestias, vel
								magnam ea facere nostrum porro iste temporibus veritatis magni rerum excepturi numquam
								voluptatum reiciendis commodi saepe, quibusdam illo?</p>
						</div>
					</a>
				</div>
				<div class="card">
					<a href="http://maket.std-1743.ist.mospolytech.ru/" target="blank">
						<div>
							<img src="./static/svg/Layout.svg" alt="git">
						</div>
						<div class="label">
							<h3>MosPoly Landing From Lab Works</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore minima molestias, vel
								magnam ea facere nostrum porro iste temporibus veritatis magni rerum excepturi numquam
								voluptatum reiciendis commodi saepe, quibusdam illo?</p>
						</div>
					</a>
				</div>
			</div>
		</section> -->
		<!-- <section class="contacts" id="contacts">
			<div class="content">
				<div class="tit">
					<h2>Contact Me</h2>
				</div>
				<div class="left">
					<div class="wrap">
						<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="blank">
							<img src="./static/svg/qr-code.svg" alt="qrcontact">
						</a>
					</div>
				</div>
				<div class="right">
					<a href="https://monday.com/lp/slackintegration/?marketing_source=adwordssearch&marketing_campaign=row-s-comp_slack-e-desk-monday&aw_keyword=slack&aw_match_type=p&cluster=&subcluster=&gclid=Cj0KCQiAzMGNBhCyARIsANpUkzPIDSqpvjG-rcVCUcqvkX3_z-2xneZxsDCce0glCIWr7qVBSMGB_CcaAsG8EALw_wcB"
						target="blank">
						<div class="contact plate">
							<img src="./static/svg/slack.svg" alt="contact">
						</div>
					</a>
					<a href="tg://resolve?domain=zh_david" target="blank">
						<div class="contact plate">
							<img src="./static/svg/telegram.svg" alt="contact">
						</div>
					</a>
					<a href="mailto:david99111@mail.ru" target="blank">
						<div class="contact plate">
							<img src="./static/svg/mail.svg" alt="contact">
						</div>
					</a>
					<a href="https://vk.com/zhdavid" target="blank">
						<div class="contact plate">
							<img src="./static/svg/vk.svg" alt="contact">
						</div>
					</a>
				</div>
			</div>
		</section> -->
		<footer>
			<div class="fio">
				<h3>211-321</h3>
				<h2>Журавлев</h2>
				<h3>Давид</h3>
				<h2>Надо было сделать страницу с формой</h2>
			</div>
		</footer>
	</main>
</body>

</html>