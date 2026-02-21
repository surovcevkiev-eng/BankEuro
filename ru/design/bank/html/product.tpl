{* Страница товара *}

{* Канонический адрес страницы *}
{$canonical="/products/{$product->url}" scope=parent}

{$meta_title = "`$product->name|escape` `$product->brand->name|escape`, цена `$product->variant->price|convert` `$currency->sign|escape` | Goldrwsbank" scope=parent}


 <script type="application/ld+json">
    {
	  "@context" : "http://schema.org",
	  "@type" : "Product",
	  "name" : "{$product->name|escape}",
	  "image" : "{$product->image->filename|resize:500:500}",
	  "description" :"{$product->body|strip_tags:false}",
	  "sku": "{$product->id}",
		  "offers" : {
			"@type": "Offer",
			"url": "https://goldrwsbank.com.ua/products/{$product->url}",
			"availability": "http://schema.org/InStock",
			"price" : "{$product->variant->price|strip}",
			"priceCurrency" : "UAH"
		  }
	  }
    </script>


<meta property="og:url" content="http://bank.asterr.com.ua/{$canonical}">
<meta property="og:description" content="{$meta_description|escape}">
<link href="design/{$settings->theme|escape}/css/menu-style.css" rel="stylesheet" type="text/css" media="screen">
<link href="design/{$settings->theme|escape}/css/product.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/jquery.dcjqaccordion.2.9.js"></script> 
{literal} 
<script>
	$(document).ready(function($){$('#accordion-1').dcAccordion({classParent : 'accordion-parent', // class li
		classActive : 'active', // calss если активирована сылка
		classArrow : 'accordion-icon', // class иконки
		classCount : 'accordion-count', // class в котором выводится кол-во пунктов в меню
		classExpand : 'accordion-current-parent', // ...
		eventType: 'click', // варинт работы меню "hover" - при наведении "click" - при нажатии
		hoverDelay: 15, // скорость появления подпунктов
		menuClose: true, // ...
		autoClose: true, // скрытие подменю, если наводим на другой пункт меню
		saveState: false, // сохранение перехода и добавление класса 
		activeautoExpand: false, // ...										 
		showCount: false, // показывать кол-во пунктов в меню false или true
		disableLink: false, // активна ссылка - "false" - нет, "true" - да (используется с eventType: 'hover')
		speed: 'fast' // ...
		});
	});
	</script> 
{/literal}
	{* END : Аккордеон меню *}

<div id="menu-left-box" class="modal-info">
		<div class="modal-inner">
			<div class="modal-inner-header">
				<svg id="close-menu-left-btn" style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
				</svg>
			</div>
			<div class="modal-inner-container width100">
				<div class="sidebar-title"> Виды слитков </div>
				<!-- Меню каталога -->
				  <div id="catalog_menu" class="sidebar-menu"> {* Рекурсивная функция вывода дерева категорий *}
						{function name=categories_tree}
							{if $categories}
								{foreach $categories as $c}
									{if $c->visible}
										<li>
											<a href="catalog/{$c->url}" data-category="{$c->id}" {if $category->id == $c->id}class="active"{/if}>{$c->name}</a>
											<a class="p_acc"></a>

										{if $c->subcategories}<ul>{categories_tree categories=$c->subcategories}</ul>{/if}
										</li>
									{/if}
								{/foreach}
							{/if} 
						{/function}
						<ul class="accordion" id="accordion-1">
						  {categories_tree categories=$categories}
						</ul>
					</div>
					<!-- Меню каталога (The End)--> 
			</div>
		</div>
	</div>	

<section class="header-product gray-page padding2-0">
  <div class="container">
    <div class="product-header-menu">
		<button id="menu-left-btn" class="menu-white"> 
			<svg style="width:24px;height:24px" viewBox="0 0 24 24">
				<path fill="currentColor" d="M21,15.61L19.59,17L14.58,12L19.59,7L21,8.39L17.44,12L21,15.61M3,6H16V8H3V6M3,13V11H13V13H3M3,18V16H16V18H3Z" />
			</svg>			
			Каталог товаров
		</button>
		<!-- Хлебные крошки /-->
		<div id="path" class="product-header-bread bread-crumbs padding0"> <a class="bread-crumbs--active" href="/ru/">Главная</a> {foreach $category->path as $cat}
		  / <a class="bread-crumbs--active" href="catalog/{$cat->url}">{$cat->name|escape}</a> {/foreach}
		  {if $brand}
		  / <a class="bread-crumbs--active" href="catalog/{$cat->url}/{$brand->url}">{$brand->name|escape}</a> {/if}
		  / <a class="bread-crumbs--active">{$product->name|escape}</a> </div>
		<!-- Хлебные крошки #End /--> 
	  </div>
	</div>	  
