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
    <nav class="navbar navbar-expand-lg bg-blue border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin-images/huda_admin_logo.svg" alt="Huda Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Starter sites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">chanelog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap grid and cards -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div><i class="ri-file-image-line"></i></div>
                        <h5 class="card-title">Branding</h5>
                        <a href="<?php echo admin_url('customize.php?autofocus[section]=header_section'); ?>" class="btn btn-primary">Customize</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Install Elementor</h5>
                        <p class="card-text">Enhance your design capabilities with Elementor page builder.</p>
                        <a href="<?php echo admin_url('plugin-install.php?s=elementor&tab=search&type=term'); ?>" class="btn btn-primary">Install Elementor</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customize Footer</h5>
                        <p class="card-text">Update the footer's design and layout.</p>
                        <a href="<?php echo admin_url('customize.php?autofocus[section]=footer_section'); ?>" class="btn btn-primary">Go to Customizer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php



    }

