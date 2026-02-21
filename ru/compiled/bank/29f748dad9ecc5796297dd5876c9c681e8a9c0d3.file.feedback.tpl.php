<?php /* Smarty version Smarty-3.1.18, created on 2024-08-20 00:52:41
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/ru/design/bank/html/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:804187908634e8998daf4b2-88372208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29f748dad9ecc5796297dd5876c9c681e8a9c0d3' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/ru/design/bank/html/feedback.tpl',
      1 => 1724104358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '804187908634e8998daf4b2-88372208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634e8998dd1796_58980029',
  'variables' => 
  array (
    'page' => 0,
    'message_sent' => 0,
    'name' => 0,
    'error' => 0,
    'email' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634e8998dd1796_58980029')) {function content_634e8998dd1796_58980029($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/fj473748/goldrwsbank.com.ua/www/ru/Smarty/libs/plugins/function.math.php';
?>

<style>
	h1 {
    font-size: clamp(1.8rem, 1.8vw + 2vw, 2.2vw);
    font-weight: 500;
    line-height: 1.1;
    margin-top: -5px;
}
	
	.feedback-box{
		margin-top: 2rem;
	}
	
	.feedback-form{
		    display: flex;
			flex-direction: column;
			gap: 1rem;
	}
	
	.feedback-form input, .feedback-form textarea{
		    padding: 1rem;
			width: 100%;
			border: 1px solid #ccc;
			outline: none;
	}
	
	.feedback-form .btn{
		    align-items: center;
			max-width: 50%;
			align-content: start;
			align-self: flex-start;
			justify-content: center;
			border: 3px solid var(--red);
	}
	
	.feedback-box iframe{
		border: 1px solid #ccc !important;
	}
	
	.input_captcha{
		max-width: 400px;
	}
	
	@media (max-width: 767px){
		.feedback-box{
			padding: 2rem;
		}
		
		.feedback-form .btn{
			max-width: 100%;
		}
	}
</style>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="container padding4 gray-page feedback-box">

	<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>

	<div class="body-feedback padding2-0">
		<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

	</div>
	

<!--
	<h2>Обратная связь</h2>

	<?php if ($_smarty_tpl->tpl_vars['message_sent']->value) {?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
, ваше сообщение отправлено.
	<?php } else { ?>
	<form class="form feedback-form" method="post">
		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
		<div class="message_error">
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
			Неверно введена капча
			<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
			Введите имя
			<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
			Введите email
			<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_text') {?>
			Введите сообщение
			<?php }?>
		</div>
		<?php }?>
		<label>Имя</label>
		<input data-format=".+" data-notice="Введите имя" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="name" maxlength="255" type="text"/>

		<label>Email</label>
		<input data-format="email" data-notice="Введите email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="email" maxlength="255" type="text"/>

		<label>Сообщение</label>
		<textarea data-format=".+" rows="10" data-notice="Введите сообщение" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>

		<input class="btn btn-lg" type="submit" name="feedback" value="Отправить" />

		<div class="captcha"><img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
"/></div> 
		<input class="input_captcha" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введите капчу"/>

	</form>
	<?php }?>
-->
</div><?php }} ?>
