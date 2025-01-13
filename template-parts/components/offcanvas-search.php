<div class="float-end" data-bs-toggle="offcanvas" href="#Offcanvasearch" role="button" aria-controls="Offcanvasearch">
  <i class="ri-search-line"></i>
</div>

<div class="offcanvas offcanvas-top search-wrapper" tabindex="-1" id="Offcanvasearch" aria-labelledby="OffcanvasearchLabel">
  <div class="offcanvas-header">
    <div class="btn-close float-start pt-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#Offcanvasearch" aria-controls="offcanvasExample"></div>
  </div>
  <div class="offcanvas-body">
    <div class="content text-center">
      <h1 class="h1">Find Something?</h1>
      <?php esc_html( get_search_form() ); ?>
    </div>
  </div>
</div>