</section>
<section class="product-main">
  <div class="container">
    <div class="product padding4-0">
	  <div class="product-top-section">
		  <div class="product-img-box">
			<!-- Дополнительные фото продукта -->   
			<div class="dop-foto">{if $product->images|count>1}<div class="images">{foreach $product->images|cut as $i=>$image}<a href="{$image->filename|resize:1100:800:w}" class="zoom" rel="group"><img title="{$product->name|escape}" src="{$image->filename|resize:65:65}" alt="{$product->name|escape}"></a>{/foreach}</div>{/if}</div> 			 
			  <!-- Дополнительные фото продукта (The End)--> 
			 <!-- Большое фото -->
			 <div class="big-foto"> 
			  {if $product->image}
				  <div class="image">
					  <a href="{$product->image->filename|resize:1100:800:w}" class="zoom" rel="group">
						  <img title="{$product->name|escape}" src="{$product->image->filename|resize:410:410}" alt="{$product->product->name|escape}">
					  </a>
				  </div>
			  {/if} 
		    </div>	 
			 <!-- Большое фото (The End)--> 
		  </div>
		  <div class="product-bay-box">
			<h1 data-product="{$product->id}">{$product->name|escape}</h1>
			
			<div class="bay-box gray-page">
				{if $product->variants|count > 0} 
				<div class="bay-box-have">
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
					</svg>
					<span>В наличии</span>
				</div>
				<div class="bay-box-sku">
					Арт.{$product->variant->sku}
				</div>
				
				<!-- Выбор варианта товара -->
				<div class="bay-box-variants">
					<div class="bay-box-variants__item">
						<form class="variants" action="/cart">
							  <table>
								{foreach $product->variants as $v}
								<tr class="variant">
<!--
								  <td>
									<input id="product_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $product->
									variant->id==$v->id}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}> 
								  </td>
-->
								  <td> {if $v->name}
									<label class="variant_name" for="product_{$v->id}">{$v->name}</label>
									{/if} </td>
								  <td class="variant-price-box">
									  <div class="variants-price">{$v->price|convert} 
										  <span class="currency">{$currency->sign|escape}</span>
									  </div>
									  <div class="variants-button">
