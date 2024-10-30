<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Heading -->
                <?php dynamic_sidebar( 'hero-widget-1' ); ?>
            </div>

            <div class="col-lg-6 col-md-8 col-12">
                <!-- Paragraph -->
                <?php dynamic_sidebar( 'hero-widget-2' ); ?>
            </div>
            
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Search -->
                <?php esc_html( get_search_form() ); ?>
            </div>
        </div>
    </div>
</section>