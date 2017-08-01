<?php snippet('header'); ?>
<body>
  <?php snippet('header-nav'); ?>
  <main class="main">

    <section class="section columns">
      <div class="column is-6-desktop is-offset-3-desktop is-8-tablet  is-offset-2-tablet">
        <div class="content">
          <h2 class="title is-3"><?php echo $page->title(); ?></h2>
          <p class="contact">
            <?php echo $page->contactName(); ?><br>
            <?php echo $page->contactStreet(); ?><br>
            <?php echo $page->contactCity(); ?>
          </p>
          <p class="contact_email">
            <a href="mailto:<?php echo $page->contactEmail(); ?>"><?php echo $page->contactEmail(); ?></a> 
          </p>
          <?php echo $page->text()->kirbytext(); ?>
        </div>

        <aside class="sponsornotice">
          <p>
            Gefördert aus Mitteln des Elbkulturfonds der Freien und Hansestadt Hamburg im Rahmen des Projekts FREE&nbsp;PORT BAAKENHÖFT.
          </p>
        </aside>
      </div>
    </section>

  </main>

  <?php snippet('footer'); ?>
