/**
 * Created by user on 18.04.17.
 */
"use strict";
(function ($) {
  Drupal.behaviors.searchInput = {
    attach: function () {
      $('#edit-keys').hide();
      var $search = $('#edit-submit');
      $search.click(function (e) {
        e.preventDefault();
        $('#edit-keys').toggle(1000);
      });
    }
  };
  Drupal.behaviors.scrollAnimate = {
    attach: function() {
      $(document).on("scroll", onScroll);
      $('.my-menu a').click(function(e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.my-menu a').removeClass('active');
        $(this).addClass('active');
        $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top - 80
        }, 1500, 'swing', function () {
          $(document).on("scroll", onScroll);
        });
        return false;
      });
      function onScroll() {
        var $menu = $('.top-nav .my-menu');
        var scrollPos = $(document).scrollTop();
        $('a', $menu).each(function () {
          var currLink = $(this);
          var refElement = $(currLink.attr("href"));
          if (refElement.position().top - 80 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('a', $menu).removeClass("active");
            currLink.addClass("active");
          }
          else{
            currLink.removeClass("active");
          }
        })
      }
    }
  };
  Drupal.behaviors.cart = {
    attach: function () {
      $('.price-link a').click(function (e) {
        e.preventDefault();
        var item = $('div.counter');
        var itemCount = parseInt(item.text()) + 1;
        item.text(itemCount);
      });
      $('#block-bin').click(function (e) {
        e.preventDefault();
        var item = $('div.counter');
        if ( parseInt(item.text()) > 0 ) {
          var itemCount = parseInt(item.text()) - 1;
          item.text(itemCount);
        }
      });
    }
  };
  Drupal.behaviors.menu = {
    attach: function () {
      var $menu = $('#block-the-mymenu');
      $( window ).resize(function() {
        mobileMenu();
      });
      mobileMenu();
      function mobileMenu() {
        if ($(window).width() < 753) {
          $menu.once().prepend("<div class='mobile-menu'>" + "</div>");
          var $mobMenu = $('.mobile-menu');
          $("ul", $menu).hide();
          $mobMenu.once().click(function () {
            $("ul", $menu).toggle(1000);
          });
        } else {
          $("ul", $menu).show();
        }
      }
    }
  }
}(jQuery));
