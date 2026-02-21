<?php /* Smarty version Smarty-3.1.18, created on 2024-01-31 21:11:20
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:538627755634dc6080d7838-05109864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1f57271eb1cd26af9e83ea48573b2bafa488ae' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/products.tpl',
      1 => 1706728278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '538627755634dc6080d7838-05109864',
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
  'unifunc' => 'content_634dc608161245_22840557',
  'variables' => 
  array (
    'category' => 0,
    'brand' => 0,
    'keyword' => 0,
    'settings' => 0,
    'categories' => 0,
    'c' => 0,
    'features' => 0,
    'f' => 0,
    'key' => 0,
    'o' => 0,
    'b' => 0,
    'config' => 0,
    'browsed_products' => 0,
    'browsed_product' => 0,
    'cat' => 0,
    'page' => 0,
    'sort' => 0,
    'current_page_num' => 0,
    'products' => 0,
    'product' => 0,
    'v' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dc608161245_22840557')) {function content_634dc608161245_22840557($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['category']->value&&$_smarty_tpl->tpl_vars['brand']->value) {?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".((string)$_smarty_tpl->tpl_vars['category']->value->url)."/".((string)$_smarty_tpl->tpl_vars['brand']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['category']->value) {?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".((string)$_smarty_tpl->tpl_vars['category']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/brands/".((string)$_smarty_tpl->tpl_vars['brand']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products?keyword=".$_tmp1, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php }?>
<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/catalog.css?v=1" rel="stylesheet" type="text/css" media="screen"/>
<script src="js/jquery.dcjqaccordion.2.9.js"></script> 
 
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
				  <div class="sidebar-title"> Види злитків </div>
				  <!-- Меню каталога -->
				  <div id="catalog_menu" class="sidebar-menu border-bottom2x"> 
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
					
					  <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
					  <table id="features" class="features-table">
						<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
						<tr>
						  <td class="feature-name" data-feature="<?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
: </td>
						  <td class="feature-values"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->id=>null,'page'=>null)),$_smarty_tpl);?>
" <?php if (!$_GET[$_smarty_tpl->tpl_vars['key']->value]) {?>class="selected"<?php }?>>Всі</a> <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f']->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
?> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->id=>$_smarty_tpl->tpl_vars['o']->value->value,'page'=>null)),$_smarty_tpl);?>
" <?php if ($_GET[$_smarty_tpl->tpl_vars['key']->value]==$_smarty_tpl->tpl_vars['o']->value->value) {?>class="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</a> <?php } ?> </td>
						</tr>
						<?php } ?>
					  </table>
					  <?php }?>	
				  </div>
				   <!-- Все бренды в категории --> 
				  <div class="padding2-0 border-bottom2x all-brands-box"><?php if ($_smarty_tpl->tpl_vars['category']->value->brands) {?><div id="brands" class="brands-box"><a href="catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
" <?php if (!$_smarty_tpl->tpl_vars['brand']->value->id) {?>class="selected"<?php }?>>Всі бренди</a><?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?><a data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" href="catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value->url;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->brands_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['b']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a><?php } else { ?><a data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" href="catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value->url;?>
" <?php if ($_smarty_tpl->tpl_vars['b']->value->id==$_smarty_tpl->tpl_vars['brand']->value->id) {?>class="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?><?php } ?></div><?php }?></div>	
					<!-- Все бренды в категории(The End) -->
		 	</div>
		 </div>			 
	</div>	
		
		

      <!-- Просмотренные товары --> 
	  <div class="browse-box padding2-0">
		  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0][0]->get_browsed_products(array('var'=>'browsed_products','limit'=>20),$_smarty_tpl);?>

		  <?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
		  <h4 class="padding1-0">Ви переглядали:</h4>
		  <ul id="browsed_products" class="">
			<?php  $_smarty_tpl->tpl_vars['browsed_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['browsed_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browsed_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->key => $_smarty_tpl->tpl_vars['browsed_product']->value) {
$_smarty_tpl->tpl_vars['browsed_product']->_loop = true;
?>
				<li>
					<a href="products/<?php echo $_smarty_tpl->tpl_vars['browsed_product']->value->url;?>
">
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename,46,46);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
					</a>
				</li>
			<?php } ?>
		  </ul>
		  <?php }?> 
      </div>
	  <!-- Просмотренные товары (The End)--> 
    </div>
	  
    <div class="products-pege-main">
		<div class="btns-catalog">	
			 <button id="menu-left-btn" class="menu-white visible-xs"> 
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M21,15.61L19.59,17L14.58,12L19.59,7L21,8.39L17.44,12L21,15.61M3,6H16V8H3V6M3,13V11H13V13H3M3,18V16H16V18H3Z" />
				</svg>			
				Каталог товарів
			 </button>
			 <button id="menu-filtr-btn" class="menu-white visible-xs"> 
				<svg style="width:36px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M15,19.88C15.04,20.18 14.94,20.5 14.71,20.71C14.32,21.1 13.69,21.1 13.3,20.71L9.29,16.7C9.06,16.47 8.96,16.16 9,15.87V10.75L4.21,4.62C3.87,4.19 3.95,3.56 4.38,3.22C4.57,3.08 4.78,3 5,3V3H19V3C19.22,3 19.43,3.08 19.62,3.22C20.05,3.56 20.13,4.19 19.79,4.62L15,10.75V19.88M7.04,5L11,10.06V15.58L13,17.58V10.05L16.96,5H7.04Z" />
				</svg>
			 </button>
		 </div>		
      <!-- Хлебные крошки /-->
      <div id="path" class="bread-crumbs"> <a href="/">Главная</a> <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
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
        <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
        / <a class="bread-crumbs--active" href="brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a> <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
        / Поиск
        <?php }?>
	   </div>
      <!-- Хлебные крошки #End /--> 
      
	 <div class="title-box-sort">
		<div class="title-box-sort__item">
				
			  <?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
			  <h1>Поиск <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value) {?>
			  <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			  <?php } else { ?>
			  <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
			  <?php }?>
	 	</div> 
		 <div class="title-box-sort__item">
			 
			  <form>
				<span>Сортування:</span>
				<select class="sort-box"  name="sort" size="1">
					<option <?php if ($_smarty_tpl->tpl_vars['sort']->value=='position') {?>selected<?php }?> value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'position','page'=>null),$_smarty_tpl);?>
">за замовчуванням</option>
					<option <?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?>selected<?php }?> value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'price','page'=>null),$_smarty_tpl);?>
">за зростанням ціни</option>
					<option <?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?>selected<?php }?> value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'name','page'=>null),$_smarty_tpl);?>
">за назвою</option>
				</select>
			</form>
		 </div>
	 </div> 		
      
      
      <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

      
      <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
      
      <?php echo $_smarty_tpl->tpl_vars['brand']->value->description;?>

      <?php }?>
      
      <!--Каталог товаров--> 
      <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
      
    
      
      <!-- Список товаров-->
      <ul class="tiny-products tiny-products--x3">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?> 
        <!-- Товар-->
        <li class="tiny-products__product"> 
          <!-- Название товара -->
            <h3 class="tiny-products__product-name <?php if ($_smarty_tpl->tpl_vars['product']->value->featured) {?>featured<?php }?>">
				<a class="" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
			</h3>
			<span class="tiny-products-sku">Арт.<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->sku;?>
</span>
            <!-- Название товара (The End) --> 
          <!-- Фото товара --> 
          <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
          <div class="tiny-products-image"> 
			  <a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
">
				  <img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,300,300);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
			  </a> 
			</div>
          <?php }?> 
          <!-- Фото товара (The End) -->
          
          <div class="product_info"> 
            
            <!-- Описание товара -->
            <div class="annotation"><?php echo $_smarty_tpl->tpl_vars['product']->value->annotation;?>
</div>
            <!-- Описание товара (The End) --> 
            
            <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>0) {?> 
            <!-- Выбор варианта товара -->
            <form class="variants" action="/cart">
              <table class="tiny-products__product-price">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
                <tr>
                  <td>
					  <input id="variants_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>/> 
					</td>
                  <td> <?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?>
                    <label class="variant_name" for="variants_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label>
                    <?php }?> </td>
                  <td> 
					  <?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?>
					  <span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</span><?php }?> 
					  <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
					</td>
                </tr>
                <?php } ?>
              </table>
<!--              <input  type="submit" class="btn btn-lg" value="Зробити резерв" data-result-text="Додано"/>-->
            </form>
            <!-- Выбор варианта товара (The End) --> 
            <?php } else { ?>
           		Немає в наявності
            <?php }?> </div>
        </li>
        <!-- Товар (The End)--> 
        <?php } ?>
      </ul>
      <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
      <!-- Список товаров (The End)--> 
      
      <?php } else { ?>
      Товари не знайдено
      <?php }?> 
      <!--Каталог товаров (The End)--> 
	  
	  <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
      
		<div class="products-pege-description"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
      <?php }?>
	 		
    </div>
  </div>
</section>


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

<?php }} ?>
