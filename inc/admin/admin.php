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
                <li class="flex align-items-center gap-1">
                    <img class="max-w-16" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/customer-service-line.svg" alt="Support Icon">
                    <a href="" class="text-color">Support</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="tab-content custom-cards-container">
      <div id="tab1" class="tab-pane active">
        <div class="flex w-full justify-content-between gap-4">
            <div class="customizer-wrapper">
                <h5 class="panel-title">Customizer Settings</h5>
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
            <div class="cards-wrapper">
                <div class="card">
                    <div class="card-body">
                        <div class="flex align-items-center gap-1">
                            <img class="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/file-list-3-line.svg" alt="Support Icon">
                            <h5 class="card-title">Documentation</h5>
                        </div>
                        <p>A complete guide to help users install and customize the theme easily, with clear instructions and visuals.</p>
                        <a href="">Go To Documentation</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="flex align-items-center gap-1">
                            <img class="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/customer-service-2.svg" alt="Support Icon">
                            <h5 class="card-title">Support</h5>
                        </div>
                        <p>Provides access to help with any theme-related issues, ensuring users have a smooth experience.</p>
                        <a href="">Submit A Ticket</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="flex align-items-center gap-1">
                            <img class="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/service-line.svg" alt="Support Icon">
                            <h5 class="card-title">Rate Us</h5>
                        </div>
                        <p>Encourages users to rate the theme, supporting ongoing improvements and visibility.</p>
                        <a href="">Write A Review</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div id="tab2" class="tab-pane">
        <div class="card me-auto">
            <div class="card-body">
                <h5 class="card-title">Starter Templates</h5>
                <p class="card-text">Quick start with huda starter templates.</p>
                <a href="<?php echo admin_url('/themes.php?page=sd-easy-demo-importer'); ?>" class="btn btn-primary">Import Demo</a>
            </div>
        </div>
       
      </div>
      <div id="tab3" class="tab-pane">  
        <div class="changelog-wrapper">
            <h5 class="panel-title">Changelog Huda Theme</h5>

            <div class="">
                <h4>
                    Huda Theme <span>Version 1.0.0 ( 01-12-2-2024 )</span>
                </h4>
                <ul>
                    <li>
                    
                        <p>Initial Release <span>Version 1.0.0</span></p>
                    </li>
                </ul>
            </div>
            
        </div>
      </div>
    </div>
<?php

}
