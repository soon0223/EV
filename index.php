<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>무공해차 통합누리집</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/jquery.fullpage.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/jquery.fullpage.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/common.js"></script>
    <script src="js/main.js"></script>
</head>
<body id="main" class="ev">
    <? include_once('head.php'); ?>
    <div id="ev-main" class="contents">
        <section class="section section-tab1" id="main-section1">
            <h2 class="blind">메인 비주얼</h2>
            <div class="swiper-container mv-container main_visual_wrap">
                <ul class="swiper-wrapper mv-wrapper main_visual">
                    <li class="swiper-slide v1">
                        <div class="v_img"><span class="blind">비주얼 이미지</span></div>
                        <div class="v_txt wrap">
                            <h2 class="section-h2 eb">ELECTRICALLY PROPELLED VEHICLE</h2>
                            <h1 class="section-h1 bd">자연에서 달린다.<br>친환경자동차가 달린다.</h1>
                        </div>
                    </li>
                    <li class="swiper-slide v2">
                        <div class="v_img"><span class="blind">비주얼 이미지</span></div>
                        <div class="v_txt wrap">
                            <h1 class="section-h2 gr eb">맑고 푸른 환경</h1>
                            <h2 class="section-h1 gr bd">더 나은 미래를 위해,<br>무공해차 통합누리집 함께합니다.</h2>
                        </div>
                    </li>
                    <li class="swiper-slide v3">
                        <div class="v_img"><span class="blind">비주얼 이미지</span></div>
                        <div class="v_txt wrap">
                            <h2 class="section-h2 eb">RENEWABLE ENERGY FOR<br>FUTURE GENERATIONS</h2>
                            <h1 class="section-h1 bd">지속 가능한 미래를 위한 친환경 에너지</h1>
                        </div>
                    </li>
                </ul><!--비주얼 슬라이드 끝-->
                <!-- Add Pagination -->
                <div class="swiper-pagination mv-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-prev mv-prev"></div>
                <div class="swiper-button-next mv-next"></div>
            </div>
        </section>
        <section class="section" id="main-section2">
            <h2 class="blind">전기차 소개</h2>   
            <div class="intro-full-wrap">       
                <div class="swiper-container intro-img-container">
                    <ul class="swiper-wrapper intro-img-wrapper">
                        <li class="swiper-slide intro1"><div data-swiper-parallax-y="70%"><div class="intro_v1"></div></div><span class="blind">비주얼 이미지</span></li>
                        <li class="swiper-slide intro2"><div data-swiper-parallax-y="70%"><div class="intro_v2"></div></div><span class="blind">비주얼 이미지</span></li>
                        <li class="swiper-slide intro3"><div data-swiper-parallax-y="70%"><div class="intro_v3"></div></div><span class="blind">비주얼 이미지</span></li>
                    </ul>
                </div>
                <div class="intro-con-full-wrap">
                    <div class="intro-con-wrap">
                        <div class="fix_txt bk">
                            <h3 class="bd">지구 환경을 품은 미래형 모빌리티</h3>
                            <span>배터리 용량 및 충전 인프라가 충족되고, 동적∙가속 성능이 보다 탁월해지면서<br>환경과 성능 모두를 만족시키는 전기차는 미래형 모빌리티입니다.</span>
                        </div>
                        <div class="swiper-container intro-con-container">
                            <ul class="swiper-wrapper intro-con-wrapper">
                                <li class="swiper-slide intro1 intro_t1">
                                    <div class="chg_txt bk">
                                        <h3 class="bd"><div class="inner-txt">전기차</div></h3>
                                        <div class="sec2_desc">
                                            <div><p class="inner-txt">전기에너지만으로 달리는 전기차(EV)는 화석 연료를</p></div>
                                            <div><p class="inner-txt">전혀 사용하지 않아 친환경차의 대표격으로 불립니다.</p></div>
                                        </div>
                                        <div class="sec2_more"><a href="#"><img src="images/more.png" alt="more 이미지"></a></div>
                                    </div>
                                    <div class="bg_img"><span class="blind">오른쪽 하단 이미지</span></div>
                                </li>
                                <li class="swiper-slide intro2 intro_t2">
                                    <div class="chg_txt bk">
                                        <h3 class="bd"><div class="inner-txt">수소 전기차</div></h3>
                                        <div class="sec2_desc">
                                            <div><p class="inner-txt">수소전기차(FCEV)는 차량에 저장된 고압 수소와 대기 중 공기가 만나</p></div>
                                            <div><p class="inner-txt">생성된 전기에너지로 움직이는 무공해 자동차입니다.</p></div>
                                        </div>
                                        <div class="sec2_more"><a href="#"><img src="images/more.png" alt="more 이미지"></a></div>
                                    </div>
                                    <div class="bg_img"><span class="blind">오른쪽 하단 이미지</span></div>
                                </li>
                                <li class="swiper-slide intro3 intro_t3">
                                    <div class="chg_txt bk">
                                        <h3 class="bd"><div class="inner-txt">HEV∙PHEV</div></h3>
                                        <div class="sec2_desc">
                                            <div><p class="inner-txt">내연기관차의 엔진과 전기차의 배터리 모터라는 ‘두 개의 심장’을 장착하고</p></div>
                                            <div><p class="inner-txt">도로 환경에 따라 각자의 역할을 적절히 배분하는 하이브리드 카는</p></div>
                                            <div><p class="inner-txt">적은 공해 유발과 월등한 주행성능으로 소비자의 선택을 받고 있습니다.</p></div>
                                        </div>
                                        <div class="sec2_more"><a href="#"><img src="images/more.png" alt="more 이미지"></a></div>
                                    </div>
                                    <div class="bg_img"><span class="blind">오른쪽 하단 이미지</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="sec2_pgn count eb"></div>
                    </div>
                </div>
            </div>  
        </section>
        <section class="section wrap" id="main-section3">
            <div class="sec3_wrap clearfix">
                <div class="sec3_inbody">
                    <div class="sec3_place">
                        <div class="sec3_title">
                            <h2 class="bd">충전소 찾기 <img src="images/sec2_icon.png" alt="충전소 아이콘"></h2>
                            <span>전국의 전기차 충전소 위치 및 운영정보를<br>손쉽게 확인하실 수 있습니다.</span>
                        </div>
                        <div class="slide-controls slide-controls1">
                            <div class="paging-info">
                                <div class="progressive-bar"></div>
                            </div>
                        </div> 
                    </div>
                    <div class="section-container sec3-sld">
                        <div class="contents-box sec3-sld-core ">
                            <ul class="item-wrap clearfix">
                                <li class="item-slide sec3-item item1">
                                    <a href="https://www.ev.or.kr/evmonitor" target="_blank">
                                        <h2 class="sec3_card eb">전기차충전소 찾기</h2>
                                        <img src="images/sec2_img_01.jpg" alt="전기차충전소 찾기">
                                    </a>
                                </li>
                                <li class="item-slide sec3-item item2">
                                    <a href="https://www.ev.or.kr/h2monitor" target="_blank">
                                        <h2 class="sec3_card eb">수소차충전소 찾기</h2>
                                        <img src="images/sec2_img_02.jpg" alt="수소차충전소 찾기">
                                    </a>
                                </li>
                                <li class="item-slide sec3-item item3">
                                    <a href="#">
                                        <h2 class="sec3_card eb">충전기 지원안내</h2>
                                        <img src="images/sec2_img_03.jpg" alt="충전기 지원안내">
                                    </a>
                                </li>
                                <li class="item-slide sec3-item item4">
                                    <a href="https://www.ev.or.kr/lcvms-portal/EP020401000SF01.do">
                                        <h2 class="sec3_card eb">무공해차 확인</h2>
                                        <img src="images/sec2_img_04.jpg" alt="내차 무공해 확인">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="main-section4">
            <div class="sec4_wrap wrap">
                <h2 class="blind">보조금 지원</h2>
                <div class="sec4_con_wrap wh">
                    <div class="sec4_fix_txt">
                        <h1 class="pp">Factors Purchase Subsidy<br>and Eco-friendly Car Buyer<br>Propensity</h1>
                        <h3 class="eb">보조금 지원 대상</h3>
                        <span class="bd">중앙행정기관을 제외한 개인, 법인, 공공기관, 지방자치단체, 지방공기업 등<br>국고보조금 외 지방보조금을 추가로 지원하는 지방자치단체는 관할 자치단체 내 거주 등 자격조건 부여 가능</span>
                    </div>
                    <div class="sec4_more"><a href="#"><img src="images/more2.png" alt="더보기 이미지"></a></div>
                </div>
                <div class="sec4_list_wrap wh">
                    <ul class="sec4_list subsidy-wrap clearfix">
                        <li class="sec4_con">
                            <div><img src="images/sec4_kia_logo.png" alt="기아 로고"></div>
                            <div class="tit_wrap">
                                <p class="tit_txt bd">EV6 롱레인지</p>
                                <p class="tit_txt bd">니로EV</p>
                                <p class="tit_txt bd">쏘울</p>
                                <p class="tit_num_txt bd">최대</p>
                                <div class="subsidy-num eb" data-num="800"> <span></span>
                                    만원
                                </div>
                        </li>
                        <li class="sec4_con">
                            <div><img src="images/sec4_hd_logo.png" alt="현대 로고"></div>
                            <div class="tit_wrap">
                                <p class="tit_txt bd">코나</p>
                                <p class="tit_txt bd">아이오닉5</p>
                                <p class="tit_txt bd">GV60</p>
                                <p class="tit_num_txt bd">최대</p>
                                <div class="subsidy-num eb" data-num="800"> <span></span>
                                    만원
                                </div>
                        </li>
                        <li class="sec4_con">
                            <div><img src="images/sec4_ss_logo.png" alt="르노삼성 로고"></div>
                            <div class="tit_wrap">
                                <p class="tit_txt bd">ZOE</p>
                                <div class="subsidy-num eb" data-num="702"> <span></span>
                                    만원
                                </div>
                            </div>
                        </li>
                        <li class="sec4_con">
                            <div><img src="images/sec4_bmw_logo.png" alt="bmw 로고"></div>
                            <div class="tit_wrap">
                                <p class="tit_txt bd">i3 120Ah</p>
                                <div class="subsidy-num eb" data-num="673"> <span></span>
                                    만원
                                </div>
                            </div>
                        </li>
                        <li class="sec4_con">
                            <div><img src="images/sec4_tesla_logo.png" alt="테슬라 로고"></div>
                            <div class="tit_wrap">
                                <p class="tit_txt bd">Model 3</p>
                                <p class="tit_txt bd">Model Y</p>
                                <p class="tit_num_txt bd">최대</p>
                                <div class="subsidy-num eb" data-num="750"> <span></span>
                                    만원
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <!--풀페이지 왼쪽 메뉴 제작-->
    <ul id="menu-section">
        <li data-menuanchor="section-1"><a href="#section-1">main</a></li>
        <li data-menuanchor="section-2"><a href="#section-2">전기차 소개</a></li>
        <li data-menuanchor="section-3"><a href="#section-3">충전소 찾기</a></li>
        <li data-menuanchor="section-4"><a href="#section-4">보조금 지원</a></li>
    </ul>

    <? include_once('foot.php'); ?>
</body>
</html>