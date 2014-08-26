<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="blog">
  <article>
  
    <!-- <h1><?php echo html($page->title()) ?></h1> -->
    <h2><?php echo kirbytext($page->text()) ?></h2>
    
    <?php $articles = $page->children()->visible()->flip()->paginate(6) ?>



    <?php foreach($articles as $article): ?>
    
      <article class="blog-item">
        <h2><a href="<?php echo $article->url() ?>" title="<?php echo html($article->title()) ?>"><?php echo html($article->title()) ?></a></h2>

        <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('d.m.Y') ?></time>
        
        
        <img class="blog-thumb" src="01-thumb.png" alt="">

        <p><?php echo excerpt($article->text(), 200) ?></p>

        <a href="<?php echo $article->url() ?>" class="read-more" title="Read full article: <?php echo html($article->title()) ?>">Read more</a>
      </article>
    <?php endforeach ?>

    <?php if($articles->pagination()->hasPages()): ?>
  
      <nav class="pagination">  
        <?php if($articles->pagination()->hasNextPage()): ?>
        <a class="prev" href="<?php echo $articles->pagination()->nextPageURL() ?>" title="Previous page">Previous posts</a>
        <?php endif ?>

        <?php if($articles->pagination()->hasPrevPage()): ?>
        <a class="next" href="<?php echo $articles->pagination()->prevPageURL() ?>" title="Next page">Next posts</a>
        <?php endif ?>
      </nav>
    <?php endif ?>
  </article>
</section>

<?php snippet('footer') ?>