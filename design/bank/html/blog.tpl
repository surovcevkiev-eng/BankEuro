{* Список записей блога *}

{* Канонический адрес страницы *}
{$canonical="/blog" scope=parent}
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
<h1>{$page->name}</h1>

{include file='pagination.tpl'}

<!-- Статьи /-->
<ul id="blog" class="blog-sections padding2-0">
	{foreach $posts as $post}
	<li class="gray-page padding3">
		<h3><a data-post="{$post->id}" href="blog/{$post->url}">{$post->name|escape}</a></h3>
		<p class="padding1-0">{$post->date|date}</p>
		<p>{$post->annotation}</p>
	</li>
	{/foreach}
</ul>
<!-- Статьи #End /-->    

{include file='pagination.tpl'}
</div>

          