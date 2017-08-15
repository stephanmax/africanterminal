<?php
  if ($page->isHomePage()):
    $meta_title = $site->title();
  else:
    $meta_title = $page->title() . ' | ' . $site->title();
  endif;

  if ($page->image()):
    $meta_img = $page->image()->url();
  else:
    $meta_img = url('/assets/images/at_logo_nt.svg');
  endif;
 ?>

<meta name="twitter:card"        content="summary_large_image">
<!--meta name="twitter:site"     content="@africanterminal"-->
<!--meta name="twitter:creator"  content="@africanterminal"-->
<meta name="twitter:title"       content="<?php echo $meta_title ?>">
<meta name="twitter:description" content="<?php echo $page->meta() ?>">
<meta name="twitter:image"       content="<?php echo $meta_img ?>">
<!--meta name="twitter:image:alt" content="description"-->

<!--meta property="og:app_id"    content="#app_id"-->
<meta property="og:title"        content="<?php echo $meta_title ?>">
<meta property="og:description"  content="<?php echo $page->meta() ?>">
<meta property="og:image"        content="<?php echo $meta_img ?>">
<meta property="og:type"         content="website">
<meta property="og:url"          content="<?php echo $page->url() ?>">
<meta property="og:locale"       content="<?php echo $site->language()->locale() ?>">
