<?php /* Smarty version Smarty-3.1.18, created on 2022-10-30 20:33:34
         compiled from "/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1707108646634dc815732f41-41010431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc794f8fc1ec8ff30f32f1db9fdd9f6241b2da53' => 
    array (
      0 => '/home/fj473748/goldrwsbank.com.ua/www/design/bank/html/cart.tpl',
      1 => 1667154732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1707108646634dc815732f41-41010431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_634dc8157a5704_48258781',
  'variables' => 
  array (
    'cart' => 0,
    'purchase' => 0,
    'image' => 0,
    'product' => 0,
    'currency' => 0,
    'settings' => 0,
    'deliveries' => 0,
    'delivery' => 0,
    'delivery_id' => 0,
    'error' => 0,
    'name' => 0,
    'email' => 0,
    'phone' => 0,
    'address' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dc8157a5704_48258781')) {function content_634dc8157a5704_48258781($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/fj473748/goldrwsbank.com.ua/www/Smarty/libs/plugins/function.math.php';
?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable("Корзина", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<style>
	h1 {
		font-size: clamp(1.8rem, 1.8vw + 2vw, 2.2vw);
		font-weight: 600;
		line-height: 1.1;
		margin-top: -5px;
	}
	
	.cart-informer-icon,
	.cart-informer-box,
	.box-news,
	.footer-top-colums{
		display: none;
	}
	
	#purchases{
		width: 100%;
	}
	
	#purchases tbody{
		display: grid;
		gap: 0.5rem;
		width: 100%;
	}
	
	#purchases tr {
		padding: 1rem 1rem;
		justify-content: space-between;
		background-color: var(--white);
		align-self: center;
		align-items: center;
		border: 2px solid var(--white);
		border-radius: 6px;
		gap: 1rem;
		flex-wrap: wrap;
		display: grid;
		grid-template-columns: auto 5fr 1fr 0fr 1fr auto;
	}
	
	@media (max-width: 991px){
		#purchases tr {
			grid-template-columns: auto 3fr 1fr 0fr 1fr auto;
    		gap: 0.5rem;
		}
	}
	
	@media (max-width: 767px){
		#purchases tr {
			    grid-template-columns: auto 1fr;
				gap: 0.6rem;
				text-align: left;
				justify-items: start;
		}
		
		#purchases .image{
			grid-row-start: 1;
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
	}
	
	.cart_form{
		display: flex;
		background-color: #fff;
		padding: 2rem;
		flex-direction: column;
		gap: 0.5rem;
	}
	
	.cart_form input,
	.cart_form textarea,
	.cart_form select{
		padding: 1rem;
		border: 1px solid #ccc;
		outline: none;
		resize: vertical;
	}
	
	.cart_forminput:active,
	.cart_form textarea:active,
	.cart_form select:active,
	.cart_form input:focus, 
	.cart_form textarea:focus,
	.cart_form select:focus{
    border: 1px solid var(--red);
    outline: 1px solid var(--red);
    -webkit-transition: all .1s ease-in-out;
    -o-transition: all .1s ease-in-out;
    transition: all .1s ease-in-out;
}
	
	.btn-cart{
		max-width: 50%;
		background-color: var(--red);
		color: var(--white);
		font-size: var(--md-size2);
		font-weight: 600;
		border-radius: 38px;
		border: 3px solid var(--red) !IMPORTANT;
		cursor: pointer;
	}
	
	.btn-cart:hover{
		background-color: var(--white);
		color: var(--red);
		border: 3px solid var(--red) !IMPORTANT;
	}
	.alert-massege{
		margin-bottom: 2rem;
		font-size: 14px;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		    flex-wrap: wrap;
		gap: 0.5rem;
		}
	
	.alert-massege p{
		width: 100%;
		font-weight: 600;
		padding-bottom: 0.4rem;
	}
	
	
	.alert-massege a{
		    color: #fff;
		border: 2px solid var(--red);
    padding: 0.4rem 1rem 0.4rem 0.8rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    background-color: #ba2222;
    border-radius: 2rem;
		transition: all .3s;
		font-weight: 500;
    text-decoration: none;
    /* flex-wrap: wrap; */
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    gap: 0.4rem;
    font-size: 15px;
    -ms-flex-line-pack: center;
        align-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
	}
	
	.alert-massege a:hover{
		background: #fff;
		color: var(--red);
	}
	
	.alert-massege svg{
		min-width: -webkit-fit-content;
		min-width: -moz-fit-content;
		min-width: fit-content;
	}
	
	
	
	@media (max-width: 767px){
		.btn-cart{
			max-width: 100%;
		}
	}
