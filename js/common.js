$(document).ready(function () {
// set time
var goToTime = 'February 2, 2017 0:00:00';

if ($('.flip-counter').length) {
		var date = new Date(goToTime);
		var now = new Date();
		var diff = (date.getTime()/1000) - (now.getTime()/1000);

		var clock = $('.flip-counter').FlipClock(diff,{
			countdown: true,
			callbacks: {
				start: function() {
					$('.counterlink').addClass('timer-show');
				},
				stop: function() {
					$('.counterlink').removeClass('timer-show');
				}
			}
		});
		
		var clockTg = $('.tg-counter').FlipClock(diff,{
			countdown: true,
			callbacks: {
				start: function() {
					$('.tg-counter-wrapp').addClass('timer-show');
				},
				stop: function() {
					$('.tg-counter-wrapp').removeClass('timer-show');
				}
			}
		});
}

    var countSlides = $('.paralax_zone').length;
    var bannerNumber = Math.floor((Math.random() * countSlides) + 1);
    $('.banner_none.banner_' + bannerNumber).show();    
    if ($('.paralax_zone').length) {
        var scene = document.getElementById('scene_' + bannerNumber),
            parallax = new Parallax(scene);
    }
    $('.banner_none.banner_' + bannerNumber).show();

    if ($('.banner_none.banner_' + bannerNumber).data('bgheader') != undefined) {
        var bgImg = $('.banner_none.banner_' + bannerNumber).data('bgheader');
        $('.header_big').css('background-image', 'url(' + bgImg + ')');
    } 
    
    
    $("li.plan").on('click', function() {

		$('ul li.plan').each(function () {
		    $('ul li.plan').removeClass('isActive');
		    $('ul li.plan input').attr( 'checked', false );
		});
		$(this).addClass('isActive');
		$(this).find("input").attr( 'checked', true );
	});

	function run_Slider(e){
		$('#foo2').carouFredSel({
			prev: '.prev',
			next: '.next',
			scroll: {
				items: 1
			},
			auto: {
				play: e
			},
									circular: false,
									infinite: false
		});
	}

    $("#foo2 li.invest_item").on('click', function() {
				if($(this).hasClass('isActive')){
					// $(this).removeClass('isActive');
					// run_Slider(true);
				} else {
					$("#foo2 li.invest_item").removeClass('isActive');
					$(this).addClass('isActive');
					run_Slider(false);
				}
    });




	$("li.pay-sys").on('click', function() {

        if ( $(this).hasClass('disabled') ) {
            return false;
        }
        else {
            $('ul li.pay-sys').each(function () {
                $('ul li.pay-sys').removeClass('isActive');
                $('ul li.pay-sys input').attr( 'checked', false );
            });
            $(this).addClass('isActive');
            $(this).find("input").attr( 'checked', true );
        }

	});

    $(".sign_top table td input").blur( function() {
        $(".helper").removeClass( 'isActive' );
    });
    $(".sign_bottom table td input").blur( function() {
        $(".helper").removeClass( 'isActive' );
    });

    $(".sign_top input.cell").on('click', function() {
        $(this).parent().next('.helper').addClass('isActive');
    });
    $(".sign_bottom input.cell").on('click', function() {
        $(this).next('.helper').addClass('isActive');
    });

    $("div.calculator_btn_block a.calculator_btn").on('click', function() {
        $("div.calculator_window").addClass('isActive');
        $("div.overlay").addClass('isActive');
    });
    $("img.close_calculator_window, .overlay").on('click', function() {
        $("div.calculator_window").removeClass('isActive');
        $("div.overlay").removeClass('isActive');
        $("#referal-popup").removeClass('isActive');
    });

    $('.ref_popup_btn').on('click', function() {
        $("#referal-popup").addClass('isActive');
        $(".overlay").addClass('isActive');
    });

    $("textarea").niceScroll();

    var properties = {
        prev: '.prev',
        next: '.next',
        width: 1192,
        height: 550,
        items: {
            visible: 4,
        },
        mousewheel: false,
        circular: false,
        infinite: false,

        scroll: {
            items: 1
        },
        auto: {
            play: true,
            timeoutDuration: 2000,
            delay: 0,
            pauseOnHover: true
        },
    };

    var foo2_properties = {
        prev: '.prev',
        next: '.next',
        width: 1192,
        height: 550,
        items: {
            visible: 4,
        },
        mousewheel: false,
        circular: false,
        infinite: false,
        scroll: {
            items: 1
        },
        auto: {
            play: false,
            // play: true,
            timeoutDuration: 2000,
            delay: 0,
            pauseOnHover: true
        }
    };

    var docs_properties = {
        prev: '#prev',
        next: '#next',
        items: {
            visible: 1,
        },
        mousewheel: false,
        circular: true,
        infinite: false,
        scroll: {
            items: 1
        },
        auto: {
            play: true,
            timeoutDuration: 2000,
            delay: 0,
            pauseOnHover: true
        }
    };

    $('#foo2').carouFredSel(foo2_properties);
    $('#foo3').carouFredSel(properties);
    
    $('#docs_slider').carouFredSel(docs_properties);


    $('.invest_item:not(.forDate)').on('click', function () {
        setTimeout(function () {
            calculate();
        },50);
    });
    $('.invest_item.forDate').on('click', function () {
        setTimeout(function () {
            calculateFor();
        },50);
    });

    $('#plan').on('change', function() {
        setTimeout(function () {
            if ($('.isActive').hasClass('forDate')) {
                // console.log('data calc');
                calculateFor();
            }
            else {
                // console.log('no data calc');
                calculate();
            }
        },100);

    });

    $('#amount').on('input', function() {
        if ( $('.isActive').hasClass('forDate') ) {
            setTimeout(function () {
                calculateFor();
            },50);
        }
        else {
            setTimeout(function () {
                calculate();
            },50);
        }
    });

    $('#plan1').on('change', function() {
        if (($(this).val() == '2.1%') || ($(this).val() == '2.3%') || ($(this).val() == '2.9%')) {
            calculateFor1();
        }
        else {
            calculate1();
        }
    });

    $('#amount1').on('input', function() {
        if (($('#plan1').val() == '2.1%') || ($('#plan1').val() == '2.3%') || ($('#plan1').val() == '2.9%')) {
            calculateFor1();
        }
        else {
            calculate1();
        }
    });


    $('select#questions').on('change', function() {
        var _select_val = $(this).val();

        $(".category_block_none").each(function() {
            $( this ).css('display', 'none');
        });

        $("#" + _select_val ).css('display', 'block');
       
    });


    $(".question_block .answer").hide().prev().click(function() {
        $(this).parents(".question_block").find(".answer").not(this).slideUp().prev().removeClass("active");
        $(this).next().not(":visible").slideDown().prev().addClass("active");
    });



    // $(".news_block .news_detailes").prev().click(function() {
    //     $(this).parents(".news_block").find(".news_detailes").not(this).slideUp().prev().removeClass("active");
    //     $(this).next().not(":visible").slideDown().prev().addClass("active");
    // });
    
    $(".news_block").click(function() {
        $(this).next().slideToggle();
    });

    $('ul.top_menu li').each(function() {
        if (this.getElementsByTagName("a")[0].href == location.href) this.className = "active";
    });
    $('ul.left_navigation_menu li').each(function() {
        if (this.getElementsByTagName("a")[0].href == location.href) this.className = "active";
    });

    $(".language_select a").click(function() {
        $("ul.languages_list").toggle();
    });

    $(".show_plans").click(function() {
        $(".investment_inner").slideUp().removeClass("active");
        $(".investment_inner").not(":visible").slideDown().addClass("active");
        $('#foo2').carouFredSel(properties);
    });


    $("#foo2 li.invest_item").on('click', function() {
        count(this);
    });


    $('#plan').on('change', function(){
        $('.invest_item.isActive').removeClass('isActive');
        $('.invest_item[data-percent="'+ this.value +'"]').addClass('isActive');

        var carouselIndex = $('#plan option').index($('#plan option[value="'+ this.value +'"]'));

        $('#foo2').trigger('slideTo', carouselIndex - 1);

        setTimeout(function(){run_Slider(false)}, 500);
    });


    //scroll to top button
    $(window).scroll(function () {
        var scB = $(window).scrollTop() - $(document).height() + $(window).height();
        //console.log(scB);

        if ($(this).scrollTop() > 200) {
            $('.to-top-arrow').addClass('visible');
            if (scB > - 300) {
                $('.to-top-arrow').addClass('bottom-position');
            }
            else {
                $('.to-top-arrow').removeClass('bottom-position');
            }
        }
        else {
            $('.to-top-arrow').removeClass('visible');
        }
    });

    $('.to-top-arrow').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });



    //<10$ not availiable
    function payBalance() {
        var balance = $('.pay-sys-balance .value');
        balance.each(function () {
            var value = parseInt($(this).html());
            if (value < 10) {
                $(this).closest('.pay-sys').addClass('disabled').css('opacity', '0.5');
            }
            else {
                $(this).closest('.pay-sys').removeAttr('style').removeClass('disabled');
            }
        });
        // $('.pay-sys.disabled').click(false);
        // $('.pay-sys.disabled').click(function(){return false;});
    }
    payBalance();


    //fancybox
    $('#single_fancy_1').fancybox({
        openEffect	: 'elastic',
        closeEffect	: 'elastic'
    });



    //registration form validation
    $('form[name=regform]').validate({
        rules: {
            fullname: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            email1: {
                required: true,
                email: true,
                equalTo: '#entry-email'
            },
            username: {
                required: true
            },
            password: {
                required: true
            },
            password2: {
                required: true,
                equalTo: '#entry-password'
            },
            sq: {
                required: true
            },
            sa: {
                required: true
            }
        },
        highlight: function(element) {
            $(element).parent('div').addClass('error');
        },
        unhighlight: function(element) {
            $(element).parent('div').removeClass('error');
        }
    });

	$(document).off('focus','#referal-popup form input').on('focus','#referal-popup form input',function() {
		$(this).closest('div').removeClass('error');
	});

	$(document).off('click','#referal-popup form button[type="submit"]').on('click','#referal-popup form button[type="submit"]',function() {
	    var inputs = $(this).closest('form').find('input');
	    $.each(inputs,function(index,el) {
	        if($.trim($(el).val())=='') {
	            $(el).closest('div').addClass('error');
	        }
	    });
	    return $(this).closest('form').find('div.error').length==0;
	});

