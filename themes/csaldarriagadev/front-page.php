<?php if (is_active_sidebar('slider')) : ?>
	<?php dynamic_sidebar( 'slider' ); ?>
<?php endif; ?>

<?php get_template_part('templates/content', 'page'); ?>


<div class="full-width bg-gradient-secondary-700--dark-400 text-light text-center mt-n3 py-6 py-md-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5 col-xl-4 py-md-3">
            <h1 class="h2 font-weight-normal mb-1">Christian Saldarriaga</h1>
            <h2 class="h4 font-weight-light mb-0 text-gray-400">Front-End Web Developer</h2>
            <h2 class="h6 font-weight-light text-gray-400">Internet Marketing | Branding/Design<br> Consultant</h2>
        </div>
        <div class="col-12 col-md-6 d-md-flex text-left mt-3 pt-3 mt-md-0 pt-md-0">
            <div class="border-left border-dark-400 mr-3 mr-lg-6 d-none d-md-block"></div>
            <div class="border-top border-dark-400 d-md-none pt-6"></div>
            <div class="py-md-3">
                <p class="lead font-weight-light text-gray-400">Passionate about providing quality web solutions and being a trusted advisor the digital world</p>
                <a href="/about" class="btn btn-lg btn-primary shadow">More About Me</a>
            </div>
        </div>
    </div>
</div>

<div class="full-width px-0 border-triangle border-triangle-bottom-right-dark-400"></div>

<div class="full-width px-0 border-triangle border-triangle-top-left-secondary-700"></div>

<div class="full-width bg-gradient-secondary-700-dark-700 pt-6 text-light font-weight-light text-center">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 mb-6">
            <div class="rounded-circle border border-light p-2 d-inline-block"><i class="fas fa-shopping-cart fa-5x"></i></div>
            <h2 class="font-weight-light mt-2 mb-0">E-Commerce</h2>
            <p class="mb-2">Wordpress | Woocommerce</p>
            <ul class="text-left">
                <li>Web Store / Shopping Cart</li>
                <li>WooCommerce functionality improvements and adjustments</li>
            </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-6">
            <div class="rounded-circle border border-light p-2 d-inline-block"><i class="fas fa-tools fa-5x"></i></div>
            <h2 class="font-weight-light mt-2 mb-0">E-Commerce</h2>
            <p class="mb-2">Wordpress | Woocommerce</p>
            <ul class="text-left">
                <li>Web Store / Shopping Cart</li>
                <li>WooCommerce functionality improvements and adjustments</li>
            </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-6">
            <div class="rounded-circle border border-light p-2 d-inline-block"><i class="fas fa-search fa-5x"></i></div>
            <h2 class="font-weight-light mt-2 mb-0">E-Commerce</h2>
            <p class="mb-2">Wordpress | Woocommerce</p>
            <ul class="text-left">
                <li>Web Store / Shopping Cart</li>
                <li>WooCommerce functionality improvements and adjustments</li>
            </ul>
        </div>
    </div>
</div>


<div class="full-width bg-light py-6">
    <h2 class="font-weight-light text-center mb-1-5">Featured Projects</h2>
    <p class="lead text-center mb-6 text-gray-500 mxw-600 mx-auto">Highlight projects featuring a range of  web design/development skills and real client scenarios</p>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5 mb-3">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <h3 class="h5 font-weight-light text-gray-600">In Motion Events</h3>
                    <p class="font-weight-light small text-gray-500 mb-0">E-Commerce | Event Menu Structure | Dynamic Form Fields</p>
                </div>
                <div class="card-footer p-0 border-0">
                    <div class="browser-border">
                        <img src="/wp-content/uploads/inmotion-events-home-screenshot.png" alt="inmotionevents.com screenshot">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-5 mb-3">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <h3 class="h5 font-weight-light text-gray-600">Alphacore factorE</h3>
                    <p class="font-weight-light small text-gray-500 mb-0">Categorized Videos Slider Archive |  Research Archive Dynamic Filters</p>
                </div>
                <div class="card-footer p-0 border-0">
                    <div class="browser-border">
                        <img src="/wp-content/uploads/myfactore-home-screenshot.png" alt="myfactore.com screenshot">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="/projects" class="btn btn-secondary shadow">View More Projects</a>
    </div>
</div>
<div class="full-width px-0 border-triangle border-triangle-bottom-right-light mb-n9"></div>


<?php if(is_active_sidebar( 'preface-a' )) {
	dynamic_sidebar( 'preface-a' );
}

if(is_active_sidebar( 'preface-b' )) {
    dynamic_sidebar( 'preface-b' );
}

if(is_active_sidebar( 'preface-c' )) {
    dynamic_sidebar( 'preface-c' );
} ?>