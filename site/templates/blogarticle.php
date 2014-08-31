<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blogarticle">
  <article>
    <h1><?php echo html($page->title()) ?></h1>

    <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate" class="date">
      <?php echo $page->date('d.m.Y') ?>
    </time>

    <?php if($page->hasImages()): ?> 

    <?php echo kirbytext($page->text()) ?>

    <?php endif ?>



    



    

    <a class="back-blog-index" href="<?php echo url('blog') ?>">Back to blog index</a>

  </article>
</section>

<?php snippet('footer') ?>