<header class="hero at-hero-title has-text-centered">

  <div class="hero-body is-paddingless">
    <h1 class="title at-title is-hidden-touch">AFRICAN<img src="<?php  echo url('/assets/images/at_logo_nt.svg'); ?>" alt="African Terminal logo" class="at-logo">TERMINAL</h1>

    <div class="is-hidden-desktop">
      <h1 class="title at-title">AFRICAN</h1>
      <img src="<?php echo url('/assets/images/at_logo_nt.svg'); ?>" alt="African Terminal logo" class="at-logo">
      <h1 class="title at-title">TERMINAL</h1>
    </div>
  </div>

  <div class="hero-footer">
    <div class="columns">
      <div class="column is-6 is-offset-3">
        <nav class="at-top-nav tabs is-boxed is-fullwidth has-text-centered">
          <ul>
            <?php $main_tab = array('trade', 'events', 'business-school');
                  $about_tab = array('about', 'about/vision', 'about/place'); ?>
            <li class="<?php if(in_array($page->id(), $main_tab)): echo 'is-active'; endif; ?>">
              <a href="<?php echo $site->language()->url() ?>"><?php echo l::get('m_main') ?></a>
            </li>
            <li class="<?php if(in_array($page->id(), $about_tab)): echo 'is-active'; endif; ?>">
              <a href="<?php echo url('/about') ?>"><?php echo l::get('m_about') ?></a>
            </li>
          </ul>
        </nav>
      </div>
      <nav class="languages" role="navigation">
        <ul>
          <?php foreach($site->languages() as $language): ?>
            <li<?php e($site->language() == $language, ' class="active"') ?>>
            <a href="<?php echo $page->url($language->code()) ?>">
              <?php echo html($language->code()) ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </nav>
    </div>


  </div>

</header>

<nav class="at-sub-nav tabs is-fullwidth has-text-centered">
    <?php if(in_array($page->id(), $main_tab)): ?>
      <ul>
        <li class="is-tab <?php if($page->id()==='trade'): echo 'is-active'; endif; ?>"><a href="<?php echo $site->language()->url() ?>"><?php echo l::get('m_trade') ?></a></li>
        <li class="is-tab <?php if($page->id()==='events'): echo 'is-active'; endif; ?>"><a href="<?php echo url('/events') ?>"><?php echo l::get('m_events') ?></a></li>
        <li class="is-tab <?php if($page->id()==='business-school'): echo 'is-active'; endif; ?>"><a href="<?php echo url('/business-school') ?>"><?php echo l::get('m_school') ?></a></li>
      </ul>
    <?php endif; ?>
    <?php if(in_array($page->id(), $about_tab)): ?>
      <ul>
        <li class="is-tab <?php if($page->id()==='about'): echo ' is-active'; endif; ?>"><a href="<?php echo url('/about') ?>"><?php echo l::get('m_coop') ?></a></li>
        <li class="is-tab <?php if($page->id()==='about/place'): echo 'is-active'; endif; ?>"><a href="<?php echo url('/about/place') ?>"><?php echo l::get('m_place') ?></a></li>
        <li class="is-tab <?php if($page->id()==='about/vision'): echo 'is-active'; endif; ?>"><a href="<?php echo url('/about/vision') ?>"><?php echo l::get('m_vision') ?></a></li>
      </ul>
    <?php endif; ?>
</nav>
