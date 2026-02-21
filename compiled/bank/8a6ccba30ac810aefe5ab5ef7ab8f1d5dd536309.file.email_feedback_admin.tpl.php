<?php /* Smarty version Smarty-3.1.18, created on 2022-10-20 15:49:20
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/simpla/design/html/email_feedback_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1262105774635143d05094d7-44567467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a6ccba30ac810aefe5ab5ef7ab8f1d5dd536309' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/simpla/design/html/email_feedback_admin.tpl',
      1 => 1492708202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1262105774635143d05094d7-44567467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feedback' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_635143d0524e35_11666155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635143d0524e35_11666155')) {function content_635143d0524e35_11666155($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['subject'] = new Smarty_variable("Вопрос от пользователя ".((string)htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->name, ENT_QUOTES, 'UTF-8', true)), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['subject'] = clone $_smarty_tpl->tpl_vars['subject'];?>
<h1 style='font-weight:normal;font-family:arial;'>Вопрос от пользователя <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
<table cellpadding=6 cellspacing=0 style='border-collapse: collapse;'>
  <tr>
    <td style='padding:6px; width:170; background-color:#f0f0f0; border:1px solid #e0e0e0;font-family:arial;'>
      Имя
    </td>
    <td style='padding:6px; width:330; background-color:#ffffff; border:1px solid #e0e0e0;font-family:arial;'>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->name, ENT_QUOTES, 'UTF-8', true);?>

    </td>
  </tr>
  <tr>
    <td style='padding:6px; width:170; background-color:#f0f0f0; border:1px solid #e0e0e0;font-family:arial;'>
      Email
    </td>
    <td style='padding:6px; width:330; background-color:#ffffff; border:1px solid #e0e0e0;font-family:arial;'>
      <a href='mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->email, ENT_QUOTES, 'UTF-8', true);?>
?subject=<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</a>
    </td>
  </tr>
  <tr>
    <td style='padding:6px; background-color:#f0f0f0; border:1px solid #e0e0e0;font-family:arial;'>
      IP
    </td>
    <td style='padding:6px; width:170; background-color:#ffffff; border:1px solid #e0e0e0;font-family:arial;'>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->ip, ENT_QUOTES, 'UTF-8', true);?>
 (<a href='http://www.ip-adress.com/ip_tracer/<?php echo $_smarty_tpl->tpl_vars['feedback']->value->ip;?>
/'>где это?</a>)
    </td>
  </tr>
  <tr>
    <td style='padding:6px; width:170; background-color:#f0f0f0; border:1px solid #e0e0e0;font-family:arial;'>
      Сообщение:
    </td>
    <td style='padding:6px; width:330; background-color:#ffffff; border:1px solid #e0e0e0;font-family:arial;'>
       <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['feedback']->value->message, ENT_QUOTES, 'UTF-8', true));?>

    </td>
  </tr>
</table>
<br><br>
Приятной работы с <a href='http://simp.la'>Simpla</a>!<?php }} ?>
