<?php if($page->hasImages()): ?>
<div class="gallery">
  <?php foreach($page->images() as $image): ?>

    <figure class="gallery-item">
      <a class="" href="<?php echo $image->url() ?>" title="<?php echo $image->caption() ?>" rel="group">
        <?php echo thumb($image, array('width' => 188, 'height' => 188, 'crop' => true)) ?>
        <figcaption><?php echo $image->title() ?></figcaption>
      </a>
    </figure>

    <script>
      $(function() {
        $('.gallery a').fancybox();
      });
    </script>
  
  <?php endforeach ?>
</div>
<?php endif ?>


