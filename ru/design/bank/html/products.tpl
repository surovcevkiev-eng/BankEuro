{* Список товаров *}

{* Канонический адрес страницы *}
{if $category && $brand}
{$canonical="/catalog/{$category->url}/{$brand->url}" scope=parent}
{elseif $category}
{$canonical="/catalog/{$category->url}" scope=parent}
{elseif $brand}
{$canonical="/brands/{$brand->url}" scope=parent}
{elseif $keyword}
{$canonical="/products?keyword={$keyword|escape}" scope=parent}
{else}
{$canonical="/products" scope=parent}
{/if}
<link href="design/{$settings->theme|escape}/css/catalog.css?v=1" rel="stylesheet" type="text/css" media="screen"/>
<script src="js/jquery.dcjqaccordion.2.9.js"></script> 
{literal} 
<script type="text/javascript">
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
<section class="gray-page">
  <div class="container products-pege col-catalog">
    <div class="sidebar">
	  <div id="menuSidebar" class="mobile-sidebar modal-info">	
		  <div class="modal-inner">
			  <div class="modal-inner-header visible-xs">
				<svg id="close-menu-left-btn" style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
				</svg>
			  </div>
			  <div class="modal-inner-container">
				  <div class="sidebar-title"> Виды слитков </div>
				  <!-- Меню каталога -->
				  <div id="catalog_menu" class="sidebar-menu border-bottom2x"> {* Рекурсивная функция вывода дерева категорий *}
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
					<!-- Меню каталога (The End)--> 

				  </div>
			  </div>
		  </div>
	  </div>		  
	
	 <div id="features-modal" class="modal-info">
		 <div class="modal-inner">
			 <div class="modal-inner-header visible-xs">
				<svg id="close-features-modal" style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
				</svg>
			</div>
			 <div class="modal-inner-container modal-scroll-y">
			  <div class="features-box">
					{* Фильтр по свойствам *}
					  {if $features}
					  <table id="features" class="features-table">
						{foreach $features as $key=>$f}
						<tr>
						  <td class="feature-name" data-feature="{$f->id}"> {$f->name}: </td>
						  <td class="feature-values"><a href="{url params=[$f->id=>null, page=>null]}" {if !$smarty.get.$key}class="selected"{/if}>Все</a> {foreach $f->options as $o} <a href="{url params=[$f->id=>$o->value, page=>null]}" {if $smarty.get.$key == $o->value}class="selected"{/if}>{$o->value|escape}</a> {/foreach} </td>
						</tr>
						{/foreach}
					  </table>
					  {/if}	
				  </div>
				   <!-- Все бренды в категории --> 
				  <div class="padding2-0 border-bottom2x all-brands-box">{if $category->brands}<div id="brands" class="brands-box"><a href="catalog/{$category->url}" {if !$brand->id}class="selected"{/if}>Все бренды</a>{foreach $category->brands as $b}{if $b->image}<a data-brand="{$b->id}" href="catalog/{$category->url}/{$b->url}"><img src="{$config->brands_images_dir}{$b->image}" alt="{$b->name|escape}"></a>{else}<a data-brand="{$b->id}" href="catalog/{$category->url}/{$b->url}" {if $b->id == $brand->id}class="selected"{/if}>{$b->name|escape}</a>{/if}{/foreach}</div>{/if}</div>	
					<!-- Все бренды в категории(The End) -->
		 	</div>
		 </div>			 
	</div>	
		
		

      <!-- Просмотренные товары --> 
	  <div class="browse-box padding2-0">
		  {get_browsed_products var=browsed_products limit=20}
		  {if $browsed_products}
		  <h4 class="padding1-0">Вы просматривали:</h4>
		  <ul id="browsed_products" class="">
			{foreach $browsed_products as $browsed_product}
				<li>
					<a href="products/{$browsed_product->url}">
						<img src="{$browsed_product->image->filename|resize:46:46}" alt="{$browsed_product->name|escape}" title="{$browsed_product->name|escape}">
					</a>
				</li>
			{/foreach}
		  </ul>
		  {/if} 
      </div>
	  <!-- Просмотренные товары (The End)--> 
    </div>
	  
    <div class="products-pege-main">
		<div class="btns-catalog">	
			 <button id="menu-left-btn" class="menu-white visible-xs"> 
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M21,15.61L19.59,17L14.58,12L19.59,7L21,8.39L17.44,12L21,15.61M3,6H16V8H3V6M3,13V11H13V13H3M3,18V16H16V18H3Z" />
				</svg>			
				Каталог товаров
			 </button>
			 <button id="menu-filtr-btn" class="menu-white visible-xs"> 
				<svg style="width:36px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M15,19.88C15.04,20.18 14.94,20.5 14.71,20.71C14.32,21.1 13.69,21.1 13.3,20.71L9.29,16.7C9.06,16.47 8.96,16.16 9,15.87V10.75L4.21,4.62C3.87,4.19 3.95,3.56 4.38,3.22C4.57,3.08 4.78,3 5,3V3H19V3C19.22,3 19.43,3.08 19.62,3.22C20.05,3.56 20.13,4.19 19.79,4.62L15,10.75V19.88M7.04,5L11,10.06V15.58L13,17.58V10.05L16.96,5H7.04Z" />
				</svg>
			 </button>
		 </div>		
      <!-- Хлебные крошки /-->
      <div id="path" class="bread-crumbs"> <a href="/ru/">Главная</a> {if $category}
        {foreach $category->path as $cat}
        / <a class="bread-crumbs--active" href="catalog/{$cat->url}">{$cat->name|escape}</a> {/foreach}  
        {if $brand}
        / <a class="bread-crumbs--active" href="catalog/{$cat->url}/{$brand->url}">{$brand->name|escape}</a> {/if}
        {elseif $brand}
        / <a class="bread-crumbs--active" href="brands/{$brand->url}">{$brand->name|escape}</a> {elseif $keyword}
        / Поиск
        {/if}
	   </div>
      <!-- Хлебные крошки #End /--> 
      
	 <div class="title-box-sort">
		<div class="title-box-sort__item">
				{* Заголовок страницы *}
			  {if $keyword}
			  <h1>Поиск {$keyword|escape}</h1>
			  {elseif $page}
			  <h1>{$page->name|escape}</h1>
			  {else}
			  <h1>{$category->name|escape} {$brand->name|escape}</h1>
			  {/if}
	 	</div> 
		 <div class="title-box-sort__item">
			 {* Сортировка *}
			  <form>
				<span>Сортировка:</span>
				<select class="sort-box"  name="sort" size="1">
					<option {if $sort=='position'}selected{/if} value="{url sort=position page=null}">по умолчанию</option>
					<option {if $sort=='price'}selected{/if} value="{url sort=price page=null}">по цене</option>
					<option {if $sort=='name'}selected{/if} value="{url sort=name page=null}">по названию</option>
				</select>
			</form>
		 </div>
	 </div> 		
      
      {* Описание страницы (если задана) *}
      {$page->body}
      
      {if $current_page_num==1}
      {* Описание бренда *}
      {$brand->description}
      {/if}
      
      <!--Каталог товаров--> 
      {if $products}
      
    
      
      <!-- Список товаров-->
      <ul class="tiny-products tiny-products--x3">
        {foreach $products as $product} 
        <!-- Товар-->
        <li class="tiny-products__product"> 
          <!-- Название товара -->
            <h3 class="tiny-products__product-name {if $product->featured}featured{/if}">
				<a class="" data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a>
			</h3>
			<span class="tiny-products-sku">Арт.{$product->variant->sku}</span>
            <!-- Название товара (The End) --> 
          <!-- Фото товара --> 
          {if $product->image}
          <div class="tiny-products-image"> 
			  <a href="products/{$product->url}">
				  <img title="{$product->name|escape}" src="{$product->image->filename|resize:300:300}" alt="{$product->name|escape}"/>
			  </a> 
			</div>
          {/if} 
          <!-- Фото товара (The End) -->
          
          <div class="product_info"> 
            
            <!-- Описание товара -->
            <div class="annotation">{$product->annotation}</div>
            <!-- Описание товара (The End) --> 
            
            {if $product->variants|count > 0} 
            <!-- Выбор варианта товара -->
            <form class="variants" action="/cart">
              <table class="tiny-products__product-price">
                {foreach $product->variants as $v}
                <tr>
                  <td>
					  <input id="variants_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->
                    variants|count<2}style="display:none;"{/if}/> 
					</td>
                  <td> {if $v->name}
                    <label class="variant_name" for="variants_{$v->id}">{$v->name}</label>
                    {/if} </td>
                  <td> 
					  {if $v->compare_price > 0}
					  <span class="compare_price">{$v->compare_price|convert}</span>{/if} 
					  <span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
					</td>
                </tr>
                {/foreach}
              </table>
