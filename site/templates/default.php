<?php snippet('header') ?>
<?php snippet('menu') ?>


<section>
  <!-- <h1><?php echo html($page->title()) ?></h1> -->
  <article>
    
    <h2><?php echo html($page->subtitle()) ?></h2>
    <?php echo kirbytext($page->text()) ?>

    <a class="gallery-item" href="http://lorempixel.com/800/600/abstract/1" data-lightbox="image-1" data-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis alias perferendis modi ipsum id obcaecati rem nisi illum dolorem voluptatem beatae ducimus, excepturi laudantium consectetur, vel, asperiores. Itaque nesciunt, ipsum.">
      <img src="http://lorempixel.com/188/188/abstract/1" alt="">
    </a>
  </article>

</section>

<?php snippet('footer') ?>

