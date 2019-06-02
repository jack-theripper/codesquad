<div class="uk-flex uk-flex-column uk-overflow-auto uk-height-1-1">
	<div class="uk-navbar-container uk-navbar-transparent">
		<div class="uk-container uk-container-expand">
			<nav id="nav" class="uk-navbar">
				<div class="uk-navbar-left">
					<a href="/" class="uk-navbar-item uk-logo">codesquad</a>
				</div>
				<div class="uk-navbar-right">
					<ul class="uk-navbar-nav uk-visible@m"></ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="uk-grid-collapse uk-child-width-1-2@m uk-flex-1" uk-grid style="margin-top: -80px;">
		<div class="uk-section uk-section-secondary uk-flex uk-flex-middle uk-visible@m">
			<div class="uk-padding">
				<h1 class="uk-heading-medium">Присоединяйтесь к CodeSquad</h1>
				<p class="uk-text-lead">
					Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова,
					которые даже отдалённо не напоминают латынь.
				</p>
			</div>
		</div>
		<div class="uk-section uk-section-muted uk-flex uk-flex-center uk-flex-middle">
			<div class="uk-container">
				<h2>Войти с помощью E-mail <s>без пароля</s></h2>
				<form class="uk-form-stacked uk-align-center" style="max-width: 500px;" action="{{ url(['for': 'signin-provider', 'provider': 'email']) }}" method="post">
					<fieldset class="uk-fieldset">
						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">
								Введите адрес электронной почты, связанный с вашей учетной записью, и мы отправим волшебную ссылку на ваш почтовый ящик
							</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="form-stacked-text" type="text" placeholder="Ваш E-mail адрес">
							</div>
						</div>
						<div class="uk-margin">
							<button class="uk-button uk-button-default" type="submit"><span uk-icon="mail"></span> Получить ссылку</button>
						</div>
					</fieldset>
				</form>
				<h3>Вы можете присоединиться с помощью</h3>
				<a class="uk-button uk-button-default" href="{{ url(['for': 'signin-provider', 'provider': 'github']) }}"><span class="uk-preserve" uk-icon="github"></span> GitHub</a>
				<a class="uk-button uk-button-default" href="{{ url(['for': 'signin-provider', 'provider': 'gitlab']) }}"><span class="uk-preserve" uk-icon="gitlab"></span> GitLab</a>
			</div>
		</div>
	</div>
</div>

<style>
	html {
		overflow: -moz-scrollbars-vertical;
		overflow-y: scroll;
		height: 100%;
		width: 100%;
		overflow-x: hidden;
	}

	body {
		height: 100%;
		width: 100%;
	}

	.section-intro {
		height: 100%;
		width: 100%;
	}
</style>