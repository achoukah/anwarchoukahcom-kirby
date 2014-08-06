<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="blog">
  
  <!-- <h1><?php echo html($page->title()) ?></h1> -->
  <h2><?php echo kirbytext($page->text()) ?></h2>
  
  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <article class="blog-item">
    <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
    <p><?php echo excerpt($article->text(), 300) ?></p>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>