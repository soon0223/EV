
$(function(){
    $(document).on('click', 'a[href="#none"]', function(e) {
        e.preventDefault();
    });

    tl = TweenMax;
    var hdOffset = $("#ev-hd").height();
    var screenH = $(window).height();
    var sctop = $(document).scrollTop();
    


    $("#ev-hd").on({
        "mouseenter focusin" : function(){
            $(this).addClass("active"); 
        },
        "mouseleave focusout" : function(){
            $(this).removeClass("active"); 
            $("#ev-gnb").css("height", "100px");
            $(".gr-bg").css("height", "0px"); 
        }
    });
    $("#ev-gnb").on("mouseenter focusin", function(){
        $(this).css("height", "180px");
        $(".gr-bg").css("height", "80px")
    });



    $(".depth1 a").on({
        
        "mouseenter focusin": function(){
            $(this).find(".line").addClass("long");
        },
        "mouseleave focusout": function(){
            $(this).find(".line").removeClass("long");
        },
    });

    // 사이드 메뉴바 활성 리셋
    $(".m_chk_label").click(function(){
        $(".depth1").removeClass("on");
        $(".depth2").slideUp("200");

    });



    // 위로가기 버튼
    $(".gototop").click(function(){
        if($("body").attr("id") == "main"){//풀페이지가 적용된 페이지
            $.fn.fullpage.moveTo(1);
        } else {
            $("html, body").animate({scrollTop: 0}, 500);
        }
    });
});