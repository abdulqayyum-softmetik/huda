<div class="float-end" data-bs-toggle="offcanvas" href="#offcanvasSearch" role="button" aria-controls="offcanvasSearch">
  <i class="ri-search-line"></i>
</div>

<div class="offcanvas offcanvas-top search-wrapper" tabindex="-1" id="offcanvasSearch" aria-labelledby="offcanvasSearchLabel">
  <div class="offcanvas-header">
    <div type="button" class="btn-close start-0" data-bs-dismiss="offcanvas" aria-label="Close"></div>
  </div>
  <div class="offcanvas-body">
    <div class="content">
      <h1 class="h1">Find Something?</h1>
      <?php esc_html( get_search_form() ); ?>
    </div>
  </div>
</div>