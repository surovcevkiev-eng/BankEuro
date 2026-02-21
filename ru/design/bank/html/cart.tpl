{* Шаблон корзины *}

{$meta_title = "Корзина" scope=parent}
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
    <h1 class="padding2-0"> {if $cart->purchases}В корзине {$cart->total_products} {$cart->total_products|plural:'товар':'товаров':'товара'}
      {else}Корзина пуста{/if} </h1>
	  
    {if $cart->purchases}
    <form method="post" name="cart">
      {* Список покупок *}
      <table id="purchases">
        {foreach $cart->purchases as $purchase}
        <tr> {* Изображение товара *}
          <td class="image"> {$image = $purchase->product->images|first}
            {if $image} <a href="products/{$purchase->product->url}"><img src="{$image->filename|resize:50:50}" alt="{$product->name|escape}"></a> {/if} </td>
          {* Название товара *}
          <td class="name"><a href="products/{$purchase->product->url}">{$purchase->product->name|escape}</a> {$purchase->variant->name|escape} </td>
          {* Цена за единицу *}
          <td class="price"> {($purchase->variant->price)|convert} {$currency->sign} </td>
          {* Количество *}
          <td class="amount"><select name="amounts[{$purchase->variant->id}]" onchange="document.cart.submit();">
              
			{section name=amounts start=1 loop=$purchase->variant->stock+1 step=1}
			
              <option value="{$smarty.section.amounts.index}" {if $purchase->amount==$smarty.section.amounts.index}selected{/if}>{$smarty.section.amounts.index} {$settings->units}</option>
              
			{/section}
		
            </select></td>
          {* Цена *}
		  {if $purchase->amount > 1}	
          <td class="price"> 
			  {($purchase->variant->price*$purchase->amount)|convert}&nbsp;
			  {$currency->sign} 
			</td>
			{else}
			<td class="price"> 
			</td>
		  {/if}	
          {* Удалить из корзины *}
          <td class="remove child--featured">
			  <a href="cart/remove/{$purchase->variant->id}">
			  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M14.12,10.47L12,12.59L9.87,10.47L8.46,11.88L10.59,14L8.47,16.12L9.88,17.53L12,15.41L14.12,17.53L15.53,16.12L13.41,14L15.53,11.88L14.12,10.47M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8,9H16V19H8V9Z" />
				</svg>
			  </a>
			</td>
        </tr>
        {/foreach}
        <tr class="black-tr">
          <th class="price" colspan="4"> Всего:
            {$cart->total_price|convert}&nbsp;{$currency->sign} </th>
        </tr>
      </table>
		
      {* Доставка *}
      {if $deliveries}
      <h2>Выберите способ доставки:</h2>
      <ul id="deliveries">
        {foreach $deliveries as $delivery}
        <li>
          <div class="checkbox">
            <input type="radio" name="delivery_id" value="{$delivery->id}" {if $delivery_id==$delivery->
            id}checked{elseif $delivery@first}checked{/if} id="deliveries_{$delivery->id}"> </div>
          <h3>
            <label for="deliveries_{$delivery->id}"> {$delivery->name}
              {if $cart->total_price < $delivery->free_from && $delivery->price>0}
              ({$delivery->price|convert}&nbsp;{$currency->sign})
              {elseif $cart->total_price >= $delivery->free_from}
              (бесплатно)
              {/if} </label>
          </h3>
          <div class="description"> {$delivery->description} </div>
        </li>
        {/foreach}
      </ul>
      {/if}
		
	
	  <div class="form-cart padding1-0">
			  <h2 class="padding1-0">Ваши контактные данные</h2>
		  
			  <div class="form cart_form">
				  {if $error}
				<div class="message_error"> 
					{if $error == 'empty_name'}Введите имя{/if}
				</div>
				{/if}
				<label>Имя фамилия</label>
				<input name="name" type="text" value="{$name|escape}" data-format=".+" data-notice="Введите имя"/>
				<label>Email</label>
				<input name="email" type="text" value="{$email|escape}" />
				<label>Телефон</label>
				<input name="phone" type="text" value="{$phone|escape}" data-format=".+" data-notice="Введите телефон"/>
				<label>Выберите город, в котором вы хотите совершить покупки или продажу</label>  
				<select name="cityselect" id="cityselect">
			 	  <option value="Город не указан" hidden="">Выберите город</option>
				  <option value="Киев">Киев</option>
				  <option value="Львов">Львов</option>
				  <option value="Винница">Винница</option>
				</select>  
<!--	
				<label>Адрес доставки</label>
				<input name="address" type="text" value="{$address|escape}"/>
-->
				<label>Комментарий к заказу</label>
				<textarea name="comment" id="order_comment" rows="5">{$comment|escape}</textarea>
<!--
				<div class="captcha"><img src="captcha/image.php?{math equation='rand(10,10000)'}" alt='captcha'/></div>
				<input class="input_captcha" id="comment_captcha" type="text" name="captcha_code" value="" data-format="\d\d\d\d" data-notice="Введіть капчу"/>
-->
				<input type="submit" name="checkout" class="btn-cart" value="Cделать заявку на резерв">
			  </div>
		  
			</form>
	</div>
    {else}
    	<div class="note-reserv">
			У вас нет резервов
			{literal}
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
			{/literal}
	  	</div>
    {/if} </div>
</div>