/*
    $('#referal-popup form').validate({
        rules: {
            country: {
                required: true,
                lettersonly: true
            },
            name: {
                required: true,
                lettersonly: true
            },
            username: {
                required: true,
                lettersonly: true
            },
            email: {
                required: true,
                email: true,
            },
            language: {
                required: true,
                lettersonly: true
            },
            skype: {
                required: true,
            },
            social: {
                required: true
            },
            tel: {
                required: true,
                number: true
            }
        },
        highlight: function(element) {
            $(element).parent('div').addClass('error');
        },
        unhighlight: function(element) {
            $(element).parent('div').removeClass('error');
        }
    });
*/


    //DEPOSIT BALANCE INPUT
    var select = $('.choose-pay-system .pay-sys');
    select.on('click', function () {
        var val = parseFloat($(this).attr('data-money'));
        $('#amount').attr('value', val);
        // $('#amount').val(val);
        // console.log(val, $('#amount').val());
    });




    countriesAnimation();
    bannerTabs();
    signUpPlaceholder();
    tableTabs();
});


function calculateFor() {
    var plan = $('#plan').val(),
        amount = $('#amount').val();
    var days = $('.isActive .forDays').html();

    var summ = (((parseFloat(plan) * parseFloat(days)) / 100) * parseFloat(amount)) + parseFloat(amount);

    $('#percent').text(plan);
    if (summ) {
        $('#total').text(summ);
    }
}

