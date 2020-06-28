<div class="candid-theme-steps-list">
<div class="left-box-wrapper-outer">
<div class="op-box-wrapper candid-welcome-box-white">
	<div class="op-box-wrapper candid-welcome-box-white">
	<div class="op-box-header"><?php esc_html_e('Welcome to Refined Magazine','refined-magazine'); ?></div>
	<div class="box-content">
		<p><?php esc_html_e('Thank you for choosing Refined Magazine. Check plugin recommendation section and below setting to know more about theme.','refined-magazine'); ?></p>
	</div>
</div>
	<div class="op-box-header"><?php esc_html_e('Access Your Customizer Setting Easily','refined-magazine'); ?></div>
	<div class="op-box-content">
		<ul class="op-list clearfix">
			<?php
			 $url = admin_url( 'customize.php' );

	        $links = array(
	        	array(
	                'label' => __( 'Check Theme Settings', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'panel' => 'refined_magazine_panel' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-admin-generic',
	            ),
	            array(
	                'label' => __( 'Logo & Site Identity', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'title_tagline' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-format-image',
	            ),
	            array(
	                'label' => __( 'Manage Widgets Settings', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'panel' => 'widgets' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-admin-generic',
	            ),
	            array(
	                'label' => __( 'Header Image', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'header_image' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-align-center',
	            ),
	            array(
	                'label' => __( 'Primary Color', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'colors' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-admin-customizer',
	            ),
	            array(
	                'label' => __( 'Sidebar Settings', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'refined_magazine_sidebar_section' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-welcome-write-blog',
	            ),
	            array(
	                'label' => __( 'Blog Page Settings', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'refined_magazine_blog_page_section' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-share',
	            ),
	            array(
	                'label' => __( 'Footer Settings', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'refined_magazine_footer_section' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-admin-generic',
	            ),
	            array(
	                'label' => __( 'Category Color Settings', 'refined-magazine' ),
	                'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'refined_magazine_category_color_setting' ) ), $url ),
	                'icon' 	=> 'dashicons dashicons-admin-generic',
	            ),
	           
	        );

	        $links = apply_filters( 'arrival/dashboard/links', $links );
	        ?> 

			<?php foreach( $links as $l ) { ?>
                <li>
                	<span class="<?php echo esc_attr($l['icon'])?>"></span>
                    <a class="op-quick-setting-link" href="<?php echo esc_url( $l['url'] ); ?>" target="_blank"><?php echo esc_html( $l['label'] ); ?></a>
                    <a class="ct-learn-more" href="<?php echo esc_url( $l['url'] ); ?>" target="_blank" rel="noopener"><?php _e('Learn More','refined-magazine'); ?> </a>
                </li>
            <?php } ?>
		</ul>
	</div>
</div>	
</div>


<?php $this->admin_sidebar_contents(); ?>

</div>