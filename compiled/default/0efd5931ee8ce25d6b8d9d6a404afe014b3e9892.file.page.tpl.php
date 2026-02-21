<?php /* Smarty version Smarty-3.1.18, created on 2022-10-18 00:12:40
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/default/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1703709567634dc4c028bcc1-49837685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0efd5931ee8ce25d6b8d9d6a404afe014b3e9892' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/default/html/page.tpl',
      1 => 1666041113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703709567634dc4c028bcc1-49837685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634dc4c02a18c8_74339886',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dc4c02a18c8_74339886')) {function content_634dc4c02a18c8_74339886($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<!-- Заголовок страницы -->
<h1 data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</h1>

<!-- Тело страницы -->
<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>
<?php }} ?>