function calculateFor1() {
    var plan = $('#plan1').val(),
        amount = $('#amount1').val();

    switch(plan) {
        case '2.1%':
            var days = 15;
            break;
        case '2.3%':
            var days = 30;
            break;
        case '2.9%':
            var days = 55;
            break;
    }

    var summ = (((parseFloat(plan) * parseFloat(days)) / 100) * parseFloat(amount)) + parseFloat(amount);

    $('#percent1').text(plan);
    if (summ) {
        $('#total1').text(summ);
    }
}

function calculate() {
    var plan = $('#plan').val(),
        amount = $('#amount').val();

    var summ = parseFloat(plan) * parseFloat(amount) / 100;

    $('#percent').text(plan);
    if (summ)
        $('#total').text(summ);
}

function calculate1() {
    var plan = $('#plan1').val(),
        amount = $('#amount1').val();

    var summ = parseFloat(plan) * parseFloat(amount) / 100;

    $('#percent1').text(plan);
    if (summ)
        $('#total1').text(summ);
}

function count(_this) {
    var total_percent = $(_this).attr('data-percent');

    $('#plan').val(total_percent);
    $('#percent').text(total_percent);
}

var calcBtn = $('.calculator_btn_block a');
calcBtn.on('click', function () {
    var setVal = $(this).attr('data-plan');
    $('#plan1').val(setVal);
    $('#amount1').val('');
    $('#total1').text('');
    $('#percent1').text($('#plan1').val());
});