<!--									  	<input type="submit" class="button" value="Сделать резерв" data-result-text="В корзине">-->
									  </div>
								  </td>
								</tr>
								{/foreach}
							  </table>
							  
						</form>
					</div>
					<div class="bay-box-variants__item">
						<a class="telegram-link" href="https://t.me/RwSbankGOLDbot">
							<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
								width="28" height="28"
								viewBox="0 0 50 50">
								<path d="M46.137,6.552c-0.75-0.636-1.928-0.727-3.146-0.238l-0.002,0C41.708,6.828,6.728,21.832,5.304,22.445	c-0.259,0.09-2.521,0.934-2.288,2.814c0.208,1.695,2.026,2.397,2.248,2.478l8.893,3.045c0.59,1.964,2.765,9.21,3.246,10.758	c0.3,0.965,0.789,2.233,1.646,2.494c0.752,0.29,1.5,0.025,1.984-0.355l5.437-5.043l8.777,6.845l0.209,0.125	c0.596,0.264,1.167,0.396,1.712,0.396c0.421,0,0.825-0.079,1.211-0.237c1.315-0.54,1.841-1.793,1.896-1.935l6.556-34.077	C47.231,7.933,46.675,7.007,46.137,6.552z M22,32l-3,8l-3-10l23-17L22,32z"></path>
							</svg>
							<p>
								Актуальные оптовые цены
								<span>Быть в курсе 24/7 </span>
							</p>
						</a>
					</div>
				</div>	
				<!-- Выбор варианта товара (The End) --> 
				
				{else}
					Нет в наличии
				{/if}
			</div>
			  
			<div class="product-bay-information">
			  <a id="btn-work" class="product-bay-information__item">
			  		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z" />
					</svg>
				  	<span>
				  		График работы
				    </span>
			  </a>
			  <a id="btn-address" class="product-bay-information__item">
			  		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M12 4C14.2 4 16 5.8 16 8C16 10.1 13.9 13.5 12 15.9C10.1 13.4 8 10.1 8 8C8 5.8 9.8 4 12 4M12 2C8.7 2 6 4.7 6 8C6 12.5 12 19 12 19S18 12.4 18 8C18 4.7 15.3 2 12 2M12 6C10.9 6 10 6.9 10 8S10.9 10 12 10 14 9.1 14 8 13.1 6 12 6M20 19C20 21.2 16.4 23 12 23S4 21.2 4 19C4 17.7 5.2 16.6 7.1 15.8L7.7 16.7C6.7 17.2 6 17.8 6 18.5C6 19.9 8.7 21 12 21S18 19.9 18 18.5C18 17.8 17.3 17.2 16.2 16.7L16.8 15.8C18.8 16.6 20 17.7 20 19Z" />
					</svg>
				  	<span>
				  		Адрес и контакты
				    </span>
			  </a>
			  <a id="btn-return" class="product-bay-information__item">
			  		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M19,7V11H5.83L9.41,7.41L8,6L2,12L8,18L9.41,16.58L5.83,13H21V7H19Z" />
					</svg>
				  	<span>
				  		Условия возврата
				    </span>
			  </a>
				<a id="btn-consultation" class="product-bay-information__item">
			  		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M13.5,4A1.5,1.5 0 0,0 12,5.5A1.5,1.5 0 0,0 13.5,7A1.5,1.5 0 0,0 15,5.5A1.5,1.5 0 0,0 13.5,4M13.14,8.77C11.95,8.87 8.7,11.46 8.7,11.46C8.5,11.61 8.56,11.6 8.72,11.88C8.88,12.15 8.86,12.17 9.05,12.04C9.25,11.91 9.58,11.7 10.13,11.36C12.25,10 10.47,13.14 9.56,18.43C9.2,21.05 11.56,19.7 12.17,19.3C12.77,18.91 14.38,17.8 14.54,17.69C14.76,17.54 14.6,17.42 14.43,17.17C14.31,17 14.19,17.12 14.19,17.12C13.54,17.55 12.35,18.45 12.19,17.88C12,17.31 13.22,13.4 13.89,10.71C14,10.07 14.3,8.67 13.14,8.77Z" />
					</svg>
				  	<span>
				  		Консультация
				    </span>
			  </a>
			</div>  
			  
			<div class="product-bay-information-link">
				<a class="product-bay-information-link__item" href="#features">Характеристики</a>
				<a class="product-bay-information-link__item" href="#description">Описание</a>
				<a class="product-bay-information-link__item" href="#comments">Отзывы и вопросы</a>
				<a class="product-bay-information-link__item" href="#relatedProducts">Похожие товары</a>
			</div>	
			  
		  </div>
	  </div>
		
	 <!-- Характеристики товара -->	 	
	 <div id="features" class="product-features paddingtop-3">
	 	{if $product->features} 
		  <h3>Характеристики <span>{$product->name|escape}</span></h3>
		  <ul class="features padding2-0">
			{foreach $product->features as $f}
			<li>
			  <label>{$f->name}:</label>
			  <span>{$f->value}</span> </li>
			{/foreach}
		  </ul>
	 	{/if} 
	 </div>
      <!-- Характеристики товара (The End)--> 	
		
      <!-- Описание товара -->
      <div id="description" class="product-description paddingtop-2"> 
		{if $product->body} 
			<h3>Описание <span>{$product->name|escape}</span></h3>
		{/if}
			<div class="product-body padding2-0">
			  {$product->body}
			</div>
      </div>
      <!-- Описание товара (The End)--> 
		
	<div id="comments" class="comments-box grid paddingtop-1">
		<!-- Комментарии -->
			<!--Форма отправления комментария-->
			<div class="comments-box__item comment-form">
		      <h3 class="padding1-0">Оставить отзыв</h3>
			  <form method="post" class="gray-page padding2">
				{if $error}
				<div class="message-error"> {if $error=='captcha'}
				  Неверно введена капча
				  {elseif $error=='empty_name'}
				  Введите имя
				  {elseif $error=='empty_comment'}
				  Введите комментарий
				  {/if} </div>
				{/if}
				<div class="comments-box-form">
				  <label for="comment_name">Ваше имя</label>
				  <input class="input_name" type="text" id="comment_name" name="name" value="{$comment_name}" data-format=".+" data-notice="Ваше имя">
				  <label for="comment_text">Ваш отзыв</label>
				  <textarea class="comment-textarea" rows="5" id="comment_text" name="text" data-format=".+" data-notice="Ваш отзыв">{$comment_text}</textarea>
				  <input class="button" type="submit" name="comment" value="Оставить отзыв">
				  <label for="comment_captcha">Число для проверки</label>
				  <div class="captcha">
					  <img src="captcha/image.php?{math equation='rand(10,10000)'}" alt='captcha'>
					  <input id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введите капчу">
				  </div>
				  
				</div>
			  </form>
			</div>
			<!--Форма отправления комментария (The End)-->
			<div class="comments-box__item">
			  <h3 class="padding1-0">Отзывы покупателей</h3>
			  {if $comments} 
			  <!-- Список с комментариями -->
			  <ul class="comment-list">
				{foreach $comments as $comment}
					<li> 
					  <a class="alert-moderation" name="comment_{$comment->id}"></a>	
					  <!-- Имя и дата комментария-->
					  <div class="comment-header"> 
						  <p>
							  <span class="comment_header-name">{$comment->name|escape}</span>
							  <span class="comment_header-data-time">{$comment->date|date}, {$comment->date|time}</span>
						   	  <span class="comment_header-data-approved">{if !$comment->approved}ожидает модерации{/if}</span>
						  </p> 
				  	  </div>
					  <!-- Имя и дата комментария (The End)--> 
					  <!-- Комментарий --> 
					  <p class="paddingtop-s5">{$comment->text|escape|nl2br} </p>
					  <!-- Комментарий (The End)--> 
					</li>
				{/foreach}
			  </ul>
			  <!-- Список с комментариями (The End)--> 
			  {else}
			  <p> Пока нет комментариев </p>
			  {/if} 
			</div>
    	<!-- Комментарии (The End) -->  
	</div>
  </div>
  </div>	  
