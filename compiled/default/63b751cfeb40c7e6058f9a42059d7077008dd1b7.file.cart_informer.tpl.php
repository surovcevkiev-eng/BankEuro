<?php /* Smarty version Smarty-3.1.18, created on 2022-10-18 00:12:40
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/default/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1747495585634dc4aef0de43-16289068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b751cfeb40c7e6058f9a42059d7077008dd1b7' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/default/html/cart_informer.tpl',
      1 => 1666041112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1747495585634dc4aef0de43-16289068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634dc4aef14426_06978276',
  'variables' => 
  array (
    'cart' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dc4aef14426_06978276')) {function content_634dc4aef14426_06978276($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
	В <a href="./cart/">корзине</a>
	<?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,'товар','товаров','товара');?>

	на <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

<?php } else { ?>
	Корзина пуста
<?php }?>
<?php }} ?>
