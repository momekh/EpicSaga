<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="form-group">
		<div class="input-group">
			<label for="s" class="screen-reader-text"><?php _e( 'Search', 'saga' ); ?></label>
			<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'iaga' ); ?>" />
			<span class="input-group-btn">
				<button type="submit" class="submit" name="submit" id="searchsubmit"><?php //esc_attr_e( 'Search', 'saga' ); ?></button>
			</span> 
		</div> <!-- .input-group -->
	</div> <!-- .formgroup -->
</form>