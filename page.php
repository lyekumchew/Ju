<?php $this->need('header.php'); ?>
    <div class="site-body">
    	<div class="alert alert-default">
    		page : <strong class="text-capitalize"><?php $this->title() ?></strong>
    	</div>
		<div class="global-width">
        	<article class="article">
        		<div class="article-content">
        			<div class="article-body">
        			<?php $this->content(); ?>
        			</div>
        		</div>
			</article>
            <?php $this->need('comments.php'); ?>
		</div>
    </div>
<?php $this->need('footer.php'); ?>