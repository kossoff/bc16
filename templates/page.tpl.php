<div class="page-wrapper">
  <!--.page -->
  <div role="document" class="page">

    <!--.l-header -->
    <header role="banner" class="l-header">

      <?php if ($top_bar): ?>
        <!--.top-bar -->
        <?php if ($top_bar_classes): ?>
          <div class="<?php print $top_bar_classes; ?>">
        <?php endif; ?>
        <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name">
              <a href="/" rel="home">
                <!-- <h1><?php print $linked_site_name; ?></h1> -->
                <img class="logo" src="/<?php print path_to_theme(); ?>/logo.png" />
              </a>

              <div class="phones text-right hide-for-small">
                <a href="tel:88005007250">8 800 500-72-50</a><br>
                <a href="tel:+74952110182">+7 495 211-01-82</a>
                <?php /* <a href="/node/10?width=300&amp;height=210" class="callback-button colorbox-node init-colorbox-node-processed-processed">Обратный звонок</a> */ ?>
              </div>
            </li>
            <li class="toggle-topbar menu-icon">
              <a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>

          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) : ?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) : ?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
        <?php if ($top_bar_classes): ?>
          </div>
        <?php endif; ?>
        <!--/.top-bar -->
      <?php endif; ?>

      <?php if (!empty($page['header'])): ?>
        <!--.l-header-region -->
        <section class="l-header-region row">
          <div class="columns">
            <?php print render($page['header']); ?>
          </div>
        </section>
        <!--/.l-header-region -->
      <?php endif; ?>

    </header>
    <!--/.l-header -->

    <?php if (!empty($page['featured'])): ?>
      <!--.l-featured -->
      <section class="l-featured row">
        <div class="columns">
          <?php print render($page['featured']); ?>
        </div>
      </section>
      <!--/.l-featured -->
    <?php endif; ?>

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
      <!--.l-messages -->
      <section class="l-messages row">
        <div class="columns">
          <?php if ($messages): print $messages; endif; ?>
        </div>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
      <!--.l-help -->
      <section class="l-help row">
        <div class="columns">
          <?php print render($page['help']); ?>
        </div>
      </section>
      <!--/.l-help -->
    <?php endif; ?>

    <div class="hide-for-small"
      <?php
        if ( isset( $node ))
          if ( $node->type == 'serivce' ) {
            $img_url = file_create_url($node->field_service_cover['und'][0]['uri']);

            print 'style="background-image: url(\'' . $img_url . '\'); background-size: cover; background-position: 50% 50%; height: 300px;"';
          }
      ?>
    ></div>

    <!--.l-main -->
    <main role="main" class="row l-main">
      <!-- .l-main region -->
      <div class="<?php print $main_grid; ?> main columns">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php /* if ($breadcrumb): print $breadcrumb; endif; */ ?>

        <?php if ($title): ?>
          <?php print render($title_prefix); ?>
          <h1 id="page-title" class="title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        <?php endif; ?>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
      <!--/.l-main region -->

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </main>
    <!--/.l-main -->

    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
      <!--.triptych-->
      <section class="l-triptych row">
        <div class="triptych-first medium-4 columns">
          <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle medium-4 columns">
          <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last medium-4 columns">
          <?php print render($page['triptych_last']); ?>
        </div>
      </section>
      <!--/.triptych -->
    <?php endif; ?>

    <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
      <!--.footer-columns -->
      <section class="row l-footer-columns">
        <?php if (!empty($page['footer_firstcolumn'])): ?>
          <div class="footer-first medium-3 columns">
            <?php print render($page['footer_firstcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_secondcolumn'])): ?>
          <div class="footer-second medium-3 columns">
            <?php print render($page['footer_secondcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_thirdcolumn'])): ?>
          <div class="footer-third medium-3 columns">
            <?php print render($page['footer_thirdcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_fourthcolumn'])): ?>
          <div class="footer-fourth medium-3 columns">
            <?php print render($page['footer_fourthcolumn']); ?>
          </div>
        <?php endif; ?>
      </section>
      <!--/.footer-columns-->
    <?php endif; ?>

    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
  </div>
</div>

<!--.l-footer -->
<footer role="contentinfo">
  <div class="l-footer row wide">
    <div class="large-3 columns">
      Copyright &copy; ООО "БОНЖУР прожект" 2016<br>
      Все права защищены.
    </div>
    <div class="large-3 columns text-center">
      Мы в соцсетях<br>
      <a href="https://www.facebook.com/bonjourcatering.ru"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/bonjourcatering/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
      <a href="https://vk.com/bonjour_catering"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
    </div>
    <div class="large-3 columns text-center">
      Принимаем к оплате<br>
      <i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
      <i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
    </div>
    <div class="large-3 columns">
      <div class="right">
        <!-- EventCatalog.ru widget start -->
        <div class="evcInformer" id="eventcatalogWidget" data-widget-type="2" data-widget-hash="2d7ad4c66b39aaeeb1cfd0a511b5cd64" data-resident-id="10303-c"><div class="evcWrapper"><div class="evcRatingWrapper"><a href="http://eventcatalog.ru" title="EventCatalog.ru — всё для организации мероприятий!"><img id="evcWidgetImage" class="evcWidgetImage" src="http://eventcatalog.ru/images/widgets/widget-type-2.png" alt="EventCatalog.ru — всё для организации мероприятий!"></a><script src="http://eventcatalog.ru/js/widget.js" type="text/javascript"></script></div></div></div>
        <!-- EventCatalog.ru widget end -->
      </div>
    </div>
    <?php /*<?php if (!empty($page['footer'])): ?>
      <div class="footer columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if ($site_name) : ?>
      <div class="copyright columns">
        &copy; <?php print date('Y') . ' ' . $site_name . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?> */ ?>
  </div>
</footer>
<!--/.l-footer -->
<!--/.page -->
