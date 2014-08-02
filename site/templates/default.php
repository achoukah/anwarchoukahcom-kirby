<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">
  <h1><?php echo html($page->title()) ?></h1>
  <article>
    
    <h2><?php echo html($page->subtitle()) ?></h2>
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<?php snippet('footer') ?>

