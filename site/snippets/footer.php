
  <footer class="footer">
    <nav class="columns">
      <div class="column is-2 is-offset-3">
        <?php echo l::get('m_main') ?>
        <ul>
          <li><a href="<?php echo $site->url(); ?>"><?php echo l::get('m_trade') ?></a></li>
          <li><a href="<?php echo url('/events'); ?>"><?php echo l::get('m_events') ?></a></li>
          <li><a href="<?php echo url('/business-school'); ?>"><?php echo l::get('m_school') ?></a></li>
        </ul>
      </div>
      <div class="column is-2">
        <?php echo l::get('m_about') ?>
        <ul>
          <li><a href="<?php echo url('/about'); ?>"><?php echo l::get('m_coop') ?></a></li>
          <li><a href="<?php echo url('/about/place'); ?>"><?php echo l::get('m_place') ?></a></li>
          <li><a href="<?php echo url('/about/vision'); ?>"><?php echo l::get('m_vision') ?></a></li>
        </ul>
      </div>
      <div class="column col-impressum is-1">
          <a href="<?php echo url('/impressum'); ?>">Impressum</a>
          <div>&nbsp;</div>
          <?php foreach($site->languages() as $language): ?>
            <a href="<?php echo $page->url($language->code()) ?>"<?php e($site->language() == $language, ' class="active"') ?>>
              <?php echo html($language->name()) ?>
            </a>
          <?php endforeach ?>
      </div>

      <!-- SVG by https://simpleicons.org/ CC0 -->
      <div class="column is-1 has-text-right">
        <a href="https://facebook.com/africanterminal" class="at-sm-link is-hidden">
          <div class="at-svg-icon">
            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/></svg>
          </div>
        </a>
        <a href="https://twitter.com/africanterminal" class="at-sm-link">
          <div class="at-svg-icon">
            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/></svg>
          </div>
        </a>
      </div>
    </nav>
  </footer>
</body>
</html>
