  </div>
  <footer>

    
    <?php
      $search = new search(array(
        'searchfield' => 'q'
      ));

      $results = $search->results();
    ?>

    <form id="search" action="<?php echo thisURL() ?>">
      <h3>Search</h3>
      <input type="text" placeholder="Search" name="q" class="searchfield" />
      <h4>Hit 'Enter' to search</h4>
    </form>


      <ul class="social">
        <li><a href="http://twitter.com/achoukah" class="twitter" target="_blank"></a></li>
        <li><a href="http://uk.linkedin.com/in/anwarchoukah/" class="linkedin" target="_blank"></a></li>
        <li><a href="http://anwarchoukah.tumblr.com/" class="tumblr" target="_blank"></a></li>
        <!-- <li><a href="https://www.behance.net/achoukah" class="behance" target="_blank"></a></li> -->
        <li><a href="http://codepen.io/achoukah" class="codepen" target="_blank"></a></li>
      </ul>


    <ul>
      <li><?php echo kirbytext($site->copyright()) ?></li>
      <li><a href="https://twitter.com/achoukah" class="twitter-follow-button" data-width="140px" data-align="center" data-show-count="false">Follow @achoukah</a></li>
      <li>Made with <a href="http://getkirby.com/" target="_blank">Kirby</a></li>
      <li><a class="rss-feed" href="<?php echo url('blog/feed') ?>">RSS</a></li>
    </ul>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  </footer>

</body>

</html>