<!--              <input  type="submit" class="btn btn-lg" value="Сделать резерв" data-result-text="Добавлено"/>-->
            </form>
            <!-- Выбор варианта товара (The End) --> 
            {else}
            Нет в наличии
            {/if} </div>
        </li>
        <!-- Товар (The End)--> 
        {/foreach}
      </ul>
      {include file='pagination.tpl'} 
      <!-- Список товаров (The End)--> 
      
      {else}
      Товары не найдены
      {/if} 
      <!--Каталог товаров (The End)--> 
	  
	  {if $current_page_num==1}
      {* Описание категории *}
		<div class="products-pege-description">{$category->description}</div>
      {/if}
	 		
    </div>
  </div>
</section>

{literal}
<script>
document.getElementById('menu-left-btn').onclick = function() {
	document.getElementById('menuSidebar').classList.toggle('visible-menu-left');
	document.body.classList.toggle('overflow-hide'); 
}
document.getElementById('close-menu-left-btn').onclick = function() {
	document.getElementById('menuSidebar').classList.toggle('visible-menu-left');
	document.body.classList.toggle('overflow-hide'); 
}
document.getElementById('menu-filtr-btn').onclick = function() {
	document.getElementById('features-modal').classList.toggle('visible-menu-left');  
	document.body.classList.toggle('overflow-hide'); 
	
}
document.getElementById('close-features-modal').onclick = function() {
	document.getElementById('features-modal').classList.remove('visible-menu-left');
	document.body.classList.remove('overflow-hide'); 
}
</script>

<script>
$(function() {
   $('select[name=sort]').live('change', function(e) {
       location.href = $(this).find('option:selected').val();
   });
});
</script>
{/literal}
