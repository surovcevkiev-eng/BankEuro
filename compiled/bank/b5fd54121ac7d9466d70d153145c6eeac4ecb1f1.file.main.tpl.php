<?php /* Smarty version Smarty-3.1.18, created on 2024-01-31 21:09:22
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1826167209634dc6010d1972-17226979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5fd54121ac7d9466d70d153145c6eeac4ecb1f1' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/main.tpl',
      1 => 1706728160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1826167209634dc6010d1972-17226979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634dc601134cf7_44424760',
  'variables' => 
  array (
    'page' => 0,
    'featured_products' => 0,
    'product' => 0,
    'v' => 0,
    'currency' => 0,
    'new_products' => 0,
    'discounted_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dc601134cf7_44424760')) {function content_634dc601134cf7_44424760($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_variable('index.tpl', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['wrapper'] = clone $_smarty_tpl->tpl_vars['wrapper'];?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>



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
		
		<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>


		
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products','limit'=>8),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
		<!-- Список товаров-->
		<ul class="tiny-products">

			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
			<!-- Товар-->
			<li class="tiny-products__product">
				<!-- Название товара -->
				<a class="tiny-products__product-name" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
				<span class="tiny-products-sku">Арт.<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->sku;?>
</span>
				<!-- Название товара (The End) -->	
				
				<!-- Фото товара -->
				<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
				<div class="tiny-products-image">
					<a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,300,300);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a>
				</div>
				<?php }?>
				<!-- Фото товара (The End) -->

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
							<input id="featured_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>>
						</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="featured_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label><?php }?>
						</td>
						<td >
							<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</span><?php }?>
							<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
						</td>
					</tr>
					<?php } ?>
					</table>
<!--					<input  type="submit" class="btn btn-lg" value="Зробити резерв" data-result-text="Додано">-->
				</form>
				<!-- Выбор варианта товара (The End) -->
				<?php } else { ?>
					Немає в наявності
				<?php }?>

			</li>
			<!-- Товар (The End)-->
			<?php } ?>

		</ul>
		<?php }?>

		
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>4,'in_stock'=>1),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
		<!-- Список товаров-->
		<ul class="tiny-products">

			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

			<!-- Товар-->
			<li class="tiny-products__product">

				<!-- Название товара -->
				<a class="tiny-products__product-name" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
				<span class="tiny-products-sku">Арт.<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->sku;?>
</span>
				<!-- Название товара (The End) -->	
				
				<!-- Фото товара -->
				<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
				<div class="tiny-products-image">
					<a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,300,300);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a>
				</div>
				<?php }?>
				<!-- Фото товара (The End) -->
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
							<input id="new_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>>
						</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="new_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label><?php }?>
						</td>
						<td >
							<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</span><?php }?>
							<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
						</td>
					</tr>
					<?php } ?>
					</table>
<!--					<input  type="submit" class="btn btn-lg" value="Зробити резерв" data-result-text="Додано">-->
				</form>
				<!-- Выбор варианта товара (The End) -->
				<?php } else { ?>
					Немає в наявності
				<?php }?>

			</li>
			<!-- Товар (The End)-->
			<?php } ?>

		</ul>
		<?php }?>	


		
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>8),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
		<h3>Акционные товары</h3>
		<!-- Список товаров-->
		<ul class="tiny-products">

			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
			<!-- Товар-->
			<li class="product">

				<!-- Фото товара -->
				<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
				<div class="image">
					<a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,200,200);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/></a>
				</div>
				<?php }?>
				<!-- Фото товара (The End) -->

				<!-- Название товара -->
				<a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
				<!-- Название товара (The End) -->

				<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>0) {?>
				<!-- Выбор варианта товара -->
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
						<td>
							<input id="discounted_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>>
						</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="discounted_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label><?php }?>
						</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</span><?php }?>
							<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
						</td>
					</tr>
					<?php } ?>
					</table>
					<input type="submit" class="button" value="в корзину" data-result-text="добавлено">
				</form>
				<!-- Выбор варианта товара (The End) -->
				<?php } else { ?>
					Нет в наличии
				<?php }?>

			</li>
			<!-- Товар (The End)-->
			<?php } ?>

		</ul>
		<?php }?>
			
	</div>
</section><?php }} ?>
