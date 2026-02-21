{* Информера корзины (отдаётся аяксом) *}
<style>
	
	.cart-informer-close{
	    padding: 1rem 1rem 1rem 2rem;
		-ms-flex-item-align: auto;
		    -ms-grid-row-align: auto;
		    align-self: auto;
		-webkit-box-pack: justify;
		    -ms-flex-pack: justify;
		        justify-content: space-between;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
	}
	
	.cart-informer-btns{
		    display: -webkit-box;
		    display: -ms-flexbox;
		    display: flex;
		gap: 1rem;
		-webkit-box-pack: justify;
		    -ms-flex-pack: justify;
		        justify-content: space-between;
	}
	
	.cart-informer-btns *{
		  -ms-flex-item-align: center;
		      -ms-grid-row-align: center;
		      align-self: center;
    padding: 1.2rem 2.2vw;
    font-size: var(--sm-size);
	}
	
	.cart-informer-close p{
		font-size: 22px;
		font-weight: 600;
	}
	
	#closeModalCart{
		cursor: pointer;
	}
	
	#closeModalCart:hover{
		color: var(--red);
	}
	
	.cart-informer{
		position: absolute;
		top: 0;
		left: 0;
	}
	
	.cart-informer-box{
		position: fixed;
		z-index: -1;
		top: 0;
		left: 0;
		opacity: 0;
		background-color: hsl(0deg 0% 0% / 60%);
		width: 100%;
		height: 100%;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-transition: all .0s ease-in-out;
		-o-transition: all .0s ease-in-out;
		transition: all .0s ease-in-out;
	}
	
	.cart-informer-box--in{
		    margin: auto;
			background-color: #fff;
			min-width: 500px;
			width: 50vw;
			height: auto;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			    -ms-flex-direction: column;
			        flex-direction: column;
			border-radius: 6px;
	}
	
	.visible-cart{
		z-index: 1;
		opacity: 1;
		-webkit-transition: all .0s ease-in-out;
		-o-transition: all .0s ease-in-out;
		transition: all .0s ease-in-out;
	}
	
	.cart-informer-icon{
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
		z-index: 1;
		background-color: var(--red);
		width: 60px;
		height: 60px;
		border: 2px solid var(--red);
		border-radius: 35px;
		-webkit-box-align: center;
		    -ms-flex-align: center;
		        align-items: center;
		-webkit-box-pack: center;
		    -ms-flex-pack: center;
		        justify-content: center;
		-ms-flex-line-pack: center;
		    align-content: center;
		color: #fff;
		cursor: pointer;
		right: 2%;
		position: fixed;
		bottom: 2%;
		-webkit-box-shadow: 1px 2px 36px -5px rgb(0 0 0 / 85%);
		box-shadow: 1px 2px 36px -5px rgb(0 0 0 / 85%);
	}
	
	.cart-informer-icon:hover{
		background-color: #981818;
	}
	
	.cart-informer-number{
			    background-color: #000;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    color: #ffffff;
    font-weight: 700;
    min-width: 32px;
    width: auto;
    padding: 0.46rem 0rem;
    -ms-flex-line-pack: center;
    align-content: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 30px;
    margin: -40px 0 0 -60px;
    position: absolute;
    font-size: 12px;
	}
	
	.cart-informer-in{
		height: 100%;
		padding: 2rem;
		background-color: var(--gray);
	}
	
	.cart-informer-off{
		display: none;
	}
	
	@media (max-width: 767px){
		.cart-informer-box--in{
			width: 96%;
			    min-width: auto;
		}
		
		.cart-informer-btns {
			-ms-flex-wrap: wrap;
			    flex-wrap: wrap;
		}
		
		.cart-informer-btns *{
			width: 100%;
			-ms-flex-item-align: center;
			    -ms-grid-row-align: center;
			    align-self: center;
			-webkit-box-align: center;
			    -ms-flex-align: center;
			        align-items: center;
			-ms-flex-line-pack: center;
			    align-content: center;
			-webkit-box-pack: center;
			    -ms-flex-pack: center;
			        justify-content: center;
			border-width: 2px;
		}
	}
</style>
<div class="cart-informer"> {if $cart->total_products>0}
  <div id="cartBtn" class="cart-informer-icon">
    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" />
    </svg>
    <div class="cart-informer-number" id="cart_informer"> {$cart->total_products} </div>
  </div>
  <div id="cartModal" class="cart-informer-box">
    <div class="cart-informer-box--in">
      <div class="cart-informer-close">
        <p>Корзина</p>
        <svg id="closeModalCart" style="width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path>
        </svg>
      </div>
      <div class="cart-informer-in"><b>{$cart->total_products} {$cart->total_products|plural:'товар':'товарів':'товару'}</b> на сумму <b>{$cart->total_price|convert} {$currency->sign|escape}</b> </div>
      <div class="cart-informer-btns padding2">
        <button id="closeCart" class="btn-line">Продолжить покупки</button>
        <a class="btn" href="./cart/">Оформить резерв</a> </div>
    </div>
  </div>
  {else}
  <div class="cart-informer-off"> Корзина пуста </div>
  {/if} </div>
{literal} 
<script>
	document.getElementById('cartBtn').onclick = function() {
		document.getElementById('cartModal').classList.toggle('visible-cart');
}
	document.getElementById('closeModalCart').onclick = function() {
		document.getElementById('cartModal').classList.toggle('visible-cart');
}
	document.getElementById('closeCart').onclick = function() {
		document.getElementById('cartModal').classList.toggle('visible-cart');
}
</script> 
{/literal}