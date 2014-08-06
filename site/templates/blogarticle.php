<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog-article">
  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <date><?php echo html($page->date()) ?></date>
    <?php echo kirbytext($page->text()) ?>

    <a href="<?php echo url('blog') ?>">Back</a>

  </article>
</section>

<?php snippet('footer') ?>