//extenal function on skip button click
function skipTour() {
    $('#foo2').carouFredSel({
        prev: '.prev',
        next: '.next',
        width: 1192,
        height: 550,
        items: {
            visible: 4,
        },
        mousewheel: false,
        circular: false,
        infinite: false,
        scroll: {
            items: 1
        },
        auto: {
            play: true,
            timeoutDuration: 2000,
            delay: 0,
            pauseOnHover: true
        },
    });
}

var videoID;
if ($('#player').length) {
    function Player() {
        if (!videoID) {
            videoID = '14iVh6DrcwI';
        }        

        vars = {
            "m": "video",
            "file": 'http://youtube.com/watch?v=' + videoID,
            "uid": "player",
            "addcontrols": "start"
        };
        player = new Uppod(vars);
        document.getElementById('player').addEventListener('init', onInit, false);
        document.getElementById('player').addEventListener('start', onStart, false);
        document.getElementById('player').addEventListener('play', onPlay, false);
        document.getElementById('player').addEventListener('pause', onPause, false);
        document.getElementById('player').addEventListener('stop', onStop, false);
        document.getElementById('player').addEventListener('end', onEnd, false);
        document.getElementById('player').addEventListener('time', onTime, false);
        document.getElementById('player').addEventListener('played', onPlayed, false);
        document.getElementById('player').addEventListener('error', onError, false);
        document.getElementById('player').addEventListener('fullscreen', onFull, false);
        document.getElementById('player').addEventListener('exitfullscreen', onExitFull, false);
        document.getElementById('player').addEventListener('seeking', onSeeking, false);
        document.getElementById('player').addEventListener('seeked', onSeeked, false);
    }
    function onInit(e) {
        trace(e.type);
    }
    function onStart(e) {
        trace(e.type);
    }
    function onPlay(e) {
        trace(e.type);
    }
    function onPause(e) {
        trace(e.type);
    }
    function onStop(e) {
        trace(e.type);
    }
    function onEnd(e) {
        trace(e.type);
    }
    function onTime(e) {
        trace(e.type + ': ' + player.EventDetail(e.type));
    }
    function onPlayed(e) {
        trace(e.type + ': ' + player.EventDetail(e.type));
    }
    function onError(e) {
        trace(e.type + ': ' + player.EventDetail(e.type));
    }
    function onFull(e) {
        trace(e.type);
    }
    function onExitFull(e) {
        trace(e.type);
    }
    function onSeeking(e) {
        trace(e.type);
    }
    function onSeeked(e) {
        trace(e.type);
    }
    function Resize() {
        document.getElementById('player').style.width = '1192';
        document.getElementById('player').style.height = '670';
        player.Resize();
    }
    function trace(str) {    
        if (str == 'start' || str == 'play') {
            $('.play-video, .trailer_l').fadeOut(50);
        }
        if (str == 'pause') {
            //$('.play-video, .trailer_l').fadeIn(50);
        }        
    }
    Player();
}

