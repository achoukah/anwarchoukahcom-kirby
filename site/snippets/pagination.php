<div class="pagination">  
 
  <div class="count">

    <? if($pagination->hasPages()): ?>
    <p><?php echo $pagination->countItems() ?> <span>Results</span></p>
    <? else: ?>
    <p>No more results</p>
    <? endif ?>

    <? if($pagination->hasPrevPage()): ?>
    <p>Showing <?php echo $pagination->numStart() ?> <span>of</span> <?php echo $pagination->numEnd() ?></p>
    <? endif ?>
    <? if($pagination->hasNextPage()): ?>
    <p>Showing <?php echo $pagination->numStart() ?> <span>of</span> <?php echo $pagination->numEnd() ?></p>
    <? endif ?>
  </div>
  
  <div class="buttons">
    <? if($pagination->hasPrevPage()): ?>
    <a class="prev" href="<?= $pagination->prevPageURL() ?>">Previous</a>
    <? else: ?>
    
    <? endif ?>
    <? if($pagination->hasNextPage()): ?>
    <a class="next" href="<?= $pagination->nextPageURL() ?>">Next</a>
    <? else: ?>
    
    <? endif ?>
  </div>
</div>

