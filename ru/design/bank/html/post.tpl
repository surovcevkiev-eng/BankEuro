{* Страница отдельной записи блога *}

{* Канонический адрес страницы *}
{$canonical="/blog/{$post->url}" scope=parent}

<style>
h1 {
    font-size: clamp(1.8rem, 1.8vw + 2vw, 2.2vw);
    font-weight: 600;
    line-height: 1.1;
    margin-top: -5px;
}
	
	.post-box{
		margin-top: 2rem;
	}
	
	.post-box div p{
		margin-bottom: 1rem;
	}
	
	.post-box img{
		    width: 100%;
    max-width: fit-content;
    height: auto;
	}
</style>

<div class="container container-post padding4 gray-page post-box">
	<!-- Заголовок /-->
	<h1 data-post="{$post->id}">{$post->name|escape}</h1>
	<p class="paddingtop-s5">{$post->date|date}</p>

	<!-- Тело поста /-->
	<div class="paddingtop-2">
		{$post->text}
	</div>	

</div>