$('.start-tour').on('click', function () {
    skipTour();
});

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
    options = options || {};

    var expires = options.expires;

    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);

    var updatedCookie = name + "=" + value;

    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }

    document.cookie = updatedCookie;
}

if(getCookie('skip-intro')===undefined) {
    $('.start-tour').click();
    
    $(window).bind('scroll', function (e) {
        if($('body').scrollTop() > $('#player').offset().top - 150) {
            player.Play(); 
        }
    });    
} else {
    $('.trailer_l').show();
}
setCookie('skip-intro','1',{path:'/',expires:60*60*24*365});

if (getCookie('userWasWhere') === undefined) {
    setTimeout(function(){
        $('.question-btn .ref_popup_btn').trigger('click');
    }, 1000);    
    setCookie('userWasWhere', 1, {path:'/',expires:60*60*24*365});
} else {    
    $('.birthday').removeAttr('autoplay');
}



///////////////////
$(".anim-img").animated("scaleIn","scaleOut");
///////////////////


function countriesAnimation() {
    $('.countries .item').on('click', function () {
        if ($(this).hasClass('collapsed')) {
            $(this).removeClass('collapsed');
        }
        else {
            $('.countries .item').removeClass('collapsed');
            $(this).toggleClass('collapsed');
        }
    });
}

function bannerTabs() {
    $('.banner-tabs a').on('click', function (e) {
        e.preventDefault();
        $('.banner-tabs a').removeClass('active-tab');
        $(this).addClass('active-tab');

        $('.ab_box').removeClass('active');
        $($(this).attr('href')).addClass('active');
    });
}

function tableTabs() {
    $('.banner-tabs a').on('click', function (e) {
        e.preventDefault();
        $('.banner-tabs a').removeClass('active-tab');
        $(this).addClass('active-tab');
    });
    $('a[href="#table1"]').on('click', function (e) {
        $('#table1').addClass('active');
        $('#table2').removeClass('active');
        $('#table3').removeClass('active');
    });
    $('a[href="#table3"]').on('click', function (e) {
        $('#table3').addClass('active');
        $('#table2').removeClass('active');
        $('#table1').removeClass('active');
    });
    $('a[href="#table2"]').on('click', function (e) {
        $('#table3').removeClass('active');
        $('#table1').removeClass('active');
        $('#table2').addClass('active');
    });
}

function signUpPlaceholder() {
    var acc = $('.accounts tr');
    acc.each(function () {
        var cls = $(this).attr('class');
        switch(cls) {
            case 'PerfectMoney':
                $(this).find('.cell').attr('placeholder', 'U1234567');
                break;
            case 'NixMoney':
                $(this).find('.cell').attr('placeholder', 'U12345678901234');
                break;
            case 'Payeer':
                $(this).find('.cell').attr('placeholder', 'P1234567');
                break;
            case 'AdvCash':
                $(this).find('.cell').attr('placeholder', 'sample@domain.zn');
                break;
            case 'Bitcoin':
                $(this).find('.cell').attr('placeholder', '39sfuA8pY4UfybgEZi7uvA13jkGzZpsg5K');
                break;
            default:
                break;
        }
    });

}
