$(function(){

	//로고 클릭시 화면 맨 위로 올라가기
	$(".ev-ft-logo a").attr("href", "#section-1");

	//푸터 복제 (clone)
	var ftSection = '<section class="section fp-auto-height" id="main-footer"></section>';
	var ftElement = $("#ev-ft").clone();
	$("#ev-main").append(ftSection);
	$("#main-footer").append(ftElement);
	
	
	$(".item-wrap").slick({
		dots: false,
		arrows: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		variableWidth: true,
		//appendDots:  $(".slide-controls"),
		appendArrows:  $(".slide-controls"),
		//autoplay: false,
	});


	var $slickElement = $('.item-wrap');
	var barWidth = 100/3 + "%";
	$(".progressive-bar").css("width", barWidth);
	$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
	  currentSlide++;
	  var barWidth = (currentSlide / slick.slideCount)*100 + "%";
	  $(".progressive-bar").css("width", barWidth);
	});



    // 풀페이지 작동
    $("#ev-main").fullpage({
        navigation: true,
        scrollingSpeed: 800,
		// 스크롤 안먹으면 menu, anchors 이 두개 비활성화 시키기
        menu: "#menu-section",
        anchors: ["section-1","section-2","section-3","section-4","footer"],
        // ** 페이지를 불러온 후
		afterLoad : function(anchorLink, index){
            if(index == 2){
				
                $(".sec2_pgn, .bignum").addClass('next'); 
            }
            if(index == 3){
                introTextMotionInit();
				$(".item-wrap").addClass("play");
				//충전소 슬라이드 재생여부
				if($(".item-wrap").hasClass('play') == true){
					$(".item-wrap").removeClass('play').addClass('stop');
					$(".item-wrap").slick('slickPlay');
				}else {
					$(".item-wrap").removeClass('stop').addClass('play');
					$(".item-wrap").slick('slickPause');
				}
			}
            if(index >= 3){
				//merit count
				$('.subsidy-wrap li').each(function (index) {
					var meritNum = $(this).find(".subsidy-num").data('num');
					$(this).find('span').text(''+meritNum);
				});
                intro_img.slideTo(2);
                intro_con.slideTo(2);
            }
			if(index == 4){
				$('.subsidy-num span').counterUp({
					time: 2000
				});
			}
			if(index >= 4){
				//merit count
				$('.subsidy-wrap li').each(function () {
					var meritNum = $(this).find(".subsidy-num").data('num');
					$(this).find('span').text(''+meritNum);
				});
            }
			if(index != 3){
				$(".item-wrap").slick('slickGoTo', 0);
			}
        },
    });

    var mvSwiper = new Swiper('.mv-container', {
        loop: true,
        speed: 1500,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,  
        },
        pagination: {
            el: '.mv-pagination',
            clickable: true,
        },
        autoplay: {// 자동재생(setInterval)
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {// 이전 다음 버튼
            nextEl: '.mv-next',
            prevEl: '.mv-prev',
        },
        pagination: { // 페이지 버튼
            el: '.mv-pagination',
            clickable: true,
        },
		on: {
            slideChange: function() {
				// console.log('now index :', this.realIndex);
				if(this.realIndex == 1){
					$('.mv-pagination, .mv-prev, .mv-next').addClass('light');
				} else {
					$('.mv-pagination, .mv-prev, .mv-next').removeClass('light');
				}
			},
		}
    });

    //intro image
    var intro_img = new Swiper('.intro-img-container', {
        direction: 'vertical',
        loop: false,
        speed: 700,
        effect: 'slide',
        parallax: true,
        mousewheel: {
            releaseOnEdges: true
        },
        mousewheel: true,
        watchSlidesVisibility: true,
		watchSlidesProgress: true,
        pagination: {
			el: '.sec2_pgn',
			type: 'custom',
			renderCustom: function (swiper, current, total) {
				return '<div class="bignum"><b>0</b><div class="num"><span>'+(current-1)+'</span><span>'+(current)+'</span><span>'+(current+1)+'</span></div></div><div class="total">/0'+(total)+'<div>'; 
			}
		},
        on: {
            init: function () {
                introTextMotionInit();
            },
            transitionStart: function () {
                introTextMotionInit();
            },
            slideChange: function () {
				introTextMotion();
			},
            slidePrevTransitionStart:function () {
				$(".sec2_pgn").addClass('prev_act');
				$(".bignum").removeClass('prev').removeClass('next');
			},
			slidePrevTransitionEnd:function () {
				$(".intro-img-container").removeClass('next');
				$(".intro-img-container").addClass('prev');
                $(".sec2_pgn").removeClass('prev_act');
                $(".bignum").addClass('prev').removeClass('next');
			},
			slideNextTransitionStart: function () {
				$(".sec2_pgn").removeClass('prev_act');
			},
			slideNextTransitionEnd: function () {
				$(".intro-img-container").removeClass('prev');
				$(".intro-img-container").addClass('next');
			},
            slideChange: function () {
				introTextMotion();
			},
		},
    });

    //intro contents
	var intro_con = new Swiper('.intro-con-container', {
        direction: 'vertical',
		speed: 700,
		loop:false,
		effect: 'fade',
		autoplay: false,
		fadeEffect: {
			crossFade: true
		},
		allowTouchMove:false,
		simulateTouch:false,
		grabCursor: false,
		mousewheel: {
		   releaseOnEdges: true
		},
		mousewheel: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		pagination: {
			el: '.sec2_pgn',
			type: 'custom',
			renderCustom: function (swiper, current, total) {
				return '<div class="bignum"><div>0</div><div class="num"><span>'+(current-1)+'</span><span>'+(current)+'</span><span>'+(current+1)+'</span></div></div><div class="total">/0'+(total)+'</div>'; 
			}
		},
		on: {
			init: function () {
				 introTextMotionInit();
			},
			transitionStart: function () {
				 introTextMotionInit();
			},
			transitionEnd: function () {
				$(".sec2_pgn, .bignum").addClass('next');
				if($(".intro_t1").hasClass("swiper-slide-active")){
					$(".intro_t1").addClass("off");
				}else{
					$(".intro_t1").removeClass("off");
				}
				if($(".intro_t3").hasClass("swiper-slide-active")){
					$(".intro_t3").addClass("off");
				}else{
					$(".intro_t3").removeClass("off");
				}
			},
			slideChange: function () {
				introTextMotion();
			},
			slidePrevTransitionStart:function () {
				$(".sec2_pgn").addClass('prev_act');
				$(".bignum").removeClass('prev').removeClass('next');
			},
			slidePrevTransitionEnd: function () {
                $(".sec2_pgn").removeClass('prev_act');
                $(".bignum").addClass('prev').removeClass('next');
			},
		},
	});



    ////intro mousewheel 
	$("#main-section2").on("DOMMouseScroll mousewheel wheel", function(event,delta){
		if (delta > 0) { //마우스 휠을 올렸을때 
		   if($(".swiper-container .intro1").hasClass("off")){
				$.fn.fullpage.moveTo(1);
				$.fn.fullpage.setAllowScrolling(true);
		   }
		   if($(".swiper-container .intro3").hasClass("off")){
				$.fn.fullpage.setAllowScrolling(false);
		   }
		}else if (delta < 0) {  //마우스 휠을 내렸을때
		   if($(".swiper-container .intro3").hasClass("off")){
				$.fn.fullpage.setAllowScrolling(true);
				$.fn.fullpage.moveTo(3);
		   }else{
				$.fn.fullpage.setAllowScrolling(false);
			}
		}
	});
    intro_img.controller.control = intro_con;
    intro_con.controller.control = intro_img;

    //intro slide reset
	function introReset() {
		intro_img.slideTo(1);
		intro_con.slideTo(1);
        tl.staggerFromTo($(".intro-con-container .swiper-slide-active .chg_txt h3 .inner-txt"), 1, {opacity: 0, y: '100%'}, {opacity: 1, y: 0, delay:0.3, ease: Power2.easeInOut}, .1);
		tl.staggerFromTo($(".intro-con-container .swiper-slide-active .sec2_desc p"), 1, {opacity: 0, y: '40%'}, {opacity: 1, y: 0, delay:0.5, ease: Power2.easeInOut}, .2);
		tl.staggerFromTo($(".intro-con-container .swiper-slide-active .sec2_more"), 1, {opacity: 0, y: '100%'}, {opacity: 1, y: 0, delay:0.8, ease: Power2.easeInOut}, .2);
    }

    //business text motion
	function introTextMotion() {
		tl.staggerFromTo($(".intro-con-container .swiper-slide-active .chg_txt h3 .inner-txt"), 0.7, {opacity: 1, y: '0'}, {opacity: 0, y: '100%', ease: Power2.easeInOut},.1);
		tl.staggerFromTo($(".intro-con-container .swiper-slide-active .sec2_desc p"), 0.7, {opacity: 1, y: '0'}, {opacity: 0, y: '40%', ease: Power2.easeInOut},.2);
		tl.staggerFromTo($(".intro-con-container .swiper-slide-active .sec2_more"), 0.7, {opacity: 1, y: '0'}, {opacity: 0, y: '100%', ease: Power2.easeInOut},.2);
	}
	function introTextMotionInit() {
		tl.staggerFromTo($(".intro-con-container .swiper-slide-active .chg_txt h3 .inner-txt"), 1, {opacity: 0, y: '100%'}, {opacity: 1, y: 0, delay:0.3, ease: Power2.easeInOut}, .1);
		tl.staggerFromTo($(".intro-con-container .swiper-slide-active .sec2_desc p"), 1, {opacity: 0, y: '40%'}, {opacity: 1, y: 0, delay:0.5, ease: Power2.easeInOut}, .2);
		tl.staggerFromTo($(".intro-con-container .swiper-slide-active .sec2_more"), 1, {opacity: 0, y: '100%'}, {opacity: 1, y: 0, delay:0.8, ease: Power2.easeInOut}, .2);
	}

});