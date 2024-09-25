<?php


function huda_admin_page() {
    add_menu_page(
        'Huda',       
        'Huda',    
        'manage_options',  
        'wp-huda', 
        'wp_huda_admin_page_callback',
        get_template_directory_uri() . '/assets/images/admin-images/admin_logo.svg',
        2 
    );
}
add_action('admin_menu', 'huda_admin_page');

function wp_huda_admin_page_callback() {
    
    if ( !current_user_can('manage_options') ) {
        return;
    }

    ?>
    <nav>
        <div>
            <a class="navbar-brand" href="#">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/huda_admin_logo.svg" alt="Huda Image">
            </a>
        </div>
        <div>
            <ul class="tab-nav">
                <li><a href="#" data-tab="tab1" class="active">Dashboard</a></li>
                <li><a href="#" data-tab="tab2">Starter sites</a></li>
                <li><a href="#" data-tab="tab3">chanelog</a></li>
            </ul>
        </div>

        <div>
            <ul>
                <li>
                    <a href="">Contact</a>
                </li>
                <li>
                    <a href="">Support</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="tab-content custom-cards-container">
      <div id="tab1" class="tab-pane active">
        <div class="flex w-full justify-content-between flex-wrap">
            <div class="customizer-wrapper">
                <div class="panel-title">Customizer Settings</div>
                <div class="flex justify-content-between flex-wrap gap-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/file-image-line.svg" alt="Huda Image">
                            <h5 class="card-title">Branding</h5>
                            <a href="<?php echo admin_url('customize.php?autofocus[section]=header_section'); ?>" class="btn btn-primary">Customize</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/palette-line.svg" alt="Huda Image">

                            <h5 class="card-title">Colors</h5>
                            <a href="<?php echo admin_url('customize.php?autofocus[section]=header_section'); ?>" class="btn btn-primary">Customize</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/layout-2-line.svg" alt="Huda Image">

                            <h5 class="card-title">Layouts</h5>
                            <a href="<?php echo admin_url('customize.php?autofocus[section]=header_section'); ?>" class="btn btn-primary">Customize</a>
                        </div>
                    </div>
                </div>
                <div class="flex justify-content-between flex-wrap gap-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/news-line.svg" alt="Huda Image">
                            <h5 class="card-title">Blog</h5>
                            <a href="<?php echo admin_url('customize.php?autofocus[section]=header_section'); ?>" class="btn btn-primary">Customize</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/menu-4-line.svg" alt="Huda Image">

                            <h5 class="card-title">Menus</h5>
                            <a href="<?php echo admin_url('customize.php?autofocus[section]=header_section'); ?>" class="btn btn-primary">Customize</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/h-2.svg" alt="Huda Image">

                            <h5 class="card-title">Typography</h5>
                            <a href="<?php echo admin_url('customize.php?autofocus[section]=header_section'); ?>" class="btn btn-primary">Customize</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plugin-wrapper">
                <div class="panel-title">Plugins Integration</div>
                <div class="plugins-content flex justify-content-between gap-1">
                    <div class="flex gap-1">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/elementor-icon.svg" alt="Huda Image">
                        <div>
                            <h4>Elementor Website Builder</h4>
                            <p class="card-text">#1 page builder for wordpress</p>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo admin_url('plugin-install.php?s=elementor&tab=search&type=term'); ?>" class="btn btn-primary">Install</a>
                    </div>
                </div>
                <div class="plugins-content flex justify-content-between gap-1">
                    <div class="flex gap-1">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/xpro-icon.svg" alt="Huda Image">
                        <div>
                            <h4>Xpro Theme Builder</h4>
                            <p class="card-text">header, footer theme builder</p>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo admin_url('plugin-install.php?s=xpro&tab=search&type=term'); ?>" class="btn btn-primary">Install</a>
                    </div>
                </div>
                <div class="plugins-content flex justify-content-between gap-1">
                    <div class="flex gap-1">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/xpro-addons-icon.svg" alt="Huda Image">
                        <div>
                            <h4>Xpro Addons For Elementor Pro</h4>
                            <p class="card-text">70+ premium widgets for elementor</p>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo admin_url('plugin-install.php?s=xpro&tab=search&type=term'); ?>" class="btn btn-primary">Install</a>
                    </div>
                </div>
                <div class="plugins-content flex justify-content-between gap-1">
                   <div class="flex gap-1">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/woocommerce-icon.svg" alt="Huda Image">
                        <div>
                            <h4>WooCommerce</h4>
                            <p class="card-text">wordpress shop plugin</p>
                        </div>
                   </div>
                    <div>
                        <a href="<?php echo admin_url('plugin-install.php?s=woocommerce&tab=search&type=term'); ?>" class="btn btn-primary">Install</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div id="tab2" class="tab-pane">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Starter Templates</h5>
                <p class="card-text">Enhance your design capabilities with Elementor page builder.</p>
                <a href="<?php echo admin_url('/themes.php?page=sd-easy-demo-importer'); ?>" class="btn btn-primary">Install Starter Sites</a>
            </div>
        </div>
       
      </div>
      <div id="tab3" class="tab-pane card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Customize Footer</h5>
                <p class="card-text">Update the footer's design and layout.</p>
                <a href="<?php echo admin_url('customize.php?autofocus[section]=footer_section'); ?>" class="btn btn-primary">Go to Customizer</a>
            </div>
        </div>
      </div>
    </div>
<?php

}

