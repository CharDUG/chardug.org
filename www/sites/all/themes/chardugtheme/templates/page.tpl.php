
  <div id="container">
    <header>
		<div id="logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
        <img src="<?php print $logo; ?>" />
      </a>
		</div><!-- #logo -->

		<div id="gallery">
			<img src="<?php print $skyline; ?>" alt="Charlotte Skyline">
		</div><!-- #gallery -->
		<div id="header-top-bg"></div><!-- #header-top-bg -->

    </header>

    <div id="main" role="main">

		<div id="nav">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'))));  ?>
		</div><!-- #nav -->

    	<div id="main-content" class="clearfix">
        <?php print $messages; ?>

        <?php if (!empty($tabs['#primary'])): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
			<div id="news">
         <?php print render($page['content']); ?>
			</div><!-- #news -->
    	</div><!-- #main-content -->
	   	<div id="aside">
		   	<!-- #aside -->
		   	<?php print render($page['sidebar_first']); ?>
    	</div>
    <footer>
      <?php print render($page['footer']); ?>
  		&copy; CharDUG Charlotte Droupal Users Group
  </footer>
  </div> <!--! end of #container -->
</div>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
