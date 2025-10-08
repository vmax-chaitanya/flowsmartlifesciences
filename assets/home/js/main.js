(function($){
	"use strict";

    // Mean Menu
    $('.mean-menu').meanmenu({
        meanScreenWidth: "991"
    });

    // Header Sticky
    $(window).on('scroll',function() {
        if ($(this).scrollTop() > 0){  
            $('.navbar-area').addClass("is-sticky");
        }
        else{
            $('.navbar-area').removeClass("is-sticky");
        }
    });
    var c, currentScrollTop = 0,
    navbar = $('.navbar-area');
    $(window).scroll(function () {
        var a = $(window).scrollTop();
        var b = navbar.height();
        currentScrollTop = a;
        if (c < currentScrollTop && a > b + b) {
            navbar.addClass("scrollUp");
        } else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass("scrollUp");
        }
        c = currentScrollTop;
    });

    // Search Menu JS
    $(".others-option .search-box i").on("click", function(){
        $(".search-overlay").toggleClass("search-overlay-active");
    });
    $(".search-overlay-close").on("click", function(){
        $(".search-overlay").removeClass("search-overlay-active");
    });

    // Banner Slides
    $('.main-banner-slides').owlCarousel({
        loop: true,
        nav: false,
        thumbs: true,
        dots: false,
        thumbsPrerendered: true,
        autoplayHoverPause: true,
        autoplay: true,
        items: 1,
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
    });
    $('.banner-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        autoplay: true,
        items: 1,
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
    });
    $(".banner-slides, .main-banner-slides").on("translate.owl.carousel", function(){
        $(".banner-content h1, .main-banner-content h1").removeClass("animated animate__animated animate__fadeInUp").css("opacity", "0");
        $(".banner-content p, .main-banner-content p").removeClass("animated animate__animated animate__fadeInLeft").css("opacity", "0");
        $(".banner-content .btn-box, .main-banner-content .btn-box").removeClass("animated animate__animated animate__fadeInDown").css("opacity", "0");
        $(".main-banner-image img:nth-child(1)").removeClass("animated animate__animated animate__fadeInUp").css("opacity", "0");
        $(".main-banner-image img:nth-child(2)").removeClass("animated animate__animated animate__fadeInLeft").css("opacity", "0");
        $(".main-banner-image img:nth-child(3)").removeClass("animated animate__animated animate__fadeInLeft").css("opacity", "0");
        $(".main-banner-image img:nth-child(4)").removeClass("animated animate__animated animate__fadeInLeft").css("opacity", "0");
    });
    $(".banner-slides, .main-banner-slides").on("translated.owl.carousel", function(){
        $(".banner-content h1, .main-banner-content h1").addClass("animated animate__animated animate__fadeInUp").css("opacity", "1");
        $(".banner-content p, .main-banner-content p").addClass("animated animate__animated animate__fadeInLeft").css("opacity", "1");
        $(".banner-content .btn-box, .main-banner-content .btn-box").addClass("animated animate__animated animate__fadeInDown").css("opacity", "1");
        $(".main-banner-image img:nth-child(1)").addClass("animated animate__animated animate__fadeInUp").css("opacity", "1");
        $(".main-banner-image img:nth-child(2)").addClass("animated animate__animated animate__fadeInLeft").css("opacity", "1");
        $(".main-banner-image img:nth-child(3)").addClass("animated animate__animated animate__fadeInLeft").css("opacity", "1");
        $(".main-banner-image img:nth-child(4)").addClass("animated animate__animated animate__fadeInLeft").css("opacity", "1");
    });

    // Count Time 
    function makeTimer() {
        var endTime = new Date("September 20, 2025 17:00:00 PDT");			
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400); 
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }
        $("#days").html("<span>Days</span>" + days);
        $("#hours").html("<span>Hours</span>" + hours);
        $("#minutes").html("<span>Min</span>" + minutes);
        $("#seconds").html("<span>Sec</span>" + seconds);
    }
    setInterval(function() { makeTimer(); }, 0);
    
    // Feedback Slides
    $('.feedback-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 30,
        navText: [
            "<i class='bx bx-left-arrow-alt'></i>",
            "<i class='bx bx-right-arrow-alt'></i>"
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            }
        }
    });
    
    // Progress Bar JS
    $(".progress-bar").loading();

    // Counter JS
    $('.odometer').appear(function(e) {
        var odo = $(".odometer");
        odo.each(function() {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });

    // Input Plus & Minus Number JS
    $('.input-counter').each(function() {
        var spinner = jQuery(this),
        input = spinner.find('input[type="text"]'),
        btnUp = spinner.find('.plus-btn'),
        btnDown = spinner.find('.minus-btn'),
        min = input.attr('min'),
        max = input.attr('max');
        
        btnUp.on('click', function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
        btnDown.on('click', function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    });

    // Gallery Viewer JS
    var console = window.console || { log: function () {} };
    var $images = $('.gallery-area');
    var options = {
        // inline: true,
        url: 'data-original',
        ready: function (e) {
            console.log(e.type);
        },
        show: function (e) {
            console.log(e.type);
        },
        shown: function (e) {
            console.log(e.type);
        },
        hide: function (e) {
            console.log(e.type);
        },
        hidden: function (e) {
            console.log(e.type);
        },
        view: function (e) {
            console.log(e.type);
        },
        viewed: function (e) {
            console.log(e.type);
        }
    };
    $images.on({
        ready:  function (e) {
            console.log(e.type);
        },
        show:  function (e) {
            console.log(e.type);
        },
        shown:  function (e) {
            console.log(e.type);
        },
        hide:  function (e) {
            console.log(e.type);
        },
        hidden: function (e) {
            console.log(e.type);
        },
        view:  function (e) {
            console.log(e.type);
        },
        viewed: function (e) {
            console.log(e.type);
        }
    }).viewer(options);

    // Nice Select JS
    $('select').niceSelect();
    
    // Tabs
    (function ($) {
        $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
        $('.tab ul.tabs li a').on('click', function (g) {
            var tab = $(this).closest('.tab'), 
            index = $(this).closest('li').index();
            tab.find('ul.tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');
            tab.find('.tab-content').find('div.tabs-item').not('div.tabs-item:eq(' + index + ')').slideUp();
            tab.find('.tab-content').find('div.tabs-item:eq(' + index + ')').slideDown();
            g.preventDefault();
        });
    })(jQuery);

    // Go to Top
    $(function(){
        // Scroll Event
        $(window).on('scroll', function(){
            var scrolled = $(window).scrollTop();
            if (scrolled > 300) $('.go-top').addClass('active');
            if (scrolled < 300) $('.go-top').removeClass('active');
        });  
        // Click Event
        $('.go-top').on('click', function() {
            $("html, body").animate({ scrollTop: "0" },  500);
        });
    });

    // Marijuana Website Open Yes/No
    $(".btn-yes").on('click', function () {
        document.cookie = "enter=true";
        $("#marijuana-years").hide();
        $("body").removeClass('modal-open');
    });
    $(".btn-no").on('click', function () {});
    if(getCookie('enter') != 'true' ){
        setTimeout(function(){
            $("body").addClass('modal-open');
            $("#marijuana-years").show();
        }, 500)
    }
    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    // Price Range Filter
    $(function(){
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [50, 450],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
    });

    // Subscribe form
    $(".newsletter-form").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
        // handle the invalid form...
            formErrorSub();
            submitMSGSub(false, "Please enter your email correctly.");
        } else {
            // everything looks good!
            event.preventDefault();
        }
    });
    function callbackFunction (resp) {
        if (resp.result === "success") {
            formSuccessSub();
        }
        else {
            formErrorSub();
        }
    }
    function formSuccessSub(){
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function() {
            $("#validator-newsletter").addClass('hide');
        }, 4000)
    }
    function formErrorSub(){
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function() {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000)
    }
    function submitMSGSub(valid, msg){
        if(valid){
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }
    // AJAX MailChimp
    $(".newsletter-form").ajaxChimp({
        url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
        callback: callbackFunction
    });

    // Products Details Image Slider
    $('.slickslide').slick({
        dots: true,
        speed: 500,
        fade: false,
        slide: 'li',
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: false,
        nextArrow: false,
        responsive: [{
            breakpoint: 800,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                variableWidth: false,
                slidesToShow: 1,
                dots: true
            },
            breakpoint: 1200,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                variableWidth: false,
                slidesToShow: 1,
                dots: true
            }
        }],
        customPaging: function (slider, i) {
            return '<button class="tab">' + $('.slick-thumbs li:nth-child(' + (i + 1) + ')').html() + '</button>';
        }
    });

    // FAQ Accordion
    $(function() {
        $('.accordion').find('.accordion-title').on('click', function(){
            // Adds Active Class
            $(this).toggleClass('active');
            // Expand or Collapse This Panel
            $(this).next().slideToggle('fast');
            // Hide The Other Panels
            $('.accordion-content').not($(this).next()).slideUp('fast');
            // Removes Active Class From Other Titles
            $('.accordion-title').not($(this)).removeClass('active');		
        });
    });
	
	// WOW JS
	if ($(".wow").length) { 
		var wow = new WOW({
			boxClass:     'wow',      
			animateClass: 'animated', 
			offset:       20,         
			mobile:       true,       
			live:         true,       
		});
		wow.init();
	}

    // Switch Btn
	$('body').append(
        "<div class='dark-version-btn'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>"
    );

}(jQuery));

try {
	// function to set a given theme/color-scheme
	function setTheme(themeName) {
		localStorage.setItem('flow_inc_theme', themeName);
		document.documentElement.className = themeName;
	}
	// function to toggle between light and dark theme
	function toggleTheme() {
		if (localStorage.getItem('flow_inc_theme') === 'theme-dark') {
			setTheme('theme-light');
		} else {
			setTheme('theme-dark');
		}
	}
	// Immediately invoked function to set the theme on initial load
	(function () {
		if (localStorage.getItem('flow_inc_theme') === 'theme-dark') {
			setTheme('theme-dark');
			document.getElementById('slider').checked = false;
		} else {
			setTheme('theme-light');
		document.getElementById('slider').checked = true;
		}
	})();
} catch (err) {}