<div class="form-product__container">
	<button class="form-product__close">
		<i class="form-product__close-icon material-icons">close</i>
	</button>
	<div class="form-product__modal">
		<div class="form-product__item">
			<img class="form-product__images" src="/../images/productImages.png" alt="product">
			<h2 class="form-product__heading"><?= $this->getVariable('title') ?></h2>
			<p class="form-product__price"><?= $this->getVariable('price') ?> ₽</p>
		</div>
		<div class="form-product__round"></div>
	</div>
	<div class="form-product__container-info">
		<div class="form-product__info">
			<h2 class="form-product__info-heading">Оформление заказа</h2>
		</div>
		<form class="form-product__main-form" method="post" action="/">
			<div class="form-product__container-input">
				<label class="form-product__label" for="name">Имя</label>
				<input class="form-product__input" id="name" name="name" type="text">
			</div>
			<div class="form-product__container-input">
				<label class="form-product__label" for="surname">Фамилия</label>
				<input class="form-product__input" id="surname" name="surname" type="text">
			</div>
			<div class="form-product__container-input">
				<label class="form-product__label" for="address">Адрес доставки</label>
				<input class="form-product__input" id="address" name="address" type="text">
			</div>
			<div class="form-product__container-input">
				<label class="form-product__label" for="cardNumber">Номер карты</label>
				<input class="form-product__input" id="cardNumber" name="cardNumber" type="number">
			</div>
			<div class="form-product__date-container">
				<div class="form-product__container-input">
					<label class="form-product__label" for="month">Дата окончания</label><br>
					<div class="form-product__date-input">
						<input class="form-product__input form-product__input-date" name="month" id="month" type="text"
							   required placeholder="MM">
						<input class="form-product__input form-product__input-date" name="year" id="year" type="text"
							   required placeholder="YY">
					</div>
				</div>
				<div class="form-product__container-input">
					<label class="form-product__label" for="cvc">CVC</label>
					<input class="form-product__input form-product__input-cvc" id="cvc" name="cvc" type="number">
				</div>
			</div>
			<button class="form-product__submit" type="submit">Купить</button>
		</form>
	</div>
</div>