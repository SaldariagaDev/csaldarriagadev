require('jquery');
require('bootstrap');
require('slick-carousel');

import $ from 'jquery';

$(document).ready(function(){
    $('.slider').slick({
        autoplay: true,
        pauseOnHover: false
    });
});