</section>
	
<section id="relatedProducts" class="gray-page">
	<div class="related-products container padding4-0">
  	{* Связанные товары *}
    {if $related_products}
    <h3>Подобные товары компании</h3>
    <!-- Список каталога товаров-->
    <ul class="tiny-products paddingtop-2">
      {foreach $related_products as $related_product} 
      <!-- Товар-->
      <li class="tiny-products__product"> 
        <!-- Название товара -->
        <h3 class="tiny-products__product-name">
			<a data-product="{$related_product->id}" href="products/{$related_product->url}">{$related_product->name|escape}</a>
		</h3>
		  <span class="tiny-products-sku">Арт.{$product->variant->sku}</span>
        <!-- Название товара (The End) --> 
		  
        <!-- Фото товара --> 
        {if $related_product->image}
        <div class="tiny-products-image">
			<a href="products/{$related_product->url}">
				<img title="{$related_product->name|escape}" src="{$related_product->image->filename|resize:300:300}" alt="{$related_product->name|escape}"/>
			</a>
		</div>
        {/if} 
        <!-- Фото товара (The End) --> 
        
        {if $related_product->variants|count > 0} 
        <!-- Выбор варианта товара -->
        <form class="variants" action="/cart">
          <table class="tiny-products__product-price">
            {foreach $related_product->variants as $v}
            <tr class="variant">
              <td><input id="related_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton"  {if $v@first}checked{/if} {if $related_product->
                variants|count<2} style="display:none;"{/if}> </td>
              <td> {if $v->name}
                <label class="variant_name" for="related_{$v->id}">{$v->name}</label>
                {/if} </td>
              <td> {if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if} <span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span></td>
            </tr>
            {/foreach}
          </table>
		  <input type="submit" class="btn btn-lg" value="Сделать резерв" data-result-text="Добавлено">
        </form>
        <!-- Выбор варианта товара (The End) --> 
        {else}
        Нет в наличии
        {/if} </li>
      <!-- Товар (The End)--> 
      {/foreach}
    </ul>
    {/if}
  </div>	  	
</section>

