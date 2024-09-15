<?php


function huda_admin_page() {
    add_menu_page(
        'Huda',       
        'Huda',    
        'manage_options',  
        'wp-huda', 
        'wp_huda_admin_page_callback',
        get_template_directory_uri() . '/assets/images/admin-images/huda_icon.svg',
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/admin-images/huda_admin_logo.svg" alt="Huda Image">
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

function huda_admin_page_styles($hook) {
    // Ensure the hook matches the actual screen ID
    if ( $hook != 'toplevel_page_wp-huda' ) {
        return;
    }

    // Output the styles
    echo '<style>
        #wpcontent {
            padding-left: 0;
        }
        #adminmenu .wp-menu-image img {
            padding: 6px 0 0 !important;
            opacity: .6;
            max-width: 16px !important;
        }
        .custom-cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .custom-cards-container .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .custom-cards-container .card h2 {
            margin-top: 0;
        }
    </style>';
}
add_action('admin_head', 'huda_admin_page_styles');


    }

