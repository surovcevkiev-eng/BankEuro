<?php /* Smarty version Smarty-3.1.18, created on 2022-10-30 20:52:51
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:788327849635287ab168db8-16026802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abdc9c814ebac422d8dac3d0fa54e71155279df6' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/order.tpl',
      1 => 1667155969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '788327849635287ab168db8-16026802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_635287ab1b75c7_11060286',
  'variables' => 
  array (
    'order' => 0,
    'purchases' => 0,
    'purchase' => 0,
    'image' => 0,
    'product' => 0,
    'currency' => 0,
    'settings' => 0,
    'delivery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635287ab1b75c7_11060286')) {function content_635287ab1b75c7_11060286($_smarty_tpl) {?>
	<style>
		.alert-massege{
			padding: 1rem;
		background-color: #ffeded;
		border-radius: 4px;
		margin-bottom: 2rem;
		font-size: 14px;
		}
		
		.alert-massege p{
			margin: auto;
		}
		
		
	</style>



<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Ваше замовлення №".((string)$_smarty_tpl->tpl_vars['order']->value->id), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<div class="container container-min">
  <h1 class="padding2-0">Ваше замовлення №<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
 
    <?php if ($_smarty_tpl->tpl_vars['order']->value->status==0) {?>прийнято<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->status==1) {?>в обробці<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status==2) {?>виконаний<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>, оплачений<?php } else { ?><?php }?> </h1>
  
	
	 <div class="alert-massege">
		<p>Ваша заявка буде прийнята як тільки з вами зв'яжеться спеціаліст банку та підтвердить наявність і зробить під вас бронь, ціни можуть змінитися в залежності від курсів банку на момент покупки вами в Касі.</p>	
	</div>
  <table id="purchases" class="padding2-0">
    <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
    <tr> 
      <td class="image"> <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->tpl_vars['purchase']->value->product->images), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['image']->value) {?> <a href="products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,50,50);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a> <?php }?> </td>
      
      <td class="name"><a href="/products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>

        <?php if ($_smarty_tpl->tpl_vars['order']->value->paid&&$_smarty_tpl->tpl_vars['purchase']->value->variant->attachment) {?> <a class="download_attachment" href="order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->attachment;?>
">скачать файл</a> <?php }?> </td>
      <?php if ($_smarty_tpl->tpl_vars['purchase']->value->amount>1) {?>
      
      <td class="price"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->price));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 </td>
      
      <td class="amount">&times; <?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['settings']->value->units;?>
 </td>
      <?php } else { ?>
      
      <?php }?>
      
      
      <td class="price"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->price*$_smarty_tpl->tpl_vars['purchase']->value->amount));?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 </td>
    </tr>
    <?php } ?>
    
    <?php if ($_smarty_tpl->tpl_vars['order']->value->discount>0) {?>
    <tr>
      <th class="name">скидка</th
	
      <th class="price"> <?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
&nbsp;% </th>
    </tr>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount>0) {?>
    <tr>
      <th class="name">купон</th>
      <th class="price"> &minus;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->coupon_discount);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 </th>
    </tr>
    <?php }?>
    
    <?php if (!$_smarty_tpl->tpl_vars['order']->value->separate_delivery&&$_smarty_tpl->tpl_vars['order']->value->delivery_price>0) {?>
    <tr>
      <td class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td class="price"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 </td>
    </tr>
    <?php }?>
    
    <tr class="black-tr">
      <th class="name">Разом:</th>
      <th class="price"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 </th>
    </tr>
    
    <?php if ($_smarty_tpl->tpl_vars['order']->value->separate_delivery) {?>
    <tr>
      <td class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td class="price"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 </td>
    </tr>
    <?php }?>
  </table>
  
  <h2 class="padding2-0">Деталі замовлення:</h2>
  <table class="order_info">
    <tr>
      <td> Дата замовлення: </td>
      <td><b> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 в
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 </b></td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->name) {?>
    <tr>
      <td> Ім'я: </td>
      <td><b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 </b></td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->email) {?>
    <tr>
      <td> Email: </td>
      <td><b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
 </b></td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->phone) {?>
    <tr>
      <td> Телефон: </td>
      <td><b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
 </b></td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->address) {?>
    <tr>
      <td> Адреса доставки: </td>
      <td> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
 </td>
    </tr>
    <?php }?>
	 <?php if ($_smarty_tpl->tpl_vars['order']->value->cityselect) {?>
    <tr>
      <td> Місто в якому ви хочете здійснити покупки або продаж: </td>
      <td> <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->cityselect, ENT_QUOTES, 'UTF-8', true);?>
<b> </td>
    </tr>
    <?php }?>  
    <?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
    <tr>
      <td> Коментар: </td>
      <td><b> <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>
 </b></td>
    </tr>
    <?php }?>
  </table>
</div>

<style>
	.box-news {
		display: none;
	}
	
	h1 {
		font-size: clamp(1.8rem, 1.8vw + 2vw, 2.2vw);
		font-weight: 600;
		line-height: 1.1;
		margin-top: -5px;
	}
	
	#purchases{
		width: 100%;
	}
	
	#purchases tbody{
		display: -ms-grid;
		display: grid;
		gap: 0.5rem;
		width: 100%;
	}
	
	#purchases tr {
		padding: .5rem;
		-webkit-box-pack: justify;
		    -ms-flex-pack: justify;
		        justify-content: space-between;
		background-color: var(--white);
		-ms-grid-row-align: center;
		    align-self: center;
		-webkit-box-align: center;
		    -ms-flex-align: center;
		        align-items: center;
		border: 2px solid var(--gray);
		border-radius: 6px;
		gap: 1rem;
		-ms-flex-wrap: wrap;
		    flex-wrap: wrap;
		display: -ms-grid;
		display: grid;
		    -ms-grid-columns: auto 1rem 5fr 1rem 1fr 1rem auto 1rem auto;
		    grid-template-columns: auto 5fr 1fr auto auto;
	}
	
	#purchases .amount{
		text-align: center;
	}
	
	#purchases .price{
		text-align:right;
	}
	
	@media (max-width: 991px){
		#purchases tr {
			-ms-grid-columns: auto 0.5rem 3fr 0.5rem 1fr 0.5rem auto 0.5rem auto;
			grid-template-columns: auto 3fr 1fr auto auto;
    		gap: 0.5rem;
		}
	}
	
	@media (max-width: 767px){
		#purchases tr {
			    -ms-grid-columns: auto 0.6rem 1fr;
			    grid-template-columns: auto 1fr;
				gap: 0.6rem;
				text-align: left;
				justify-items: start;
		}
		
		#purchases .image{
			-ms-grid-row: 1;
			    grid-row-start: 1;
			-ms-grid-row-span: 5;
			grid-row-end: 6;
			align-self: baseline;
		}
	}
	
	#purchases tr:hover{
		border: 2px solid var(--red)
	}
	
	#purchases .name a{
		    text-decoration: none;
			font-weight: 600;
			color: var(--black);
			font-size: 17px;
	}
	
	#purchases .name a:hover{
		color: var(--red);
	}
	
	#purchases .amount select{
		padding: 0.5rem 1rem 0.5rem 0.2rem;
		border: 2px solid var(--gray);
		background-color: var(--gray);
		border-radius: 4px;
		cursor: pointer;
	}
	
	#purchases .amount select:hover{
		border: 2px solid var(--red);
		-webkit-transition: all .0s ease-in-out;
		-o-transition: all .0s ease-in-out;
		transition: all .0s ease-in-out;
	}
	
	#purchases .remove a{
		color: #494949;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		padding: 0.5rem;
		border: 2px solid var(--gray);
		border-radius: 6px;
		-webkit-transition: all .2s ease-in-out;
		-o-transition: all .2s ease-in-out;
		transition: all .2s ease-in-out;
	}
	
	#purchases .remove a:hover{
		border: 2px solid var(--red);
		color: var(--red);
		-webkit-transition: all .0s ease-in-out;
		-o-transition: all .0s ease-in-out;
		transition: all .0s ease-in-out;
		
	}
	
	.black-tr{
		    background-color: var(--darkblue) !important;
		color: #fff;
		font-size: 20px;
		border: 2px solid var(--darkblue) !important;
		-ms-grid-columns: auto 1fr !important;
		grid-template-columns: auto 1fr !important;
		padding: 1rem !important;
	}
	
	.order_info{
		width: 100%;
	}
	
	.order_info tbody{
		width: 100%;
		display: -ms-grid;
		display: grid;
		-ms-grid-columns: 1fr 0.3rem 1fr;
		grid-template-columns: 1fr 1fr;
		    gap: 0.3rem
	}
	
	.order_info tbody tr{
		    display: -ms-grid;
		    display: grid;
			-ms-grid-columns: 1fr 2rem 1fr;
			grid-template-columns: 1fr 1fr;
			gap: 2rem;
			padding: 1rem;
			background-color: var(--gray);
	}
	
	@media (max-width: 767px){
		.order_info tbody{
			-ms-grid-columns: 1fr;
			grid-template-columns: 1fr;
		}
	}
</style>
<?php }} ?>
