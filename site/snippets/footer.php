  </div>
  <footer>
    <?php

      $search = new search(array(
        'searchfield' => 'q'
      ));

      $results = $search->results();

    ?>
    <?php echo kirbytext($site->copyright()) ?>
  </footer>



</body>

</html>