</style>
<div class="gray-page">
  <div class="container padding2-0">
    <h1 class="padding2-0"> <?php if ($_smarty_tpl->tpl_vars['cart']->value->purchases) {?>В кошику <?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,'товар','товарів','товару');?>

      <?php } else { ?>Кошик порожній<?php }?> </h1>
	  
    <?php if ($_smarty_tpl->tpl_vars['cart']->value->purchases) {?>
	 <div class="alert-massege">
			<p>Метали можна забрати лише через касу РВС Банку у наступних містах:</p>
			<a href="https://www.google.com/maps/place/RwS+bank+(%D0%A0%D0%92%D0%A1+%D0%B1%D0%B0%D0%BD%D0%BA)/@50.462235,30.480601,19z/data=!4m5!3m4!1s0x0:0xd750df532a8acc0d!8m2!3d50.4622144!4d30.4805761?hl=ru" target="_blank"><svg style="width:21px;height:21px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
</svg> м. Київ, вул. Білоруська, 8</a>
			<a href="https://www.google.com/maps?ll=49.832539,24.017558&z=16&t=m&hl=ru&gl=BE&mapclient=embed&cid=2888712522001955051" target="_blank"><svg style="width:21px;height:21px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
</svg> м. Львів, вул. Нечуя Левицького, 2</a>
			<a href="https://www.google.com/maps?ll=49.232546,28.458054&z=19&t=m&hl=ru&gl=BE&mapclient=embed&cid=6270469456402170744" target="_blank"><svg style="width:21px;height:21px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
</svg> м. Вінниця, вул. Гоголя, 1</a>
	</div> 
	  
    <form method="post" name="cart">
      
      <table id="purchases">
        <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
        <tr> 
          <td class="image"> <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->tpl_vars['purchase']->value->product->images), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['image']->value) {?> <a href="products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,50,50);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></a> <?php }?> </td>
          
          <td class="name"><a href="products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
</a> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
 </td>
          
          <td class="price"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 </td>
          
          <td class="amount"><select name="amounts[<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
]" onchange="document.cart.submit();">
              
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['name'] = 'amounts';
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['purchase']->value->variant->stock+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['amounts']['total']);
?>
			
              <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['amounts']['index'];?>
" <?php if ($_smarty_tpl->tpl_vars['purchase']->value->amount==$_smarty_tpl->getVariable('smarty')->value['section']['amounts']['index']) {?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['amounts']['index'];?>
 <?php echo $_smarty_tpl->tpl_vars['settings']->value->units;?>
</option>
              
			<?php endfor; endif; ?>
		
            </select></td>
          
		  <?php if ($_smarty_tpl->tpl_vars['purchase']->value->amount>1) {?>	
          <td class="price"> 
			  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price*$_smarty_tpl->tpl_vars['purchase']->value->amount));?>
&nbsp;
			  <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 
			</td>
			<?php } else { ?>
			<td class="price"> 
			</td>
		  <?php }?>	
          
          <td class="remove child--featured">
			  <a href="cart/remove/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
">
			  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M14.12,10.47L12,12.59L9.87,10.47L8.46,11.88L10.59,14L8.47,16.12L9.88,17.53L12,15.41L14.12,17.53L15.53,16.12L13.41,14L15.53,11.88L14.12,10.47M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8,9H16V19H8V9Z" />
				</svg>
			  </a>
			</td>
        </tr>
        <?php } ?>
        <tr class="black-tr">
          <th class="price" colspan="4"> Разом:
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 </th>
        </tr>
      </table>
		
      
      <?php if ($_smarty_tpl->tpl_vars['deliveries']->value) {?>
      <h2>Виберіть спосіб доставки:</h2>
      <ul id="deliveries">
        <?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['delivery']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
 $_smarty_tpl->tpl_vars['delivery']->index++;
 $_smarty_tpl->tpl_vars['delivery']->first = $_smarty_tpl->tpl_vars['delivery']->index === 0;
?>
        <li>
          <div class="checkbox">
            <input type="radio" name="delivery_id" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['delivery_id']->value==$_smarty_tpl->tpl_vars['delivery']->value->id) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['delivery']->first) {?>checked<?php }?> id="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"> </div>
          <h3>
            <label for="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['delivery']->value->name;?>

              <?php if ($_smarty_tpl->tpl_vars['cart']->value->total_price<$_smarty_tpl->tpl_vars['delivery']->value->free_from&&$_smarty_tpl->tpl_vars['delivery']->value->price>0) {?>
              (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['delivery']->value->price);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
)
              <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value->total_price>=$_smarty_tpl->tpl_vars['delivery']->value->free_from) {?>
              (бесплатно)
              <?php }?> </label>
          </h3>
          <div class="description"> <?php echo $_smarty_tpl->tpl_vars['delivery']->value->description;?>
 </div>
        </li>
        <?php } ?>
      </ul>
      <?php }?>
		
	
	  <div class="form-cart padding1-0">
			  <h2 class="padding1-0">Ваші контактні дані</h2>
		  
			  <div class="form cart_form">
				  <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
				<div class="message_error"> 
					<?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>Введите имя<?php }?>
				</div>
				<?php }?>
				<label>Ім'я прізвище</label>
				<input name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-format=".+" data-notice="Введіть ім'я"/>
				<label>Email</label>
				<input name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				<label>Телефон</label>
				<input name="phone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-format=".+" data-notice="Введіть телефон"/>
				<label>Оберіть місто в якому ви хочете здійснити покупки або продаж</label>  
				<select name="cityselect" id="cityselect">
			 	  <option value="Місто не вказано" hidden="">Оберіть місто</option>
				  <option value="Київ">Київ</option>
				  <option value="Львів">Львів</option>
				  <option value="Вінниця">Вінниця</option>
				</select>  
<!--
				<label>Адрес доставки</label>
				<input name="address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
-->
				<label>Коментар до замовлення</label>
				<textarea name="comment" id="order_comment" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
<!--
				<div class="captcha"><img src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt='captcha'/></div>
				<input class="input_captcha" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введіть капчу"/>
-->
				<input type="submit" name="checkout" class="btn-cart" value="зробити заявку на резерв">
			  </div>
		  
			</form>
	</div>
    <?php } else { ?>
    	<div class="note-reserv">
			У вас немає резервів
			
				<style>
					.gray-page{
						background-color: #fff;
					}
					footer{
						    bottom: 0;
							position: absolute;
							width: 100%;
					}
				</style>
			
	  	</div>
    <?php }?> </div>
</div>
<?php }} ?>
