<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="blog">
  <article>
  
    <!-- <h1><?php echo html($page->title()) ?></h1> -->
    <h2><?php echo kirbytext($page->text()) ?></h2>
    
    <?php $articles = $page->children()->visible()->flip()->paginate(8) ?>



    <?php foreach($articles as $article): ?>
    
      <article class="blog-excerpt">
        <h2><a href="<?php echo $article->url() ?>" title="<?php echo html($article->title()) ?>"><?php echo html($article->title()) ?></a></h2>



        <p><?php echo kirbytext($article->lede()) ?></p>

        <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate" class="date">
          Published: 
        <?php echo $article->date('d.m.Y') ?>
        </time>

        <a href="<?php echo $article->url() ?>" class="read-more" title="Read full article: <?php echo html($article->title()) ?>">Read more</a>
      </article>

    <?php endforeach ?>


    <?php if($articles->pagination()->hasPages()): ?>
  
      <div class="pagination">  
        <?php if($articles->pagination()->hasNextPage()): ?>
        <a class="prev" href="<?php echo $articles->pagination()->nextPageURL() ?>" title="Previous page">Previous posts</a>
        <?php endif ?>

        <?php if($articles->pagination()->hasPrevPage()): ?>
        <a class="next" href="<?php echo $articles->pagination()->prevPageURL() ?>" title="Next page">Next posts</a>
        <?php endif ?>
      </div>
    <?php endif ?>


  </article>
</section>

<?php snippet('footer') ?>