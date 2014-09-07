<?php 
/**
 * EpicSaga Sidebar. Flyout. Uses Sidr. 
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="sidr">
	<aside id="sidebar-primary" class="sidebar">

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	</aside><!-- #sidebar-primary -->
	</div> <!-- #sidr -->

<?php endif; ?>