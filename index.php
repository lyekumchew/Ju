<?php
/**
 * Hexo 移植主题
 * 
 * @package Ju
 * @author AUTUMN
 * @version 1.0
 * @link http://qiuri.org
 */

 $this->need('header.php');
 ?>

    <div class="site-body">
      <div class="global-width">
        <section class="archives">
        <?php while($this->next()): ?>
          <article class="archive-article archive-type-post">
            <div class="archive-article-inner">
             <header class="archive-article-header">
                 <time class="archive-article-date">
                   <?php $this->date('Y.m.d'); ?>
                 </time>
                 <h1 class="archive-article-title" itemprop="name">
                  <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                 </h1>

              </header>
            </div>
          </article>

        <?php endwhile; ?>

        </section>

      <?php $this->pageNav('Newer', 'Older', 1, '...', array('wrapTag' => 'nav', 'wrapClass' => 'page-nav', 'itemTag' => '', 'prevClass' => 'extend prev', 'nextClass' => 'extend next', 'currentClass' => 'page-number current' )); ?>
        
      </div>
    </div>

<?php $this->need('footer.php'); ?>