<div id="modal-work" class="modal-info">
	<div class="modal-inner">
		<div class="modal-inner-header">
			<svg id="close-modal-info-work" style="width:24px;height:24px" viewBox="0 0 24 24">
				<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
			</svg>
		</div>
		<div class="modal-inner-container">
			<table class="work-clockinfo">
				<tr>
					<td>День</td>
					<td>Время работы</td>
				</tr>
                <tr>
					<td>Понедельник</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Вторник</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Среда</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Четверг</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Четверг</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Суббота</td>
					<td>Выходной</td>
				</tr>
				<tr>
					<td>Воскресенье</td>
					<td>Выходной</td>
				</tr>
			</table>
			<small>*Время указано для Киева</small>
		</div>
	</div>
</div>
	
<div id="modal-address" class="modal-info">
	<div class="modal-inner">
		<div class="modal-inner-header">
			<svg id="close-modal-info-address" style="width:24px;height:24px" viewBox="0 0 24 24">
				<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
			</svg>
		</div>
		<div class="modal-inner-container modal-address-box">
			<div class="modal-inner-container__item">
				<p><b>Телефон:</b></p>
				<a href="tel:+380635680886">+380 (63) 568-08-86 <span>Lifecell</span></a>
				<a href="tel:+380685680886">+380 (68) 568-08-86 <span>Kyivstar</span></a> 
				<a href="tel:+380635680886">+380 (50) 568-08-86 <span>Vodafone</span></a>
				<a href="tel:+380445680886">+380 (44) 568-08-86 <span>городской Киев</span></a> 
			</div>
			<div class="modal-inner-container__item">
				<p><b>Адрес:</b> ул. Белорусская д.8, Киев, Украина</p>
			</div>
			<div class="modal-inner-container__item">
				<p><b>Email:</b><a href="mailto:savych.i@rwsbank.com.ua"> savych.i@rwsbank.com.ua</a></p>
			</div>
			<div class="modal-inner-container__item">
				<p><b>Telegram:</b> +380635680886</p>
			</div>
			<div class="modal-inner-container__item">
				<p><b>Viber:</b> +380635680886</p>
			</div>
			<div class="modal-inner-container__item">
				<p><b>WhatsApp:</b> +380635680886</p>
			</div>
		</div>
	</div>
</div>
	
<div id="modal-return" class="modal-info">
	<div class="modal-inner">
		<div class="modal-inner-header">
			<svg id="close-modal-info-return" style="width:24px;height:24px" viewBox="0 0 24 24">
				<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
			</svg>
		</div>
		<div class="modal-inner-container modal-zakon">
<!--
			<h4>Компания руководствуется Законом <a href="https://zakon.rada.gov.ua/laws/show/1023-12#Text" target="_blank">«О защите прав потребителей»</a> по вопросам возврата и обмена товаров надлежащего качества.</h4>
			<p>Согласно Закону <a href="https://zakon.rada.gov.ua/laws/show/1023-12#Text">«О защите прав потребителей»</a>, компания может отказать потребителю в обмене и возврате товаров надлежащего качества, если они относятся к категориям, указанным в действующем <a href="https://zakon.rada.gov.ua/laws/show/172-94-%D0%BF#Text" target="_blank">Перечень непродовольственных товаров надлежащего качества, не подлежащих возврату и обмену.</a>
			</p>
			<p>
			Товары надлежащего качества, для которых разрешен возврат и обмен, могут быть возвращены в течение 14 дней после получения покупателем, если:
			</p>
			<ul>
				<li>товар не был в употреблении и не имеет следов использования потребителем: царапин, сколов, потертостей, пятен и т.п.;</li>
				<li>товар полностью укомплектован и сохранена фабричная упаковка;</li>
				<li>сохранены все ярлыки и заводская маркировка;</li>
				<li>товар сохраняет товарный вид и потребительские свойства.</li>
			</ul>
-->
			<p>В случае обращения Клиента с отказом от сделки по покупке - продаже банковских металлов, Кассир обязан
осуществить операцию по возврату Клиенту соответствующей суммы средств или банковского металла, но не позднее 15 минут после проведения такой операции при условии наличия этих средств в кассе, и при условии, что банковские металлы не покидали пределы кассы.</p>
		</div>
	</div>
</div>
	
