<?php get_header(); ?> <!--//вставить код из header.php-->
	<nav>
		<!--<ul class="col-md-12 navigation">-->
		<!--	<li>главная</li>-->
		<!--	<li>-->
		<!--		<a href="#">новости</a>-->
		<!--	</li>-->
		<!--	<li>-->
		<!--		<a href="#">прямые эфиры</a>-->
		<!--	</li>-->
		<!--	<li>-->
		<!--		<a href="#">опросы</a>-->
		<!--	</li>-->
		<!--	<li>-->
		<!--		<a href="#">редакция</a>-->
		<!--	</li>-->
		<!--	<li>-->
		<!--		<a href="#">контакты</a>-->
		<!--	</li>-->
		<!--</ul>-->
		<?php 
		$args = array(
			'theme_location' => 'primary'
		);
		wp_nav_menu( $args ); 
		?>
	</nav>
	<div class="main-content">
		<div class="row">
			<div class="col-md-9">
				<?php get_template_part( 'panel-shortly' ); ?>
				<div class="announcement">
					<img id ="announcement__photo1" class="announcement__photo" src="./wp-content/themes/RadioKrasno/images/announcement-photo.jpg" alt="photo"></img>
					<img class="announcement__photo" src="./wp-content/themes/RadioKrasno/images/announcement-photo2.jpg" alt="photo"></img>
					<div class="announcement__inform" id="announcement__inform1">
						<img class="announcement__inform__arrow" src="./wp-content/themes/RadioKrasno/images/red-arrow-piece.png" alt="arrow">
						<div class="announcement__inform_shell" id="announcement__inform_shell1">
							<h5 class="announcement__inform__header" style="color: white;">Пока не грянул гром</h5>
							<p class="announcement__inform__text">Обычно же эти работы компания «МСК» проводит по ночам, чтобы не мешать автомобильному движению.Обычно же эти работы компания «МСК» проводит по ночам, чтобы не мешать автомобильному движению.</p>
						</div>
					</div>
					<div class="announcement__inform" id="announcement__inform2">
						<img class="announcement__inform__arrow" src="./wp-content/themes/RadioKrasno/images/red-arrow-piece.png" alt="arrow">
						<div class="announcement__inform_shell" id="announcement__inform_shell2">
							<h5 class="announcement__inform__header">Радио Красноармейска</h5>
							<p class="announcement__inform__time">18.00-19.30</p>
							<p class="announcement__inform__names">
								Валений Каблуков</br>
								Нина Рогозина</br>
								Любовь Чернышова</br>
								Карина Федотова</br>
							</p>
							<p class="announcement__inform__week-days">
								понедельник</br>
								среда</br> 
								четверг</br>
								пятница</br>
							</p>
						</div>
					</div>
				</div>
				<div class="news">
					<h3>Оперативное совещание в городкой администрации</h3>
					<img class="news__image" src="./wp-content/themes/RadioKrasno/images/news-photo.jpg" alt="image">
					<p class="news__text">
						Квартиры, общежитие, фабричные казармы…
						За 25 лет с того времени, когда многие из этих семей впервые въехали в бывшую фабричную казарму, построив здесь квартиры собственными силами, 
					</p>
				</div>
				<div class="news">
					<h3>Оперативное совещание в городкой администрации</h3>
					<img class="news__image" src="./wp-content/themes/RadioKrasno/images/news-photo2.jpg" alt="image">
					<p class="news__text">
						Квартиры, общежитие, фабричные казармы…
						За 25 лет с того времени, когда многие из этих семей впервые въехали в бывшую фабричную казарму, построив здесь квартиры собственными силами, 
					</p>
				</div>
				<div class="news">
					<h3>Оперативное совещание в городкой администрации</h3>
					<!--<img class="news__image" src="./wp-content/themes/RadioKrasno/images/news-photo.jpg" alt="image">-->
					<p class="news__text-without-image">
						Квартиры, общежитие, фабричные казармы…
						За 25 лет с того времени, когда многие из этих семей впервые въехали в бывшую фабричную казарму, построив здесь квартиры собственными силами,когда многие из этих семей впервые въехали в бывшую фабричную казарму, построив здесь  
					</p>
				</div>
				<div class="news">
					<h3>Оперативное совещание в городкой администрации</h3>
					<img class="news__image" src="./wp-content/themes/RadioKrasno/images/news-photo3.jpg" alt="image">
					<p class="news__text">
						Квартиры, общежитие, фабричные казармы…
						За 25 лет с того времени, когда многие из этих семей впервые въехали в бывшую фабричную казарму, построив здесь квартиры собственными силами, 
					</p>
				</div>
				<div class="news">
					<h3>Оперативное совещание в городкой администрации</h3>
					<img class="news__image" src="./wp-content/themes/RadioKrasno/images/news-photo4.jpg" alt="image">
					<p class="news__text">
						Квартиры, общежитие, фабричные казармы…
						За 25 лет с того времени, когда многие из этих семей впервые въехали в бывшую фабричную казарму, построив здесь квартиры собственными силами, 
					</p>
				</div>
				<div class="news">
					<h3>Оперативное совещание в городкой администрации</h3>
					<img class="news__image" src="./wp-content/themes/RadioKrasno/images/news-photo.jpg" alt="image">
					<p class="news__text">
						Квартиры, общежитие, фабричные казармы…
						За 25 лет с того времени, когда многие из этих семей впервые въехали в бывшую фабричную казарму, построив здесь квартиры собственными силами, 
					</p>
				</div>
			</div>
			<?php get_template_part( 'panel-widgets' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?><!--//вставить код из footer.php (в скобках можно указать имя страницы footer-name, get_footer(theFirst)-->