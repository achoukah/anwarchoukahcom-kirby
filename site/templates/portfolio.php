<?php snippet('header') ?>
<?php snippet('menu') ?>


<section class="content gallery">
  <!-- <h1><?php echo html($page->title()) ?></h1> -->
  <article>
    
    <h2><?php echo html($page->subtitle()) ?></h2>
    <?php echo kirbytext($page->text()) ?>

    

    <?php snippet('gallery') ?>

    
  </article>

</section>

<?php snippet('footer') ?>

