<!DOCTYPE html>
<html lang="<?php echo $site->language()->code() ?>" />
<head>
  <title><?php echo $site->title(); ?></title>

  <meta charset="utf-8" />
  <meta name="description" content="<?php echo $page->meta(); ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">

  <link rel="stylesheet" media="screen" href="<?php echo url('/assets/css/style.min.css'); ?>" type="text/css"/>

  <!-- link rel="icon" href="/assets/images/favicon-16.png" sizes="16x16" type="image/png">
	<link rel="icon" href="/assets/images/favicon-32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/assets/images/favicon-48.png" sizes="48x48" type="image/png">
	<link rel="icon" href="/assets/images/favicon-62.png" sizes="62x62" type="image/png" -->

  <!--link rel="alternate" type="application/rss+xml" href="/feed.xml" title="Blog Feed"/-->

  <?php snippet('socialmedia') ?>

  <script src="https://unpkg.com/vue"></script>

  <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
  <script>
    var config = {
      apiKey: "AIzaSyB0w5WxtgMwS8c1kY15iG7YWEokc3wKboo",
      authDomain: "africanterminal-304b3.firebaseapp.com",
      databaseURL: "https://africanterminal-304b3.firebaseio.com",
      projectId: "africanterminal-304b3",
      storageBucket: "africanterminal-304b3.appspot.com",
      messagingSenderId: "516561623115"
    };
    firebase.initializeApp(config);
  </script>
</head>
