<footer class="site-footer">
  <div class="global-width">
    <ul class="site-widget">

	<li class="widget widget-tag">
		<div class="widget-wrap">
		<h3 class="widget-title">Tags</h3>
		<div class="widget-body">
		<ul class="tag-list"><li class="tag-list-item"><a class="tag-list-link" href="http://dev.zzoman.com/tags/WDRL/">WDRL</a><span class="tag-list-count">10</span></li><li class="tag-list-item"><a class="tag-list-link" href="http://dev.zzoman.com/tags/facebook-API/">facebook API</a><span class="tag-list-count">1</span></li></ul>
		</div>
		</div>
	</li>
                
    <li class="widget widget-category">
        <div class="widget-wrap">
			<h3 class="widget-title">Categories</h3>
			<div class="widget-body">
            <ul class="category-list">
            	<?php $this->widget('Widget_Metas_Category_List') ->parse('<li class="category-list-item"><a href="{permalink}" class="category-list-link">{name}</a><span class="category-list-count">{count}</span></li>'); ?>
            </ul>
          </div>
		</div>
	</li>

	<li class="widget widget-recent_posts">          
        <div class="widget-wrap">
			<h3 class="widget-title">Recents</h3>
			<div class="widget-body">
				<ul>
					<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=5')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul>
			</div>
		</div>
	</li>
                
    </ul>
  </div>
  <div class="site-info">
            <address>
                &copy; <?php echo date('Y'); ?> AUTUMN.
                <br>
                Powered by <a href="http://typecho.org/">Typecho</a>. Theme by <a href="https://qiuri.org/go/Ju/">Github</a>
            </address>
  </div>
</footer>
	<script src="<?php $this->options->themeUrl('/js/jquery-1.11.3.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php $this->options->themeUrl('/js/jquery.fancybox.js'); ?>" type="text/javascript"></script>
	<script src="<?php $this->options->themeUrl('/js/zoom.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('/js/transition.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('/js/site_init.js'); ?>" type="text/javascript"></script>
    <script>
	$("article img").each(function() {
        $(this).attr('data-action', 'zoom');
    });
    </script>
<?php $this->footer(); ?>
</body>
</html>