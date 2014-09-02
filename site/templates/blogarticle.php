<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blogarticle">
  <article>
    <h1><a href="<?php echo $page->url() ?>" title="<?php echo html($page->title()) ?>"><?php echo html($page->title()) ?></a></h1>

    <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate" class="date">
      <?php echo $page->date('d.m.Y') ?>
    </time>

    <?php echo kirbytext($page->lede()) ?>
    
    <?php if($page->hasImages()): ?>
    <?php $image = $page->images()->find('01.jpg') ?>

    <figure>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /> 
      <figcaption><?php echo $image->caption() ?></figcaption>
    </figure>

    <? else: ?>
    <?php endif ?>

    <?php echo kirbytext($page->text()) ?>

    <a class="back-blog-index" href="<?php echo url('blog') ?>">Back to blog index</a>

  </article>
</section>

<?php snippet('footer') ?>