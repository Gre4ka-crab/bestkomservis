<footer class="footer">
		<div class="container">
			<div class="footer__inner">
				<div class="footer__top">
						<a href="#" class="footer__logo"></a>
					<div class="footer__top-left">
						<div class="footer__nav">
							<a href="#" class="footer__nav-item">Услуги</a>
							<a href="#" class="footer__nav-item">Прайс-лист</a>
							<a href="#" class="footer__nav-item">Контакты</a>
						</div>

						<div class="footer__social">
							<div class="footer__social-text">Мы в соцсетях:</div>
							<a href="#" class="footer__social-icon">
								<img src="<?= get_template_directory_uri() ?>/assets/images/icons/youtube.svg" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="footer__info">
					<div class="footer__info-place">г. Москва, Хлебозаводский проезд, 7, стр.9</div>
					<div class="footer__info-tels">
						<span>Тел.:</span>
						<a href="tel:84993945161" class="footer__info-tel">+7 (499) 394-51-61</a><span>,</span>
						<a href="tel:89165456600" class="footer__info-tel">+7 (916) 545-66-00</a>
					</div>
					<div class="footer__info-mail">
						<span>E-mail: </span><a href="mailto:bсserviсеs@mail.ru" class="footer__info-tel">bсserviсеs@mail.ru</a>
					</div>
				</div>
				<div class="footer__bottom">
					<div class="footer__bottom-left">ООО "Бесткомсервис" (с) 2021. Все права защищены.</div>
					<div class="footer__bottom-right">
						Разработка сайта
						<a href="#" target="_blank" class="footer__bottom-link"></a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<div class="modal" id="modal">
		<div class="form">
			<div class="form__title">Срочный вызов</div>
			<input type="text" class="form__input" placeholder="Введите имя">
			<input type="text" class="form__input" placeholder="Номер телефона">
			<input type="text" class="form__input" placeholder="Услуга">
			<textarea class="form__textarea" placeholder="Комментарий к заявке (при необходимости)"></textarea>
			<button class="btn form__btn">Отправить заявку</button>
		</div>
	</div>

<?php wp_footer(); ?>
</body>
</html>
