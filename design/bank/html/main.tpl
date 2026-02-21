{* Главная страница магазина *}

{* Для того чтобы обернуть центральный блок в шаблон, отличный от index.tpl *}
{* Укажите нужный шаблон строкой ниже. Это работает и для других модулей *}
{$wrapper = 'index.tpl' scope=parent}

{* Канонический адрес страницы *}
{$canonical="" scope=parent}

{* Заголовок страницы *}

<section class="products-box col">
	<div class="container">
		
		<div class="main-products-title">
			<h3>Вітрина</h3>
			<a class="anim-link" href="/catalog/zoloto"><span>Усі цінні метали </span>
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
				</svg>
			</a>
		</div>
		{* Тело страницы *}
		{$page->body}

		{* Рекомендуемые товары *}
		{get_featured_products var=featured_products limit=8}
		{if $featured_products}
		<!-- Список товаров-->
		<ul class="tiny-products">

			{foreach $featured_products as $product}
			<!-- Товар-->
			<li class="tiny-products__product">
				<!-- Название товара -->
				<a class="tiny-products__product-name" data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a>
				<span class="tiny-products-sku">Арт.{$product->variant->sku}</span>
				<!-- Название товара (The End) -->	
				
				<!-- Фото товара -->
				{if $product->image}
				<div class="tiny-products-image">
					<a href="products/{$product->url}"><img title="{$product->name|escape}" src="{$product->image->filename|resize:300:300}" alt="{$product->name|escape}"></a>
				</div>
				{/if}
				<!-- Фото товара (The End) -->

				{if $product->variants|count > 0}
				<!-- Выбор варианта товара -->
				<form class="variants" action="/cart">
					<table class="tiny-products__product-price">
					{foreach $product->variants as $v}
					<tr>
						<td>
							<input id="featured_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}>
						</td>
						<td>
							{if $v->name}<label class="variant_name" for="featured_{$v->id}">{$v->name}</label>{/if}
						</td>
						<td >
							{if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
							<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
						</td>
					</tr>
					{/foreach}
					</table>
<!--					<input  type="submit" class="btn btn-lg" value="Зробити резерв" data-result-text="Додано">-->
				</form>
				<!-- Выбор варианта товара (The End) -->
				{else}
					Немає в наявності
				{/if}

			</li>
			<!-- Товар (The End)-->
			{/foreach}

		</ul>
		{/if}

		{* Новинки *}
		{get_new_products var=new_products limit=4 in_stock=1}
		{if $new_products}
		<!-- Список товаров-->
		<ul class="tiny-products">

			{foreach $new_products as $product}

			<!-- Товар-->
			<li class="tiny-products__product">

				<!-- Название товара -->
				<a class="tiny-products__product-name" data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a>
				<span class="tiny-products-sku">Арт.{$product->variant->sku}</span>
				<!-- Название товара (The End) -->	
				
				<!-- Фото товара -->
				{if $product->image}
				<div class="tiny-products-image">
					<a href="products/{$product->url}"><img title="{$product->name|escape}" src="{$product->image->filename|resize:300:300}" alt="{$product->name|escape}"></a>
				</div>
				{/if}
				<!-- Фото товара (The End) -->
				{if $product->variants|count > 0}
				<!-- Выбор варианта товара -->
				<form class="variants" action="/cart">
					<table class="tiny-products__product-price">
					{foreach $product->variants as $v}
					<tr>
						<td>
							<input id="new_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}>
						</td>
						<td>
							{if $v->name}<label class="variant_name" for="new_{$v->id}">{$v->name}</label>{/if}
						</td>
						<td >
							{if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
							<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
						</td>
					</tr>
					{/foreach}
					</table>
<!--					<input  type="submit" class="btn btn-lg" value="Зробити резерв" data-result-text="Додано">-->
				</form>
				<!-- Выбор варианта товара (The End) -->
				{else}
					Немає в наявності
				{/if}

			</li>
			<!-- Товар (The End)-->
			{/foreach}

		</ul>
		{/if}	


		{* Акционные товары *}
		{get_discounted_products var=discounted_products limit=8}
		{if $discounted_products}
		<h3>Акционные товары</h3>
		<!-- Список товаров-->
		<ul class="tiny-products">

			{foreach $discounted_products as $product}
			<!-- Товар-->
			<li class="product">

				<!-- Фото товара -->
				{if $product->image}
				<div class="image">
					<a href="products/{$product->url}"><img title="{$product->name|escape}" src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/></a>
				</div>
				{/if}
				<!-- Фото товара (The End) -->

				<!-- Название товара -->
				<a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a>
				<!-- Название товара (The End) -->

				{if $product->variants|count > 0}
				<!-- Выбор варианта товара -->
				<form class="variants" action="/cart">
					<table>
					{foreach $product->variants as $v}
					<tr class="variant">
						<td>
							<input id="discounted_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}>
						</td>
						<td>
							{if $v->name}<label class="variant_name" for="discounted_{$v->id}">{$v->name}</label>{/if}
						</td>
						<td>
							{if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
							<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
						</td>
					</tr>
					{/foreach}
					</table>
					<input type="submit" class="button" value="в корзину" data-result-text="добавлено">
				</form>
				<!-- Выбор варианта товара (The End) -->
				{else}
					Нет в наличии
				{/if}

			</li>
			<!-- Товар (The End)-->
			{/foreach}

		</ul>
		{/if}
			
	</div>
</section>