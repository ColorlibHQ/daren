/**
 * Daren front-end behaviour, without jQuery: the fixed menu on scroll and
 * the styled selects.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  // menu fixed js code
  UI.ready(function () {
    var menus = UI.toElements('.main_menu');
    window.addEventListener('scroll', function () {
      var fixed = window.pageYOffset + 1 > 50;
      menus.forEach(function (menu) {
        if (fixed) {
          menu.classList.add('menu_fixed', 'animated', 'fadeInDown');
        } else {
          menu.classList.remove('menu_fixed', 'animated', 'fadeInDown');
        }
      });
    }, { passive: true });
  });

  if (document.getElementById('default-select')) {
    UI.enhanceSelects('select');
  }
}());
