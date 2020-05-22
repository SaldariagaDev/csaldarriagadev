<?php
use WPDev\Models\Image;
$spacer = get_field('spacer_size');

if($spacer) : ?>
    <div class="spacer <?= $spacer; ?>"></div>
<?php endif; ?>