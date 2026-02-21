<?php /* Smarty version Smarty-3.1.18, created on 2022-10-18 02:56:57
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:490911332634debc92eaa98-16252848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe40ef3c40898c14f5c82faafe28eab7eb51afad' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/blog.tpl',
      1 => 1666041104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '490911332634debc92eaa98-16252848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634debc9307a12_34601870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634debc9307a12_34601870')) {function content_634debc9307a12_34601870($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/blog", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<style>
	
	.blog-sections a,
	.blog-sections h3{
		color: var(--black);
		font-weight: 600;
		font-size: var(--titlesm);
		text-decoration: none;
	}
	
	h1 {
		font-size: clamp(1.8rem, 1.8vw + 2vw, 2.2vw);
		font-weight: 600;
		line-height: 1.1;
		margin-top: -5px;
	}
	
	.post-box{
		margin-top: 2rem;
	}
	
	.blog-sections li{
		list-style-type: none;
	}
	
	.blog-sections{
		display: -ms-grid;
			display: grid;
			gap: 2rem;
	}
	
	@media (min-width: 991px){
		.blog-sections {
			display: -ms-grid;
			display: grid;
			-ms-grid-columns: 1fr 3rem 1fr;
			grid-template-columns: 1fr 1fr;
			gap: 3rem;
		}
	}

	.box-news{
		display: none;
	}
	
	.blog-sections li{
		border: 2px solid var(--gray);
	}
	
	.blog-sections li:hover{
		    background-color: #fff;
		border: 2px solid #000;
	}
	
	.blog-sections a:hover{
		color: var(--red);
	}
	
	.blog-sections img{
		display:none;
	}
	
</style>

<div class="container colx2">
	
<!-- Заголовок /-->
<h1><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h1>

<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- Статьи /-->
<ul id="blog" class="blog-sections padding2-0">
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
	<li class="gray-page padding3">
		<h3><a data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" href="blog/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		<p class="padding1-0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</p>
		<p><?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>
</p>
	</li>
	<?php } ?>
</ul>
<!-- Статьи #End /-->    

<?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

          <?php }} ?>
