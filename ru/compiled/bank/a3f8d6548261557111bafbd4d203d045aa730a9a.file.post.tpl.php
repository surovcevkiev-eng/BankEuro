<?php /* Smarty version Smarty-3.1.18, created on 2022-11-16 12:21:10
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/ru/design/bank/html/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1536765355634ee5d8620752-98145777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f8d6548261557111bafbd4d203d045aa730a9a' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/ru/design/bank/html/post.tpl',
      1 => 1668594067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1536765355634ee5d8620752-98145777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634ee5d8636f63_39448135',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634ee5d8636f63_39448135')) {function content_634ee5d8636f63_39448135($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/blog/".((string)$_smarty_tpl->tpl_vars['post']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<style>
h1 {
    font-size: clamp(1.8rem, 1.8vw + 2vw, 2.2vw);
    font-weight: 600;
    line-height: 1.1;
    margin-top: -5px;
}
	
	.post-box{
		margin-top: 2rem;
	}
	
	.post-box div p{
		margin-bottom: 1rem;
	}
	
	.post-box img{
		    width: 100%;
    max-width: fit-content;
    height: auto;
	}
</style>

<div class="container container-post padding4 gray-page post-box">
	<!-- Заголовок /-->
	<h1 data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
	<p class="paddingtop-s5"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</p>

	<!-- Тело поста /-->
	<div class="paddingtop-2">
		<?php echo $_smarty_tpl->tpl_vars['post']->value->text;?>

	</div>	

</div>

<?php }} ?>
