jQuery(document).ready(function ($) {
    "use strict";
    const a = $('.offscreen-navigation .menu');

    if (a.length) {
        a.children("li").addClass("menu-item-parent");
        a.find(".menu-item-has-children > a").on("click", function (e) {
            e.preventDefault();
            $(this).toggleClass("opened");
            const n = $(this).next(".sub-menu"), s = $(this).closest(".menu-item-parent").find(".sub-menu");
            a.find(".sub-menu").not(s).slideUp(250).prev('a').removeClass('opened');
            n.slideToggle(250)
        });
        a.find('.menu-item:not(.menu-item-has-children) > a').on('click', function () {
            $('.rt-slide-nav').slideUp();
            $('body').removeClass('slidemenuon');
        });
    }

    $('.mean-bar .sidebarBtn').on('click', function (e) {
        e.preventDefault();
        const slideNav = $('.rt-slide-nav');
        if (slideNav.is(":visible")) {
            slideNav.slideUp();
            $('body').removeClass('slidemenuon');
        } else {
            slideNav.slideDown();
            $('body').addClass('slidemenuon');
        }

    });

    /*tab ajax*/
    $('.ranna-tab-cat ul li').on('click', 'span', function () {
        const _this = $(this), ul = _this.parents('ul');
        ul.find('li').removeClass('active');
        _this.parent().addClass('active');
    });

    /*-------------------------------------
    Jquery Advance Search Box
    -------------------------------------*/
    $("#adv-serch").on('click', function () {
        const _self = $(this);
        _self.parents('.adv-search-wrap').find(".advance-search-form").slideToggle();
        _self.toggleClass('icon-alter');
    });

    $("#rt-adv-search").on('click', function () {
        const _self = $(this);
        _self.parents('.adv-search-wrap').find(".advance-search-form").slideToggle();
        _self.toggleClass('icon-alter');
    });

    $("#adv-serch-template").on('click', function () {
        const _self = $(this);
        _self.parents('.adv-search-wrap').find(".advance-search-form").slideToggle();
        _self.toggleClass('icon-alter');
    });

    //Header Search
    $('a[href="#header-search"]').on("click", function (event) {
        event.preventDefault();
        $("#header-search").addClass("open");
        $('#header-search > form > input[type="search"]').focus();
    });

    $("#header-search, #header-search button.close").on("click keyup", function (
        event
    ) {
        if (event.target === this || event.target.className === "close" || event.keyCode === 27) {
            $(this).removeClass("open");
        }
    });

    /* Scroll to top */
    $('.scrollToTop').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    const stickymobileOffset = $('body').offset().top;
    let lastScrollTop = 0;
    $(window).scroll(function () {
        if ($(this).scrollTop() > stickymobileOffset && $(this).scrollTop() > lastScrollTop) {
            $("body").addClass("top").removeClass("not-top");
        } else {
            $("body").addClass("not-top").removeClass("top");
        }
        lastScrollTop = $(this).scrollTop();
    });

    /* Search Box */
    $(".search-box-area").on('click', '.search-button, .search-close', function (event) {
        event.preventDefault();
        if ($('.search-text').hasClass('active')) {
            $('.search-text, .search-close').removeClass('active');
        } else {
            $('.search-text, .search-close').addClass('active');
        }
        return false;
    });

    /* Mega Menu */
    $('.site-header .main-navigation ul > li.mega-menu').each(function () {
        // total num of columns
        const items = $(this).find(' > ul.sub-menu > li').length;
        // screen width
        const bodyWidth = $('body').outerWidth();
        // main menu link width
        const parentLinkWidth = $(this).find(' > a').outerWidth();
        // main menu position from left
        const parentLinkpos = $(this).find(' > a').offset().left;

        const width = items * 220;
        const left = (width / 2) - (parentLinkWidth / 2);

        const linkleftWidth = parentLinkpos + (parentLinkWidth / 2);
        const linkRightWidth = bodyWidth - (parentLinkpos + parentLinkWidth);

        // exceeds left screen
        if ((width / 2) > linkleftWidth) {
            $(this).find(' > ul.sub-menu').css({
                width: width + 'px',
                right: 'inherit',
                left: '-' + parentLinkpos + 'px'
            });
        }
        // exceeds right screen
        else if ((width / 2) > linkRightWidth) {
            $(this).find(' > ul.sub-menu').css({
                width: width + 'px',
                left: 'inherit',
                right: '-' + linkRightWidth + 'px'
            });
        } else {
            $(this).find(' > ul.sub-menu').css({
                width: width + 'px',
                left: '-' + left + 'px'
            });
        }
    });

    $(document).on('click', '.print-share-button', function (e) {
        e.preventDefault();
        window.print();
        return false;
    });
});

//function Load
function scripts() {
    const $ = jQuery;
    // Preloader
    $('#preloader').fadeOut('slow', function () {
        $(this).remove();
    });
}

(function ($) {
    "use strict";
    // Window Load+Resize
    $(window).on('load resize', function () {
        // Define the maximum height for mobile menu
        let wHeight = $(window).height();
        wHeight = wHeight - 50;
        $('.mean-nav > ul').css('max-height', wHeight + 'px');
    });

    // Window Load
    $(window).on('load', function () {
        scripts();
    });


})(jQuery);
