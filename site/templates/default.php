<?php snippet('header'); ?>
<body>
  <?php snippet('header-nav'); ?>
  <main class="main">

    <?php if($page->intro()->isNotEmpty()): ?>
      <section class="section columns">
        <div class="column is-6-desktop is-offset-3-desktop is-8-tablet is-offset-2-tablet">
          <article class="content at-intro">
            <?php echo $page->intro()->kirbytext(); ?>
          </article>
        </div>
      </section>
    <?php endif; ?>

    <?php if($page->image()): ?>
      <section class="level is-fullwidth">
        <img class="at-header-img" src="<?php echo $page->image()->url(); ?>" alt="">
      </section>
    <?php endif; ?>

    <section class="section columns">
      <div class="column is-6-desktop is-offset-3-desktop is-8-tablet is-offset-2-tablet">

        <div class="columns">
          <div class="column is-7">
            <article class="content">
              <h2 class="title is-3"><?php echo $page->title(); ?></h2>
              <?php echo $page->text()->kirbytext(); ?>
            </article>
          </div>

          <aside class="column is-5" id="news">
            <?php foreach($site->page('news')->children()->flip()->limit(3) as $post): ?>
              <div class="level">
                <div class="card">
                  <article>
                    <header class="card-header">
                      <p class="card-header-title">
                        <?php echo $post->title(); ?>
                      </p>
                    </header>
                    <?php if($post->image()): ?>
                      <div class="card-image">
                        <figure class="image">
                          <img src="<?php echo $post->image()->url(); ?>" alt="Image">
                        </figure>
                      </div>
                    <?php endif; ?>
                    <div class="card-content">
                      <div class="content at-news-content">
                        <?php echo $post->text()->kirbytext(); ?>
                        <small class="is-pulled-right"><?php echo $post->date('%d.%m.%y') ?></small>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            <?php endforeach; ?>
          </aside>
        </div>

        <?php if($page->id() === 'trade'): ?>
          <aside class="sponsornotice">
            <p>Gefördert aus Mitteln des Elbkulturfonds der Freien und Hansestadt Hamburg im Rahmen des Projekts FREE&nbsp;PORT BAAKENHÖFT.</p>
          </aside>
        <?php endif; ?>
      </div>
    </section>


    <?php snippet('form-contribute'); ?>

  </main>

  <?php snippet('footer'); ?>
