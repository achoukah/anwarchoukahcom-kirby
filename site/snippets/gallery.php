<?php if($page->hasImages()): ?>
<div class="gallery">
  <?php foreach($page->images() as $image): ?>
  <article>
    <a class="gallery-item" href="<?php echo $image->url() ?>">
      <img src="<?php echo $image->url() ?>" width="188" height="188" alt="<?php echo $image->name() ?>" /></a>
  </article>
  <?php endforeach ?>
</div>
<?php endif ?>