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

{* Страница заказа *}

{$meta_title = "Ваш заказ №`$order->id`" scope=parent}
<div class="container container-min">
  <h1 class="padding2-0">Ваш заказ №{$order->id} 
    {if $order->status == 0}принято{/if}
    {if $order->status == 1}в обработке{elseif $order->status == 2}выполнен{/if}
    {if $order->paid == 1}, оплачен{else}{/if} </h1>
  {* Список покупок *}
	
	<div class="alert-massege">
		<p>Ваша заявка будет принита как только с вами свяжеться специалист банка подтвердит наличие и сделает под вас бронь, цены могут измениться в зависимости от курсов банка на момент покупки вами в Кассе.</p>	
	</div>
	
  <table id="purchases" class="padding2-0">
    {foreach $purchases as $purchase}
    <tr> {* Изображение товара *}
      <td class="image"> {$image = $purchase->product->images|first}
        {if $image} <a href="products/{$purchase->product->url}"><img src="{$image->filename|resize:50:50}" alt="{$product->name|escape}"></a> {/if} </td>
      {* Название товара *}
      <td class="name"><a href="/products/{$purchase->product->url}">{$purchase->product_name|escape}</a> {$purchase->variant_name|escape}
        {if $order->paid && $purchase->variant->attachment} <a class="download_attachment" href="order/{$order->url}/{$purchase->variant->attachment}">скачать файл</a> {/if} </td>
      {if $purchase->amount > 1}
      {* Цена за единицу *}
      <td class="price"> {($purchase->price)|convert}&nbsp;{$currency->sign} </td>
      {* Количество *}
      <td class="amount">&times; {$purchase->amount}&nbsp;{$settings->units} </td>
      {else}
      
      {/if}
      
      {* Цена *}
      <td class="price"> {($purchase->price*$purchase->amount)|convert}&nbsp;{$currency->sign} </td>
    </tr>
    {/foreach}
    {* Скидка, если есть *}
    {if $order->discount > 0}
    <tr>
      <th class="name">скидка</th
	
      <th class="price"> {$order->discount}&nbsp;% </th>
    </tr>
    {/if}
    {* Купон, если есть *}
    {if $order->coupon_discount > 0}
    <tr>
      <th class="name">купон</th>
      <th class="price"> &minus;{$order->coupon_discount|convert}&nbsp;{$currency->sign} </th>
    </tr>
    {/if}
    {* Если стоимость доставки входит в сумму заказа *}
    {if !$order->separate_delivery && $order->delivery_price>0}
    <tr>
      <td class="name">{$delivery->name|escape}</td>
      <td class="price"> {$order->delivery_price|convert}&nbsp;{$currency->sign} </td>
    </tr>
    {/if}
    {* Итого *}
    <tr class="black-tr">
      <th class="name">Всего:</th>
      <th class="price"> {$order->total_price|convert}&nbsp;{$currency->sign} </th>
    </tr>
    {* Если стоимость доставки не входит в сумму заказа *}
    {if $order->separate_delivery}
    <tr>
      <td class="name">{$delivery->name|escape}</td>
      <td class="price"> {$order->delivery_price|convert}&nbsp;{$currency->sign} </td>
    </tr>
    {/if}
  </table>
  {* Детали заказа *}
  <h2 class="padding2-0">Детали заказа:</h2>
  <table class="order_info">
    <tr>
      <td> Дата заказа: </td>
      <td><b> {$order->date|date} в
        {$order->date|time} </b></td>
    </tr>
    {if $order->name}
    <tr>
      <td> Имя: </td>
      <td><b> {$order->name|escape} </b></td>
    </tr>
    {/if}
    {if $order->email}
    <tr>
      <td> Email: </td>
      <td><b> {$order->email|escape} </b></td>
    </tr>
    {/if}
    {if $order->phone}
    <tr>
      <td> Телефон: </td>
      <td><b> {$order->phone|escape} </b></td>
    </tr>
    {/if}
    {if $order->address}
    <tr>
      <td> Адрес доставки: </td>
      <td> {$order->address|escape} </td>
    </tr>
    {/if}
	{if $order->cityselect}
     <tr>
      <td> Город в котором вы хотите совершить покупки или продажу: </td>
      <td> <b>{$order->cityselect|escape}<b> </td>
     </tr>
    {/if}   
    {if $order->comment}
    <tr>
      <td> Комментарий: </td>
      <td><b> {$order->comment|escape|nl2br} </b></td>
    </tr>
    {/if}
  </table>
</div>
{literal}
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
{/literal}