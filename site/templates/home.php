<?php snippet('header') ?>
<?php snippet('menu') ?>


<section class="home">
  
  <article>
    <h1><?php echo html($page->title()) ?></h1>

    <h2><?php echo html($page->subtitle()) ?></h2>

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

    <?php if($page->hasImages()): ?>
    <?php $image = $page->images()->find('02.jpg') ?>

    <figure>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /> 
      <figcaption><?php echo $image->caption() ?></figcaption>
    </figure>

    <? else: ?>
    <?php endif ?>

    <h2>Portfolio</h2>
    
    <?php snippet('gallery') ?>

    <h2>Latest articles</h2>

    

    
  </article>

</section>

<?php snippet('footer') ?>

