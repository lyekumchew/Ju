<?php $this->need('header.php'); ?>

<div class="site-body">
	<div class="global-width">
		<article class="article">
			<div class="article-content">
				<header class="article-header">
					<div class="article-meta">
  						<time class="article-date">
  							<?php $this->date('Y.m.d'); ?>
  						</time>
						<div class="article-category categories" style="text-transform: capitalize; ">
							<?php $this->category(' , '); ?>
						</div>
                	</div>
    				<h1 class="article-title" itemprop="name">
						<a><?php $this->title() ?></a>
					</h1>
				</header>
				<div class="article-body">
					<?php $this->content(); ?>
				</div>
			</div>
		</article>

		<nav class="article-nav">
		<?php $this->theNext('%s', NULL, array('title' => '<strong class="article-nav-caption">Newer</strong><div class="article-nav-title"></div>', 'tagClass' => 'article-nav-link-wrap prev')); ?>
		<?php $this->thePrev('%s', NULL, array('title' => '<strong class="article-nav-caption">Older</strong><div class="article-nav-title"></div>', 'tagClass' => 'article-nav-link-wrap next')); ?>
		</a>
		</nav>
	<?php $this->need('comments.php'); ?>
	</div>
</div>
<?php $this->need('footer.php'); ?>