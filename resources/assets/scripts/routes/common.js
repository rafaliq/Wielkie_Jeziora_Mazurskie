// components
import toggleMenu from '../components/hamburger';

export default {
  init() {
    // JavaScript to be fired on all pages
    toggleMenu.init();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
