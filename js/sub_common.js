$(function(){

    
    var hdTrg = $("#ev-hd");
    var hdOffset = hdTrg.offset().top + hdTrg.height();
    var lnbTrg = $(".sub_lnb_sec");
    var lnbOffset = lnbTrg.offset().top - hdOffset;

    $(window).resize(function(){
        var hdTrg = $("#ev-hd");
        var hdOffset = hdTrg.offset().top + hdTrg.height();
        var lnbTrg = $(".sub_lnb_sec");
        var lnbOffset = lnbTrg.offset().top - hdOffset;
        if($("body").hasClass("pc")){
            $(".lnb_depth2").show();
        } else {
            $(".lnb_depth2").hide();
        }
    });

    //문서를 스크롤할 때(타겟, 이벤트) 
    $(window).scroll(function(){ //창이 스크롤 될 때 마다 
        sctop = $(document).scrollTop();
        hdFixed();
        lnbFixed();
    });

    // 헤더 고정
    function hdFixed(){
        //hdOffset만큼 스크롤되면(스크롤양을 검사-조건문)
        if(sctop > hdOffset) {
            //헤더를 고정한다(타겟,클래스를 적용)
            hdTrg.addClass("fixed");
        } else {
            hdTrg.removeClass("fixed"); 
        }
    }
    
    // lnb 고정
    function lnbFixed(){
        if(sctop > lnbOffset) {
            lnbTrg.addClass("fixed");
        } else {
            lnbTrg.removeClass("fixed");
        }
    }

    //lnb구현
    //1. lnb 콘텐츠 세팅(페이지별 메인메뉴, 서브메뉴(현재) 세팅)
    //서브메뉴 마크업 
    //★☆※♥body에서 클래스 세팅해야 작동함 (class="sub1_1")
    var page = $("body").attr("class").split(" ")[0]; //공란으로 구분하여 첫번째 클래스(0)만 가져옴
    var depth1Num = page.slice(3,4) - 1; //메인메뉴 번호 자바스크립트에서는 인덱스 번호가 0부터 시작하기 때문에 -1을 붙임
    var depth2Num = page.slice(5) - 1; //서브메뉴 번호
    $(".lnb_sub_menu ul").hide();
    $(".lnb_sub_menu ul").eq(depth1Num).show();
    $(".lnb_main_menu > a").prepend($(".lnb_main_menu li").eq(depth1Num).text());
    $(".lnb_sub_menu > a").prepend($(".lnb_sub_menu ul").eq(depth1Num).find("li").eq(depth2Num).text());
    


    //2. 메뉴 클릭하면 펼치기
    var lnb_btn = $(".lnb_btn");
    var lnb_list = $(".lnb_depth2");
    lnb_btn.click(function(){
        $(this).next().toggle();
        $(this).parent().siblings().find(lnb_list).hide();
        return false;
    });
    //3. lnb영역 이외의 곳을 클릭하면 lnb 접기
    $(document).click(function(e){
        if(!$("body").hasClass("pc")){
            if(!$(e.target).hasClass("lnb_btn")) {
                lnb_list.hide();
            }
        }
    });



});