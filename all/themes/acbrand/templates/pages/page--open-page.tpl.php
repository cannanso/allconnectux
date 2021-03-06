  <!-- Header content -->
  <?php if (!$is_acdc): ?>
	  <?php print render($page['header_codes']); ?>
	  <?php include_once path_to_theme() . '/templates/pages/includes/header/modals/address.inc'; ?>
		
		<?php if (!$hide_header): ?>
	  <header class="site-header">
	    <?php include_once path_to_theme() . '/templates/pages/includes/header/banners/cta-banner.inc'; ?>
	    <?php include_once path_to_theme() . '/templates/pages/includes/header/menus/main-menu.inc'; ?>
	  </header>
	  <?php endif; ?>

  <?php endif; ?>


  <?php if ($is_admin): ?>
    <?php print $messages; ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php endif; ?> 
    
	<!-- Main content -->
	      
	<?php print render($page['content']); ?>

  <!-- Footer content -->
	<?php if (!$is_acdc): ?>
		
		<?php if (!$hide_footer): ?>
		<footer class="site-footer">
		  <?php include_once path_to_theme() . '/templates/pages/includes/footer/menus/brand-menu.inc'; ?>
		  <?php include_once path_to_theme() . '/templates/pages/includes/footer/banners/cta-banner.inc'; ?>
		  <?php include_once path_to_theme() . '/templates/pages/includes/footer/menus/logos.inc'; ?>
		  <?php include_once path_to_theme() . '/templates/pages/includes/footer/menus/corporate-menu.inc'; ?>
		</footer>
		<?php endif; ?>
	
	<?php endif; ?>