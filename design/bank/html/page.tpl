{* Шаблон текстовой страницы *}

{* Канонический адрес страницы *}
{$canonical="/{$page->url}" scope=parent}

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
	<h1 data-page="{$page->id}">{$page->header|escape}</h1>

	<!-- Тело страницы -->
	<div class="page-box-body padding2-0">
		{$page->body}
	</div>
</div>	