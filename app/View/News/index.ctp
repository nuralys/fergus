<div class="news-part">
	<div class="news-part__news">
			<div class="h-heading">
					<h1 class="h-heading__text">Новости</h1>
			</div>
				<ul class="news-ul">
			<?php foreach($data as $item): ?>
					<li class="news-li">
						<div class="news-li__inner">
							<figure class="news-figure">
								<img class="news-figure__img" src="/img/news/thumbs/<?=$item['News']['img']?>">
							</figure>
							<div class="news-text">
								<a class="news-text__heading" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?=$item['News']['title']?></a>
								<p class="news-text__p"><?= $this->Text->truncate(strip_tags($item['News']['body']), 193, array('ellipsis' => '...', 'exact' => true)) ?></p>
								<a class="btn" href="/<?=$lang?>news/view/<?=$item['News']['id']?>">Подробнее</a>
							</div>
						</div>
				</li>
			<?php endforeach ?>								
			</ul>
	</div>
</div>