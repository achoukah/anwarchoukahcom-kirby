  </div>
  <footer>
    <?php
      $search = new search(array(
        'searchfield' => 'q'
      ));

      $results = $search->results();
    ?>

    <?php echo kirbytext($site->copyright()) ?>
    <ul>
      <li><a href="<?php echo url('blog/feed') ?>">RSS Feed</a></li>
    </ul>

  </footer>

</body>

</html>

