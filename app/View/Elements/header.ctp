<header class="header">
	<div class="header__inner">
			<div class="up-header">
				<a class="up-header__logo" href="/">
					<img src="/img/logo.png" alt="Логотип" title="На главную">
				</a>
				<div class="up-header__right-part">
						<div class="header-up">
								<a class="header-tel" href="tel:78-38-02">
									<span class="header-tel__small">+7 (7172)</span> 78-38-02
								</a>
								<a class="header-up__lang <?= (Configure::read('Config.language') == 'en')? "header-up__lang--active" : "" ?>" href="/en">in english</a>
								<a class="header-up__lang  <?= (Configure::read('Config.language') == 'ru')? "header-up__lang--active " : "" ?> header-up__lang--borderd" href="/">на руссокм</a>
						</div>
				</div>
				<nav class="nav">
					<ul class="menu">
						<li class="menu__item <?= ($this->request->params['controller']=='pages' && $this->request->params['action']=='index')? "menu__item--active" : "" ?>">
							<a href="/<?$lang?>">Главная</a>
						</li>
						<li class="menu__item <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]=='about')? "menu__item--active" : "" ?>">
							<a href="/<?$lang?>page/about">О компании</a>
						</li>
						<li class="menu__item">
							<a href="production.html">Продукция</a>
						</li>
						<li class="menu__item">
							<a href="/<?$lang?>page/scheme">Схема работы</a>
						</li>
						<li class="menu__item">
							<a href="news.html">Новости</a>
						</li>
						<li class="menu__item <?= ($this->request->params['controller']=='pages' && $this->request->params['action']=='contacts')? "menu__item--active" : "" ?>">
							<a href="/<?$lang?>contacts">Контакты</a>
						</li>								
					</ul>
				</nav>
			</div>
			<div class="header-text">
					<h1 class="header-text__h1">
							Закупка и экспорт<br> 
							<span>сельскохозяйственной продукции</span>
					</h1>
			</div>
	</div>
</header>