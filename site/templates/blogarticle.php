<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blogarticle">
  <article>
    <h1><?php echo html($page->title()) ?></h1>

    <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate" class="date">
      <?php echo $page->date('d.m.Y') ?>
    </time>

    <?php if($page->hasImages()): ?> 

      <?php foreach($page->images() as $image): ?>
      <figure>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" />
        <figcaption><?php echo $image->caption() ?></figcaption>
      </figure>

      <?php endforeach ?>

    <?php endif ?>
    <?php echo kirbytext($page->text()) ?>


    



    

    <a class="back-blog-index" href="<?php echo url('blog') ?>">Back to blog index</a>

  </article>
</section>

<?php snippet('footer') ?>