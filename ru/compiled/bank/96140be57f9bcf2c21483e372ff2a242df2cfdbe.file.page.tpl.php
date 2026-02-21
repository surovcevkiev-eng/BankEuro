<?php /* Smarty version Smarty-3.1.18, created on 2022-10-18 08:59:24
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/ru/design/bank/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:860759894634e40bcbe0222-65339559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96140be57f9bcf2c21483e372ff2a242df2cfdbe' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/ru/design/bank/html/page.tpl',
      1 => 1666041539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '860759894634e40bcbe0222-65339559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634e40bcbf8658_39144939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634e40bcbf8658_39144939')) {function content_634e40bcbf8658_39144939($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<style>
h1 {
    font-size: clamp(1.8rem, 1.8vw + 2vw, 2.2vw);
    font-weight: 500;
    line-height: 1.1;
    margin-top: -5px;
}
	
	.page-box{
		margin-top: 2rem;
	}
	
	.page-box-body p{
		font-size: var(--sm-size);
    	line-height: 1.4;
		margin-bottom: 0.5rem;
	}
	
	.page-box-body table{
		    width: 100%;
			border: 2px solid #fff;
	}
	
	.page-box-body table a{
		color: var(--red);
		-webkit-transition: all 0;
		-o-transition: all 0;
		transition: all 0;
	}
	
	.page-box-body ul li{
		padding: .5rem;
		margin: .5rem 1rem;
	}
	
	.page-box-body table tr{
		-webkit-transition: all .0s ease-in-out;
		-o-transition: all .0s ease-in-out;
		transition: all .0s ease-in-out;
		
	}
	.page-box-body table tr:nth-of-type(2n){
		background-color: #fff;
	}
	
	.page-box-body table tr:hover{
		    background-color: #ba2222;
    		color: #fff;
		-webkit-transition: all .0s ease-in-out;
		-o-transition: all .0s ease-in-out;
		transition: all .0s ease-in-out;
		
	}
	
	.page-box-body table tr:hover td,
	.page-box-body table tr:hover a{
		color: #fff;
		-webkit-transition: all .0s ease-in-out;
		-o-transition: all .0s ease-in-out;
		transition: all .0s ease-in-out;
	}
	.page-box-body table td{
		    padding: 1rem 1rem;
	}
	
	@media (max-width: 767px){
		.page-box{
			padding: 2rem;
		}
		
		.page-box-body table{
			    margin: auto -5%;
    			width: 110%;
			    overflow: auto;
    			display: block;
		}
		
		.page-box-body table tbody{
			    width: 100%;
    		display: inline-table;
		}
		
		.page-box-body table td{
				padding: .6rem .4rem;
			font-size: 14px;
		}
	}
</style>

<!-- Заголовок страницы -->
<div class="container padding4 gray-page page-box">
	<h1 data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</h1>

	<!-- Тело страницы -->
	<div class="page-box-body padding2-0">
		<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

	</div>
</div>	<?php }} ?>
