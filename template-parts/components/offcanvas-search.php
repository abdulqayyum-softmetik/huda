<a class="float-end" data-bs-toggle="offcanvas" href="#offcanvasSearch" role="button" aria-controls="offcanvasSearch">
  <i class="ri-search-line"></i>
</a>

<div class="offcanvas offcanvas-top search-wrapper" tabindex="-1" id="offcanvasSearch" aria-labelledby="offcanvasSearchLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="content">
      <h1 class="h1">Find Something?</h1>
      <?php esc_html( get_search_form() ); ?>
    </div>
  </div>
</div>