<div id="modal-consultation" class="modal-info">
	<div class="modal-inner">
		<div class="modal-inner-header">
			<svg id="close-modal-info-consultation" style="width:24px;height:24px" viewBox="0 0 24 24">
				<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
			</svg>
		</div>
		<div class="modal-inner-container">
			<form class="form form-consultation" action="ajax/callback_forrm.php" method="post" id="form">
				  <fieldset>
					  <p><b>Оставьте сообщение:</b></p>
					  Ваше имя:
					  <input type="text" id="inpt" name="name" required>
					  Номер телефона:
					  <input type="text" id="inptphone" name="phone" required>
					  Сообщение:
					  <textarea rows="6" name="message" id="message" required></textarea>
					  <input type="submit" name="submit" value="Отправить вопрос" class="button" id="buton">
				  </fieldset>
			  </form>
			  <div class="overlay js-overlay-thank-you" style="display: none;">
                    <div class="popup js-thank-you paddingtop-1">
                        <p><b>Спасибо за заявку. Мы свяжемся с вами в ближайшее время!</b></p>
                        <div class="close-popup js-close-thank-you "></div>
                    </div>
             </div>
		</div>
	</div>
</div>	

{literal}
	<script>
		$(document).ready(function() {
    $("#form").submit(function(e){
        e.preventDefault();
        if(document.getElementById('form').name.value == '' || document.getElementById('form').phone.value == ''){
            valid = false;
            return valid;
        }
        $.ajax({
            type: "POST",
            url: "ajax/callback_forrm.php",
            data: $(this).serialize(),
            success: function(data){
                $(".js-overlay-thank-you").fadeIn();
                $(this).find("input").val('');
                $("#form").trigger("reset");
            },
            error: function(jqXHR, exception) {
                console.log(jqXHR);
                console.log(exception);
            }
        });
        return;
    });
});
//закрыть форму
$(".js-close-thank-you").click(function() { 
    $(".js-overlay-thank-you").fadeOut();
});
$(document).mouseup(function (e) { 
    var popup = $(".popup");
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
        $(".js-overlay-thank-you").fadeOut();
    }
});
	</script>
{/literal}
	
{* Увеличитель картинок *}
{literal} 
<script src="js/fancybox/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
<script>
$(function() {
	// Раскраска строк характеристик
	$(".features li:even").addClass('even');

	// Зум картинок
	$("a.zoom").fancybox({
		prevEffect	: 'fade',
		nextEffect	: 'fade'});
	});
</script> 
{/literal}
	
{literal}
<script>
document.getElementById('btn-work').onclick = function() {
	document.getElementById('modal-work').classList.toggle('visible-work');  
	document.body.classList.toggle('overflow-hide'); 
}
document.getElementById('btn-address').onclick = function() {
	document.getElementById('modal-address').classList.toggle('visible-address');
	document.body.classList.toggle('overflow-hide'); 
}	
document.getElementById('btn-return').onclick = function() {
	document.getElementById('modal-return').classList.toggle('visible-return');
	document.body.classList.toggle('overflow-hide'); 
}	
document.getElementById('btn-consultation').onclick = function() {
	document.getElementById('modal-consultation').classList.toggle('visible-consultation');
	document.body.classList.toggle('overflow-hide'); 
}

document.getElementById('menu-left-btn').onclick = function() {
	document.getElementById('menu-left-box').classList.toggle('visible-menu-left'); 
	document.body.classList.toggle('overflow-hide'); 
}

document.getElementById('close-modal-info-work').onclick = function() {
	document.getElementById('modal-work').classList.remove('visible-work');
	document.body.classList.toggle('overflow-hide'); 
}
document.getElementById('close-modal-info-address').onclick = function() {  
	document.getElementById('modal-address').classList.remove('visible-address');
	document.body.classList.toggle('overflow-hide'); 
}
document.getElementById('close-modal-info-return').onclick = function() {
	document.getElementById('modal-return').classList.remove('visible-return');
	document.body.classList.toggle('overflow-hide'); 
}
document.getElementById('close-modal-info-consultation').onclick = function() {
	document.getElementById('modal-consultation').classList.remove('visible-consultation');
	document.body.classList.toggle('overflow-hide'); 
}

document.getElementById('close-menu-left-btn').onclick = function() {
	document.getElementById('menu-left-box').classList.remove('visible-menu-left');
	document.body.classList.toggle('overflow-hide'); 
}
</script>
{/literal}