// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import header from './components/header';
import preloader from './components/preloader';
import slider from './components/slider';
import rotator from './components/rotator';
import wp_block_gallery from './components/wp-block-gallery';
import wp_block_files from './components/wp-block-files';
import menu_control_mobile from './components/menu-control-moibile.js';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  header.init();
  slider.init();
  rotator.init();
  wp_block_gallery.init();
  wp_block_files.init();
  menu_control_mobile.init();

  jQuery('[form]').on('submit', function (e) {
    e.preventDefault();
    jQuery.ajax({
      type: 'post',
      url: 'mail.php',
      data: jQuery('[form]').serialize(),
      success: function () {
        alert('Wiadomość została wysłana!');
      },
    });
  });
});

jQuery(window).load(()=> {
  setTimeout(()=>{
    slider.resize();
    preloader.init();
  }, 500)
});
