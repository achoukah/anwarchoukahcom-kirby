<?php snippet( 'header') ?>
<?php snippet( 'menu') ?>

<section class="content blog-article">
    <article>
        <h2><?php echo kirbytext($article->title()) ?></h2>
        <h2>Hello</h2>
        <?php echo kirbytext($article->text()) ?>
    </article>
</section>

<?php snippet( 'footer') ?>
