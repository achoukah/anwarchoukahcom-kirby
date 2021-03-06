  <?php 

  // nested menu
  $items = $pages->visible();

  // only show the menu if items are available
  if($items->count() > 0): 

  ?>
  <nav>
    <ul>    
      <?php foreach($items as $item): ?>
      <li>
        <a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a>

        <?php 

        // get all children for the current menu item
        $children = $item->children()->visible();
        // $children = $pages->visible()->not('contact');

        // display the submenu if children are available
        if($children->count() > 0): 

        ?>
        <ul class="submenu">
          <?php foreach($children as $child): ?>
          <li style="display: block"><a<?php ecco($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><?php echo html($child->title()) ?></a></li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>

      </li>
      <?php endforeach ?>
    </ul>
  </nav>
  <?php endif ?>
</header>