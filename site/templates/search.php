<!-- site/templates/search.php -->
<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php 
 
$search = new search(array(
  'searchfield' => 'q',
  'ignore'      => array('search', 'error'),
  'words'       => true,
  'paginate'    => 10
));
 
$results = $search->results();
      
?>

<section class="search">
  
  <article>
 
  <h1><?php echo html($page->title()) ?></h1>
   
  

  <form id="search" action="<?php echo thisURL() ?>">
    <input type="text" placeholder="Search" name="q" class="searchfield" />
    <h4>Hit 'Enter' to search</h4>
  </form>
   
  <?php if($results): ?>
   
  <?php snippet('pagination', array('pagination' => $results->pagination())) ?>
   
  <ul>
    <?php foreach($results as $row): ?>
    <li>
      <strong><a href="<?php echo $row->url() ?>"><?php echo html($row->title()) ?></a></strong>
      <a href="<?php echo $row->url() ?>"><?php echo html($row->url()) ?></a>
    </li>
    <?php endforeach ?>
  </ul>
   
  <?php snippet('pagination', array('pagination' => $results->pagination())) ?>
   
  <?php elseif($search->query()): ?>
  <div class="no-results">No results for <strong><?php echo html($search->query()) ?></strong></div>
  <?php endif ?>

  </article>
  </section>
 
<?php snippet('footer') ?>