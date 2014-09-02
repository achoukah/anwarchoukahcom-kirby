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
     
    <h2>
      Results
    </h2>
     
    

    <article class="blog-excerpt">
      <?php foreach($results as $result): ?>
        
        <h2><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h2>

        <p><?php echo excerpt($result->text(), 100) ?></p>

        <a href="<?php echo $result->url() ?>" class="read-more" title="Read full article: <?php echo html($result->title()) ?>">Read more</a>

      <?php endforeach ?>


     
    <?php snippet('pagination', array('pagination' => $results->pagination())) ?>
     
    <?php elseif($search->query()): ?>
    <div class="no-results">No results for <strong><?php echo html($search->query()) ?></strong></div>
    <?php endif ?>

  </article>
  </section>
 
<?php snippet('footer') ?>