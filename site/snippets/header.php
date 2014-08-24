<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php echo css('assets/styles/style.css') ?>
  <?php echo js('assets/js/jquery-1.11.0.min.js') ?>
  <?php echo js('assets/js/lightbox.min.js') ?>
  <?php echo js('//www.google-analytics.com/analytics.js') ?>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic|Playfair+Display:400,700,900,400italic,700italic,900italic|Inconsolata' rel='stylesheet' type='text/css'>
  
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="<?php echo html($pages->find('blog/feed')->title()) ?>" />

    <link rel="shortcut icon" href="<?= url('assets/favicon/favicon.png') ?>">


</head>

<body>

  <header>
      <h1><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h1>
      <h2><?php echo html($site->subtitle()) ?></h2>
