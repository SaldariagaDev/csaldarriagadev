<div class="page-header border border-bottom text-gray-500 py-4 mb-3">
    <div class="container">
        <h1 class="mb-0 font-weight-light ">
            <?php if(get_field('banner_image')) {
                cs_get_image(get_field('banner_image'));
            } else {
                echo roots_title();
            } ?>
        </h1>
    </div>
</div>
