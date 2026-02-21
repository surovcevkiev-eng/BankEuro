<?php /* Smarty version Smarty-3.1.18, created on 2024-08-20 00:50:12
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127866282634dc5fe453731-24339507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b52cbb557871f247152a9d71bd584214a5999ee9' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/index.tpl',
      1 => 1724104209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127866282634dc5fe453731-24339507',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'categories_footer' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634dc5fe4a0ed1_70893769',
  'variables' => 
  array (
    'config' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'product' => 0,
    'module' => 0,
    'settings' => 0,
    'canonical' => 0,
    'keyword' => 0,
    'categories' => 0,
    'c' => 0,
    'category' => 0,
    'content' => 0,
    'last_posts' => 0,
    'post' => 0,
    'pages' => 0,
    'p' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dc5fe4a0ed1_70893769')) {function content_634dc5fe4a0ed1_70893769($_smarty_tpl) {?><!DOCTYPE html>

<html lang="uk">
<head>
	<base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/">
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	
	<meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,410,410);?>
">
	<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='MainView') {?>
		<meta property="og:image" content="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/img-header.jpg">
		<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<?php }?>
	
	
	<?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"><?php }?>
	
	
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css?v=10" rel="stylesheet" 	 type="text/css" media="screen" >
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" rel="icon"          type="image/x-icon" >
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" rel="shortcut icon" type="image/x-icon" >
	
	
	<script src="js/jquery/jquery.js"></script>
	
	
	<?php if ($_SESSION['admin']=='admin') {?>
	<script src ="js/admintooltip/admintooltip.js"></script>
	<link   href="js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" /> 
	<?php }?>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	
	
	<script src="js/ctrlnavigate.js"></script>           
	
	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js"></script>
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/ajax_cart.js"></script>
	
	<link rel="icon" type="image/png" sizes="192x192" href="https://rwsbank.com.ua/fv/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://rwsbank.com.ua/fv/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="https://rwsbank.com.ua/fv/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://rwsbank.com.ua/fv/favicon-16x16.png">
	
	
	<script src="js/baloon/js/baloon.js"></script>
	<link   href="js/baloon/css/baloon.css" rel="stylesheet" type="text/css"> 
	
	
	
	<script src="js/autocomplete/jquery.autocomplete-min.js"></script>
	<style>
		.autocomplete-suggestions{
		background-color: #ffffff;
		overflow: hidden;
		border: 1px solid #e0e0e0;
		overflow-y: auto;
		}
		.autocomplete-suggestions .autocomplete-suggestion{cursor: default;}
		.autocomplete-suggestions .selected { background:#F0F0F0; }
		.autocomplete-suggestions div { padding:2px 5px; white-space:nowrap; }
		.autocomplete-suggestions strong { font-weight:normal; color:#3399FF; }
	</style>	
	<script>
	$(function() {
		//  Автозаполнитель поиска
		$(".input_search").autocomplete({
			serviceUrl:'ajax/search_products.php',
			minChars:1,
			noCache: false, 
			onSelect:
				function(suggestion){
					 $(".input_search").closest('form').submit();
				},
			formatResult:
				function(suggestion, currentValue){
					var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
					var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
	  				return (suggestion.data.image?"<img align=absmiddle src='"+suggestion.data.image+"'> ":'') + suggestion.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
				}	
		});
	});
	</script>
	
		
	<!--консоль	укр-->
	<meta name="google-site-verification" content="11xFmWjtTu3pv_261gm2gPIBRXEenqWNjDpiXh2kzZo">
	
	<!-- analitiks -->
	
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-SL1XSM71KB"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-SL1XSM71KB');
		</script>
	
</head>
<body>
	<dialog id="modal-search" class="modal modal--search">
		<div class="modal-box">
			<form action="products">
				<input class="search-input" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Пошук">
				<button class="search-button" value="" type="submit" >
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
							<path fill="currentColor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
					</svg> 
				</button>
			</form>
			<div class="box-btn-search">
				<button class="btn-search-close">
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
							<path fill="currentColor" d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" />
					</svg>
				</button>
			</div>
			<div class="bottom-modal modal-box--featured">
					<p>Напишіть, що Вас цікавить, і ми спробуємо знайти інформацію для Вас</p>
			</div>
		</div>	
	</dialog>
	<!-- Корзина -->
		<div id="cart_informer">
			
			<?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<!-- Корзина (The End)-->
	<header>
		<div class="container" id="home">
			<div class="header-top">
				<div class="header-top-left">
					<div class="language">
						<a id="language-btn" class="header-top-link">UA 
							<svg class="svg--gray svg--gray-language" style="width:21px;height:21px" viewBox="0 0 24 24">
    							<path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
							</svg>
						</a>
						<div id="languageDropdown" class="dropdown-language">
							<ul>
								<li>
									<a class="black" href="/ru/">RU</a>
								</li>
							</ul>
						 </div>
					</div>
					<button class="btn-search">
						<svg style="width:24px;height:24px" viewBox="0 0 24 24">
							<path fill="currentColor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
						</svg> 
					</button>
				</div>
				<div class="header-top-right">
					<div class="offices">
						<a class="header-top-link" href="/contact">
							<svg class="svg--red" style="width:18px;height:18px" viewBox="0 0 24 24">
								<path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
							</svg>
							Наші відділення
						</a>	
					</div>
					<div class="contact">
						<a class="header-top-link dropbtn" onclick="openDropdown()">
							<svg class="svg--red" style="width:18px;height:18px" viewBox="0 0 24 24">
								<path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
							</svg>
							Зв'язатись 
							<svg class="svg--gray svg--gray-drop" style="width:21px;height:21px" viewBox="0 0 24 24">
									<path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
							</svg>
						</a>
						<div id="myDropdownPhone" class="dropdown-content dropdown-phone-number">
							<ul id="mobileUl">
								<li>
									<a href="tel:+380635680886">+380 (63) 568-08-86<span>Lifecell</span></a>
								</li>
								<li>
									<a href="tel:+380685680886">+380 (68) 568-08-86<span>Kyivstar</span></a>
								</li>	
								<li>
									<a href="tel:+380505680886">+380 (50) 568-08-86<span>Vodafone</span></a>
								</li>	
								<li>
									<a href="tel:+380445680886">+380 (44) 568-08-86<span>міський Київ</span></a>
								</li>
							</ul>
						 </div>
					</div>
				</div>
			</div>
			
			<div class="header-menu">
				<div class="logo">
					<a href="/">
<!--						<img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logoRws.png" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/>-->
						<img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo_c_h.svg" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" class="w-full h-20">
					</a>
				</div>
				<div class="mobile-btn visible-xs">
						<svg id="btn-mobile" style="width:24px;height:24px" viewBox="0 0 24 24">
							<path fill="currentColor" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
						</svg>
				</div>
				<div class="menu-title">АТ "РВС БАНК" <span>ВІДДІЛ БАНКІВСЬКИХ МЕТАЛІВ</span></div>
				<div id="mobile-menu" class="menu">
					<div class="menu-mobile-header visible-xs mobile-menu__item">
						<div class="logo-mobile">
							<img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logoRwsMobile.png" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
						</div>
						<div id="mobile-menu-close" class="menu-close">
							<svg style="width:24px;height:24px" viewBox="0 0 24 24">
								<path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
							</svg>
						</div>
					</div>
					<div class="mobile-menu__item">
						<ul>
							<li>
								<div id="button-drop-privat" class="dropdown-btn">Приватним особам 
									<svg id="svg-privat" class="svg--gray" style="width:21px;height:21px" viewBox="0 0 24 24">
										<path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
									</svg>
								</div>
								<ul id="drop-privat" class="dropdown-link-box">
									<li><a href="/kupivlya-cherez-kasu">Купівля через касу</a></li>
<!--									<li><a href="/kupivlya-cherez-rahunok-fiz-osobi">Купівля через рахунок фізособи</a></li>-->
									<li><a href="/pitannya--vidpovidi">Питання - відповіді</a></li>
									<li><a href="https://rwsbank.com.ua/" target="_blank">Інші послуги</a></li>
								</ul>
							</li>
<!--
							<li>
								<div id="button-drop-urid" class="dropdown-btn">Юридичним особам
									<svg id="svg-urid" class="svg--gray" style="width:21px;height:21px" viewBox="0 0 24 24">
										<path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
									</svg>
								</div>
								<ul id="drop-urid" class="dropdown-link-box">
									<li><a href="/metalevi-rahunki-yur">Купівля через рахунок юросіб</a></li>
									<li><a href="/kupivlya-metaliv-dlya-fop">Купівля металів для ФОП</a></li>
									<li><a href="https://rwsbank.com.ua/" target="_blank">Інші послуги</a></li>
								</ul>
							</li>
-->
						</ul>
					</div>
					<div class="form visible-xs mobile-menu__item" id="form1"></div>
					<div class="form visible-xs mobile-menu__item" id="form2"></div>
				</div>
				<div class="link-price">
					<a id="linkPrice" class="btn" href="/tsini">Ціни відкупу та продажу
						<svg style="width:21px;height:21px" viewBox="0 0 24 24">
							<path fill="currentColor" d="M19,3H14.82C14.25,1.44 12.53,0.64 11,1.2C10.14,1.5 9.5,2.16 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M7,7H17V5H19V19H5V5H7V7M17,11H7V9H17V11M15,15H7V13H15V15Z" />
						</svg>
					</a>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['module']->value=='MainView') {?>
			<div class="header-main">
				<div class="header-title">
					<h1>БАНКІВСЬКІ <br>МЕТАЛИ</h1>
					<p>Інвестуй та примножуй надійно!</p>
					<a class="btn-line" href="/catalog/zoloto">Переглянути каталог</a>
				</div>
			</div>
			<?php }?>
		</div>	
	</header>
	
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='MainView') {?>
	<section class="container">
		<div class="menu-main">
		<!-- Меню каталога -->
			
				<?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
					<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
					<ul>
						<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
							
							<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
								<li>
									<a <?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>class="selected"<?php }?> href="catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
										<?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
											<div class="menu-main-img">
												<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['c']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
											</div>
										<?php }?>
										<div class="menu-main-title">
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>

										</div>
										<div class="menu-main-description">
											<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</p>
										</div>
									</a>
									<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories));?>

								</li>
							<?php }?>
						<?php } ?>
					</ul>
					<?php }?>
				<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

			<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value));?>

			<!-- Меню каталога (The End)-->
		</div>
	</section>
		
	<section class="container">
		<div class="banner-box">
			<div class="banner-text">
				<h2><span>Оптова, індивідуальна ціна</span>
					– при купівлі / продажу від 200 грамів золота або платини чи від 10 кг срібла
				</h2>
				<a href="/tsini"><span>Детальніше </span>
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
					</svg>
				</a>
			</div>
		</div>
	</section>
	<?php }?>
		
		
	<section>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</section>
	
	<div class="box-news col">
		<div class="container">
			<div class="main-products-title">
				<h3>Новини</h3>
				<a class="anim-link" href="blog"><span>Всі новини</span>
					<svg style="width:24px;height:24px" viewBox="0 0 24 24">
						<path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
					</svg>
				</a>
			</div>
			<!-- Меню блога -->
				
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0][0]->get_posts_plugin(array('var'=>'last_posts','limit'=>4),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?>
				<ul class="blog-box">
					<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
						<li data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
">
							<a href="blog/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
							<p class="blog-box-description"><?php echo strip_tags($_smarty_tpl->tpl_vars['post']->value->annotation);?>
</p>
							<div class="blog-box-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</div>
						</li>
					<?php } ?>
				</ul>
				<?php }?>
			<!-- Меню блога  (The End) -->
		</div>
	</div>
	
	<footer>
		<div class="footer-top">
			<div class="container footer-top-colums">
				<div class="footer-top-colums__item">
					<a href="/contact">
						<svg class="svg--red" style="width:18px;height:18px" viewBox="0 0 24 24">
								<path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
							</svg>Адреси відділень
					</a>
					<a href="/tsini">
						<svg class="svg--red" style="width:18px;height:18px" viewBox="0 0 24 24">
							<path fill="currentColor" d="M19,3H14.82C14.25,1.44 12.53,0.64 11,1.2C10.14,1.5 9.5,2.16 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M7,7H17V5H19V19H5V5H7V7M17,11H7V9H17V11M15,15H7V13H15V15Z" />
						</svg>Ціни
					</a>
				</div>
				<div class="footer-top-colums__item">
						<?php if (!function_exists('smarty_template_function_categories_footer')) {
    function smarty_template_function_categories_footer($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_footer']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
							<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
							<ul>
								<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
										<li>
											<a <?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>class="selected"<?php }?> href="catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>

											</a>
										</li>
									<?php }?>
								<?php } ?>
							</ul>
							<?php }?>
						<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

					<?php smarty_template_function_categories_footer($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value));?>

				</div>
				<div class="footer-top-colums__item">
					<ul>
						<li>
							<a href="https://rwsbank.com.ua/" target="_blank">Інші послуги</a>
						</li>
					</ul>
				</div>
				<div class="footer-top-colums__item">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
							
							<?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
							<li <?php if ($_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['page']->value->id==$_smarty_tpl->tpl_vars['p']->value->id) {?>class="selected"<?php }?>>
								<a data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
							</li>
							<?php }?>
						<?php } ?>
					</ul>
				</div>
				<div class="footer-top-colums__item">
					<p>Графік роботи</p>
					<table>
						<tr>
							<td>Понеділок</td>
							<td>09:00-17:00</td>
						</tr>
						<tr>
							<td>Вівторок</td>
							<td>09:00-17:00</td>
						</tr>
						<tr>
							<td>Середа</td>
							<td>09:00-17:00</td>
						</tr>
						<tr>
							<td>Четвер</td>
							<td>09:00-17:00</td>
						</tr>
						<tr>
							<td>Пʼятниця</td>
							<td>09:00-17:00</td>
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
				</div>
				<div class="footer-top-colums__item footer-number-phone">
					<a href="">+380 (63) 568-08-86</a>
					<a href="">+380 (44) 568-08-86</a>
					<a href="">+380 (68) 568-08-86</a>
					<a href="">+380 (50) 568-08-86</a>
				</div>	
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container footer-bottom-colums">
				<div class="footer-bottom-colums__item">
					<a class="footer-bottom-up" href="#home">
						<svg style="width:24px;height:24px" viewBox="0 0 24 24">
							<path fill="currentColor" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
						</svg>
					</a>
				</div>
				<div class="footer-bottom-colums__item">
					<p>«RwS bank», Спеціалізоване відділення по роботі з </p>
					<p>банківськими металами, м. Київ, вул. Білоруська, 8</p>
				</div>
				<div class="footer-bottom-colums__item">
					<p>© 2016 «RwS bank», Ліцензія НБУ №277 від 24.11.16</p>
				</div>
			</div>
		</div>
	</footer>

	
	<script src="js/mobileMenu.js"></script>
	
	<script src="js/dropdown.js"></script>
	
	<script src="js/open-modal.js"></script>
	<script>
        document.getElementById('button-drop-privat').onclick = function() {
            document.getElementById('drop-privat').classList.toggle('visible-drop');  
			document.getElementById('svg-privat').classList.toggle('visible');
			document.getElementById('drop-urid').classList.remove('visible-drop');
			document.getElementById('svg-urid').classList.remove('visible');
            }
		document.getElementById('button-drop-urid').onclick = function() {
            document.getElementById('drop-urid').classList.toggle('visible-drop');
			document.getElementById('svg-urid').classList.toggle('visible');
			document.getElementById('drop-privat').classList.remove('visible-drop');
			document.getElementById('svg-privat').classList.remove('visible');
            }
//        document.getElementById('button-drop-urid').onclick = function() {
//            
//            }    
    </script>
</body>
</html><?php }} ?>
