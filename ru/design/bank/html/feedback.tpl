{* Страница с формой обратной связи *}

<style>
	h1 {
    font-size: clamp(1.8rem, 1.8vw + 2vw, 2.2vw);
    font-weight: 500;
    line-height: 1.1;
    margin-top: -5px;
}
	
	.feedback-box{
		margin-top: 2rem;
	}
	
	.feedback-form{
		    display: flex;
			flex-direction: column;
			gap: 1rem;
	}
	
	.feedback-form input, .feedback-form textarea{
		    padding: 1rem;
			width: 100%;
			border: 1px solid #ccc;
			outline: none;
	}
	
	.feedback-form .btn{
		    align-items: center;
			max-width: 50%;
			align-content: start;
			align-self: flex-start;
			justify-content: center;
			border: 3px solid var(--red);
	}
	
	.feedback-box iframe{
		border: 1px solid #ccc !important;
	}
	
	.input_captcha{
		max-width: 400px;
	}
	
	@media (max-width: 767px){
		.feedback-box{
			padding: 2rem;
		}
		
		.feedback-form .btn{
			max-width: 100%;
		}
	}
</style>

{* Канонический адрес страницы *}
{$canonical="/{$page->url}" scope=parent}

<div class="container padding4 gray-page feedback-box">

	<h1>{$page->name|escape}</h1>

	<div class="body-feedback padding2-0">
		{$page->body}
	</div>
	

<!--
	<h2>Обратная связь</h2>

	{if $message_sent}
		{$name|escape}, ваше сообщение отправлено.
	{else}
	<form class="form feedback-form" method="post">
		{if $error}
		<div class="message_error">
			{if $error=='captcha'}
			Неверно введена капча
			{elseif $error=='empty_name'}
			Введите имя
			{elseif $error=='empty_email'}
			Введите email
			{elseif $error=='empty_text'}
			Введите сообщение
			{/if}
		</div>
		{/if}
		<label>Имя</label>
		<input data-format=".+" data-notice="Введите имя" value="{$name|escape}" name="name" maxlength="255" type="text"/>

		<label>Email</label>
		<input data-format="email" data-notice="Введите email" value="{$email|escape}" name="email" maxlength="255" type="text"/>

		<label>Сообщение</label>
		<textarea data-format=".+" rows="10" data-notice="Введите сообщение" value="{$message|escape}" name="message">{$message|escape}</textarea>

		<input class="btn btn-lg" type="submit" name="feedback" value="Отправить" />

		<div class="captcha"><img src="captcha/image.php?{math equation='rand(10,10000)'}"/></div> 
		<input class="input_captcha" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введите капчу"/>

	</form>
	{/if}
-->
</div>