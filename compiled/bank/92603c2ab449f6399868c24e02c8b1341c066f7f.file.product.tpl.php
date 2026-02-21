<?php /* Smarty version Smarty-3.1.18, created on 2024-06-07 18:09:45
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65806765634dc60fefef88-74739978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92603c2ab449f6399868c24e02c8b1341c066f7f' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/product.tpl',
      1 => 1717772959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65806765634dc60fefef88-74739978',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634dc61003b0c9_56371200',
  'variables' => 
  array (
    'product' => 0,
    'currency' => 0,
    'canonical' => 0,
    'meta_description' => 0,
    'settings' => 0,
    'categories' => 0,
    'c' => 0,
    'category' => 0,
    'cat' => 0,
    'brand' => 0,
    'image' => 0,
    'v' => 0,
    'f' => 0,
    'error' => 0,
    'comment_name' => 0,
    'comment_text' => 0,
    'comments' => 0,
    'comment' => 0,
    'related_products' => 0,
    'related_product' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dc61003b0c9_56371200')) {function content_634dc61003b0c9_56371200($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/fj473748/goldrwsbank.com.ua/www/Smarty/libs/plugins/function.math.php';
?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products/".((string)$_smarty_tpl->tpl_vars['product']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(((string)htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true))." ".((string)htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->brand->name, ENT_QUOTES, 'UTF-8', true)).", ціна ".((string)$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price))." ".((string)htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true))." | Goldrwsbank", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<script type="application/ld+json">
    {
	  "@context" : "http://schema.org",
	  "@type" : "Product",
	  "name" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
",
	  "image" : "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,500,500);?>
",
	  "description" :"<?php echo strip_tags($_smarty_tpl->tpl_vars['product']->value->body);?>
",
	  "sku": "<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
",
		  "offers" : {
			"@type": "Offer",
			"url": "https://goldrwsbank.com.ua/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
",
			"availability": "http://schema.org/InStock",
			"price" : "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['product']->value->variant->price);?>
",
			"priceCurrency" : "UAH"
		  }
	  }
    </script>

<meta property="og:url" content="http://bank.asterr.com.ua/<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/menu-style.css" rel="stylesheet" type="text/css" media="screen">
<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/product.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/jquery.dcjqaccordion.2.9.js"></script> 
 
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

	

<div id="menu-left-box" class="modal-info">
		<div class="modal-inner">
			<div class="modal-inner-header">
				<svg id="close-menu-left-btn" style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
				</svg>
			</div>
			<div class="modal-inner-container width100">
				<div class="sidebar-title"> Види злитків </div>
				<!-- Меню каталога -->
				  <div id="catalog_menu" class="sidebar-menu"> 
						<?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
							<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
										<li>
											<a href="catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
</a>
											<a class="p_acc"></a>

										<?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories) {?><ul><?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories));?>
</ul><?php }?>
										</li>
									<?php }?>
								<?php } ?>
							<?php }?> 
						<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

						<ul class="accordion" id="accordion-1">
						  <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value));?>

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
			Каталог товарів
		</button>
		<!-- Хлебные крошки /-->
		<div id="path" class="product-header-bread bread-crumbs padding0"> <a class="bread-crumbs--active" href="./">Главная</a> <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
		  / <a class="bread-crumbs--active" href="catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a> <?php } ?>
		  <?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
		  / <a class="bread-crumbs--active" href="catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a> <?php }?>
		  / <a class="bread-crumbs--active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
		</div>
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
			<div class="dop-foto"><?php if (count($_smarty_tpl->tpl_vars['product']->value->images)>1) {?><div class="images"><?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['cut'][0][0]->cut_modifier($_smarty_tpl->tpl_vars['product']->value->images); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,1100,800,'w');?>
" class="zoom" rel="group"><img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,65,65);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a><?php } ?></div><?php }?></div> 			 
			  <!-- Дополнительные фото продукта (The End)--> 
			 <!-- Большое фото -->
			 <div class="big-foto"> 
			  <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
				  <div class="image">
					  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,1100,800,'w');?>
" class="zoom" rel="group">
						  <img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,410,410);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
					  </a>
				  </div>
			  <?php }?> 
		    </div>	 
			 <!-- Большое фото (The End)--> 
		  </div>
		  <div class="product-bay-box">
			<h1 data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			
			<div class="bay-box gray-page">
				<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>0) {?> 
				<div class="bay-box-have">
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
					</svg>
					<span>В наявності</span>
				</div>
				<div class="bay-box-sku">
					Арт.<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->sku;?>

				</div>
				
				<!-- Выбор варианта товара -->
				<div class="bay-box-variants">
					<div class="bay-box-variants__item">
						<form class="variants" action="/cart">
							  <table>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
								<tr class="variant">
<!--
								  <td>
									<input id="product_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->id==$_smarty_tpl->tpl_vars['v']->value->id) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>> 
								  </td>
-->
								  <td> <?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?>
									<label class="variant_name" for="product_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label>
									<?php }?> </td>
								  <td class="variant-price-box">
									  <div class="variants-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 
										  <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
									  </div>
									  <div class="variants-button">
<!--									  	<input type="submit" class="button" value="Зробити резерв" data-result-text="В корзині">-->
									  </div>
								  </td>
								</tr>
								<?php } ?>
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
								Актуальні оптові ціни
								<span>Бути в курсі 24/7 </span>
							</p>
						</a>
					</div>
				</div>	
				<!-- Выбор варианта товара (The End) --> 
				
				<?php } else { ?>
					Немає в наявності
				<?php }?>
			</div>
			  
			<div class="product-bay-information">
			  <a id="btn-work" class="product-bay-information__item">
			  		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z" />
					</svg>
				  	<span>
				  		Графік роботи
				    </span>
			  </a>
			  <a id="btn-address" class="product-bay-information__item">
			  		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M12 4C14.2 4 16 5.8 16 8C16 10.1 13.9 13.5 12 15.9C10.1 13.4 8 10.1 8 8C8 5.8 9.8 4 12 4M12 2C8.7 2 6 4.7 6 8C6 12.5 12 19 12 19S18 12.4 18 8C18 4.7 15.3 2 12 2M12 6C10.9 6 10 6.9 10 8S10.9 10 12 10 14 9.1 14 8 13.1 6 12 6M20 19C20 21.2 16.4 23 12 23S4 21.2 4 19C4 17.7 5.2 16.6 7.1 15.8L7.7 16.7C6.7 17.2 6 17.8 6 18.5C6 19.9 8.7 21 12 21S18 19.9 18 18.5C18 17.8 17.3 17.2 16.2 16.7L16.8 15.8C18.8 16.6 20 17.7 20 19Z" />
					</svg>
				  	<span>
				  		Адреса та контакти
				    </span>
			  </a>
			  <a id="btn-return" class="product-bay-information__item">
			  		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M19,7V11H5.83L9.41,7.41L8,6L2,12L8,18L9.41,16.58L5.83,13H21V7H19Z" />
					</svg>
				  	<span>
				  		Умови повернення
				    </span>
			  </a>
				<a id="btn-consultation" class="product-bay-information__item">
			  		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M13.5,4A1.5,1.5 0 0,0 12,5.5A1.5,1.5 0 0,0 13.5,7A1.5,1.5 0 0,0 15,5.5A1.5,1.5 0 0,0 13.5,4M13.14,8.77C11.95,8.87 8.7,11.46 8.7,11.46C8.5,11.61 8.56,11.6 8.72,11.88C8.88,12.15 8.86,12.17 9.05,12.04C9.25,11.91 9.58,11.7 10.13,11.36C12.25,10 10.47,13.14 9.56,18.43C9.2,21.05 11.56,19.7 12.17,19.3C12.77,18.91 14.38,17.8 14.54,17.69C14.76,17.54 14.6,17.42 14.43,17.17C14.31,17 14.19,17.12 14.19,17.12C13.54,17.55 12.35,18.45 12.19,17.88C12,17.31 13.22,13.4 13.89,10.71C14,10.07 14.3,8.67 13.14,8.77Z" />
					</svg>
				  	<span>
				  		Консультація
				    </span>
			  </a>
			</div>  
			  
			<div class="product-bay-information-link">
				<a class="product-bay-information-link__item" href="#features">Характеристики</a>
				<a class="product-bay-information-link__item" href="#description">Опис</a>
				<a class="product-bay-information-link__item" href="#comments">Відгуки та питання</a>
				<a class="product-bay-information-link__item" href="#relatedProducts">Схожі товари</a>
			</div>	
			  
		  </div>
	  </div>
		
	 <!-- Характеристики товара -->	 	
	 <div id="features" class="product-features paddingtop-3">
	 	<?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?> 
		  <h2>Характеристики <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h2>
		  <ul class="features padding2-0">
			<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
			<li>
			  <label><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
:</label>
			  <span><?php echo $_smarty_tpl->tpl_vars['f']->value->value;?>
</span> </li>
			<?php } ?>
		  </ul>
	 	<?php }?> 
	 </div>
      <!-- Характеристики товара (The End)--> 	
		
      <!-- Описание товара -->
      <div id="description" class="product-description paddingtop-2"> 
		<?php if ($_smarty_tpl->tpl_vars['product']->value->body) {?> 
			<h3>Опис <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h3>
		<?php }?>
			<div class="product-body padding2-0">
			  <?php echo $_smarty_tpl->tpl_vars['product']->value->body;?>

			</div>
      </div>
      <!-- Описание товара (The End)--> 
		
	<div id="comments" class="comments-box grid paddingtop-1">
		<!-- Комментарии -->
			<!--Форма отправления комментария-->
			<div class="comments-box__item comment-form">
		      <h3 class="padding1-0">Залишити відгук</h3>
			  <form method="post" class="gray-page padding2">
				<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
				<div class="message-error"> <?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
				  Неверно введена капча
				  <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
				  Введите имя
				  <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_comment') {?>
				  Введите комментарий
				  <?php }?> </div>
				<?php }?>
				<div class="comments-box-form">
				  <label for="comment_name">Ваше Ім'я</label>
				  <input class="input_name" type="text" id="comment_name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['comment_name']->value;?>
" data-format=".+" data-notice="Ваше Ім'я">
				  <label for="comment_text">Ваш відгук</label>
				  <textarea class="comment-textarea" rows="5" id="comment_text" name="text" data-format=".+" data-notice="Ваш відгук"><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea>
				  <input class="button" type="submit" name="comment" value="Залишити відгук">
				  <label for="comment_captcha">Число для перевірки</label>
				  <div class="captcha">
					  <img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt='captcha'>
					  <input id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введіть капчу">
				  </div>
				  
				</div>
			  </form>
			</div>
			<!--Форма отправления комментария (The End)-->
			<div class="comments-box__item">
			  <h3 class="padding1-0">Відгуки покупців</h3>
			  <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?> 
			  <!-- Список с комментариями -->
			  <ul class="comment-list">
				<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
					<li> 
					  <a class="alert-moderation" name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>	
					  <!-- Имя и дата комментария-->
					  <div class="comment-header"> 
						  <p>
							  <span class="comment_header-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
							  <span class="comment_header-data-time"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
, <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
</span>
						   	  <span class="comment_header-data-approved"><?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>ожидает модерации<?php }?></span>
						  </p> 
				  	  </div>
					  <!-- Имя и дата комментария (The End)--> 
					  <!-- Комментарий --> 
					  <p class="paddingtop-s5"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>
 </p>
					  <!-- Комментарий (The End)--> 
					</li>
				<?php } ?>
			  </ul>
			  <!-- Список с комментариями (The End)--> 
			  <?php } else { ?>
			  <p> Пока нет комментариев </p>
			  <?php }?> 
			</div>
    	<!-- Комментарии (The End) -->  
	</div>
  </div>
  </div>		  
</section>
	
<section id="relatedProducts" class="gray-page">
	<div class="related-products container padding4-0">
  	
    <?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
    <h3>ПОДІБНІ ТОВАРИ КОМПАНІЇ</h3>
    <!-- Список каталога товаров-->
    <ul class="tiny-products paddingtop-2">
      <?php  $_smarty_tpl->tpl_vars['related_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_product']->key => $_smarty_tpl->tpl_vars['related_product']->value) {
$_smarty_tpl->tpl_vars['related_product']->_loop = true;
?> 
      <!-- Товар-->
      <li class="tiny-products__product"> 
        <!-- Название товара -->
        <h3 class="tiny-products__product-name">
			<a data-product="<?php echo $_smarty_tpl->tpl_vars['related_product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['related_product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
		</h3>
		  <span class="tiny-products-sku">Арт.<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->sku;?>
</span>
        <!-- Название товара (The End) --> 
		  
        <!-- Фото товара --> 
        <?php if ($_smarty_tpl->tpl_vars['related_product']->value->image) {?>
        <div class="tiny-products-image">
			<a href="products/<?php echo $_smarty_tpl->tpl_vars['related_product']->value->url;?>
">
				<img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['related_product']->value->image->filename,300,300);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['related_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
			</a>
		</div>
        <?php }?> 
        <!-- Фото товара (The End) --> 
        
        <?php if (count($_smarty_tpl->tpl_vars['related_product']->value->variants)>0) {?> 
        <!-- Выбор варианта товара -->
        <form class="variants" action="/cart">
          <table class="tiny-products__product-price">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
            <tr class="variant">
              <td><input id="related_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton"  <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['related_product']->value->variants)<2) {?> style="display:none;"<?php }?>> </td>
              <td> <?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?>
                <label class="variant_name" for="related_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label>
                <?php }?> </td>
              <td> <?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</span><?php }?> <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span></td>
            </tr>
            <?php } ?>
          </table>
		  <input type="submit" class="btn btn-lg" value="Зробити резерв" data-result-text="Додано"/>
        </form>
        <!-- Выбор варианта товара (The End) --> 
        <?php } else { ?>
        Немає в наявності
        <?php }?> </li>
      <!-- Товар (The End)--> 
      <?php } ?>
    </ul>
    <?php }?>
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
					<td>Час роботи</td>
				</tr>
                <tr>
					<td>Понеділок</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Вівторок</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Середа</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Четверг</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>П'ятниця</td>
					<td>09:00 - 17:00</td>
				</tr>
				<tr>
					<td>Субота</td>
					<td>Вихідний</td>
				</tr>
				<tr>
					<td>Неділя</td>
					<td>Вихідний</td>
				</tr>
			</table>
			<small>*Час вказано для Києва</small>
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
				<a href="tel:+380445680886">+380 (44) 568-08-86 <span>міський Київ</span></a> 
			</div>
			<div class="modal-inner-container__item">
				<p><b>Адреса:</b> вул. Білоруська д.8, Київ, Україна</p>
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
			<h4>Компанія керується Законом <a href="https://zakon.rada.gov.ua/laws/show/1023-12#Text" target="_blank">«Про захист прав споживачів»</a> у питаннях повернення та обміну товарів належної якості.</h4>
			<p>Згідно Закону <a href="https://zakon.rada.gov.ua/laws/show/1023-12#Text">«Про захист прав споживачів»</a>, ккомпанія може відмовити споживачу в обміні та поверненні товарів належної якості, якщо вони належать до категорій, зазначених у чинному <a href="https://zakon.rada.gov.ua/laws/show/172-94-%D0%BF#Text" target="_blank">Перелік непродовольчих товарів належної якості, що не підлягають поверненню та обміну.</a>
			</p>
			<p>
			Товари належної якості, для яких дозволено повернення та обмін, можуть бути повернені протягом 14 днів після отримання покупцем, якщо:
			</p>
			<ul>
				<li>товар не був у вжитку та не має слідів використання споживачем: подряпин, сколів, потертостей, плям тощо.;</li>
				<li>товар повністю укомплектований та збережена фабрична упаковка;</li>
				<li>збережено всі ярлики та заводське маркування;</li>
				<li>товар зберігає товарний вигляд та свої споживчі властивості.</li>
			</ul>
-->
			<p>У разі звернення Клієнта з відмовою від угоди щодо купівлі - продажу банківських металів, Касир зобов'язаний здійснити операцію щодо повернення Клієнту відповідної суми коштів або банківського металу, але не пізніше 15 хвилин після проведення такої операції за умови наявності цих коштів у касі, та за умови, що банківські метали не залишали межі каси.</p>
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
					  <p><b>Залиште повідомлення:</b></p>
					  Ваше ім'я:
					  <input type="text" id="inpt" name="name" required>
					  Номер телефону:
					  <input type="text" id="inpt-numb" name="phone" required>
					  Повідомлення:
					  <textarea rows="6" name="message" id="message" required></textarea>
					  <input type="submit" name="submit" value="Надіслати запитання" class="button" id="buton">
				  </fieldset>
			  </form>
			  <div class="overlay js-overlay-thank-you" style="display: none;">
                    <div class="popup js-thank-you paddingtop-1">
                        <p><b>Дякуємо за заявку. Ми зв'яжемося з вами найближчим часом!</b></p>
                        <div class="close-popup js-close-thank-you "></div>
                    </div>
             </div>
		</div>
	</div>
</div>	


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
<?php }} ?>
