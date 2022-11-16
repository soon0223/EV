<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>무공해차 통합누리집 - 전기차</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/jquery.fullpage.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/sub.css">
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
    <script src="js/sub_common.js"></script>
    <script>
        $(function(){
            AOS.init();
        });
    </script>
</head>
<body id="ev-car" class="sub1-1">
    <? include_once('head.php'); ?>
    <div id="main_contents">
        <section class="sub_visual_sec sub_visual1">
            <div class="sub_visual_wrap">
                <h2 class="eb wh">전기차</h2>
                <h3>지구 환경을 품은 미래형 모빌리티</h3>
            </div>
        </section>
        <? include_once("lnb.php"); ?>
        <section class="sub_contents_sec">
            <div class="sub_contents_wrap wrap">
                <div class="sub_contents1 center bk2" data-aos="fade-up" data-aos-duration="1200"  data-aos-easing="ease-in-sine" >
                    <h3 class="eb">TECHNOLOGY</h3>
                    <h1 class="eb">전기차 핵심 기술 알아보기</h1>
                    <h2 class="bd">전기차 구동 원리</h2>
                    <span>운전자가 출발 버튼을 누르면 고전압 배터리에 저장된 전력을 통해 부팅되고, 전기차는 주행 준비를 마칩니다.<br>
                    가속페달을 밟고 주행을 시작하면 모터가 회전과 동시에 최대 토크를 내고, M감속기는 모터의 특성에 맞춰 동력을 바퀴에 효율적으로 전달합니다.</span>
                    <div><img src="images/ev_con_img1.jpg" alt="전기차 구동 원리"></div>
                </div>
                <div class="sub_contents2 bk2"  data-aos="fade-right" data-aos-duration="1200" data-aos-offset="300"  data-aos-easing="ease-in-sine" >
                    <h2 class="bd">전기차 구성 및 주요 기술</h2>
                    <dl>
                        <dt class="eb">1. PE 시스템</dt>
                        <dt>1-1. 구동모터</dt>
                        <dd>일반 내연기관의 엔진처럼 전기차의 구동력을 발생. 고전압 배터리에 저장된 전기에너지를 운동에너지로 변환하여 구동력을 발생하며 감속 시 발전기의 역할을 합니다. 또, 회생제동시스템을 가능하게 합니다.<br>
                        *회생제동 시스템: 내리막길 등 탄력 주행 시 발생하는 운동에너지를 전기에너지로 전환해 배터리에 저장하는 시스템. 주행 중 속도를 줄일 때도 발전기 역할</dd>
                        <dt>1-2. 감속기</dt>
                        <dd>모터의 회전수를 필요한 수준으로 낮춰 전기차가 더 높은 회전력(토크)를 얻을 수 있도록 하는 장치입니다.<br>
                        *감속기 디스커넥터: 세계 최초로 모터와 구동축을 주행 상황에 따라 분리하거나 연결할 수 있는 장치. 이 장치를 통해 자유롭게 2WD와 4WD 구동방식 전환 가능</dd>
                        <dt>1-3. 인버터</dt>
                        <dd>고전압 배터리에 저장된 직류전원(DC)을 교류전원(AC)으로 변환하여 모터의 토크를 제어하는 부품입니다. 인버터 파워모듈에는<br>
                        기존의 실리콘(Si) 전력반도체 대비 효율이 뛰어난 실리콘 카바이드(SiC) 전력반도체를 적용합니다.<br>
                        *SiC 전력반도체: 고효율 신소재인 탄화규소를 이용해 전력을 변환∙처리∙제어하는 전력반도체.  기존에 사용되던 실리콘 전력반도체 대비 강도와 열전도율이 높고, 에너지 손실량이 적은 것이 특징</dd>
                    </dl>
                    <dl>
                        <dt>2. 충전총괄제어기(VCMS)</dt>
                        <dd>전기차 내의 모든 충전 관련 기능을 총괄하며, ICCU와 함께 V2L을 구현하는 주요 부품입니다.<br>
                        *V2L(Vehicle to Load): 전기차 내∙외부 전원공급기술로 고전압 배터리에 저장된 전기에너지를 외부 전원으로 사용 가능. 최대 공급전력은 커넥터 등 사양 관계로 3.5kW까지 사용 가능하며,<br>
                        휴대용 충전기(ICCB) 활용 시 다른 전기차의 완속충전(V2V)도 가능</dd>
                    </dl>
                    <dl>
                        <dt>3. ICCU(양방향 OBC)</dt>
                        <dd>기존 단방향 충전만 가능하던 OBC 기능을 개선해 외부 충전뿐만 아니라 고전압 배터리에 저장된 전기를 외부로 내보내는 V2L 등을 가능케 하는 핵심 부품입니다.</dd>
                    </dl>
                    <dl>
                        <dt>4. 차량제어기(VCU)</dt>
                        <dd>모터 제어, 회생제동 제어, 공조부하 제어, 전장 부하 및 전원공급 제어 등 차량 전력 제어와 관련된 대부분 관장하는 장치입니다.</dd>
                    </dl>
                    <dl>
                        <dt>5. 고전압배터리</dt>
                        <dd>전기차의 구동에 필요한 전기에너지를 저장하고 주행 시 공급하는 부품입니다.<br>
                            고전압 배터리를 구성하는 배터리 셀을 차에 많이 탑재할 수록 주행 거리는 길어지지만, 차량 가격이 비싸지고 무거워지기 때문에 각각의 전기차에 적합한 양의 배터리를 탑재하는 것이 필요합니다.<br>
                            최근에는 배터리 기술 발전으로 에너지 밀도가 점차 높아지고 있는 추세입니다.</dd>
                    </dl>
                    <dl>
                        <dt>6. 400/800V 멀티 급속충전 시스템</dt>
                        <dd>800V 충전 시스템을 기본으로 적용해 18분 내에 충전 가능케 하는 장치로, 1회 완충 시 500km 주행이 가능합니다.<br>
                        또한 5분의 충전만으로도 약 100km 주행할 수 있습니다. 이와 함께 여전히 대다수를 차지하는 400V 급속충전기를 사용하기 위해 충전 호환성도 확보했습니다.<br>
                        세계 최초로 E-GMP에만 적용되는 특허 기술로 구동모터와 인버터를 활용해 400V 전압을 800V로 승압하여 배터리에 충전 가능합니다.</dd>
                    </dl>
                </div>
            </div>
        </section>
        <section class="sub_contents_sec2">
            <div class="sub_contents_wrap bk wrap">
                <div class="sub_contents3 center"  data-aos="fade-up" data-aos-duration="1200"  data-aos-easing="ease-in-sine">
                    <h1 class="eb">전기차 안전 설계의 핵심</h1>
                    <h2>배터리 관리 시스템 + 전력 차단 시스템</h2>
                    <span>운전자가 출발 버튼을 누르면 고전압 배터리에 저장된 전력을 통해 부팅되고, 전기차는 주행 준비를 마칩니다.<br>
                    가속페달을 밟고 주행을 시작하면 모터가 회전과 동시에 최대 토크를 내고, M감속기는 모터의 특성에 맞춰 동력을 바퀴에 효율적으로 전달합니다.</span>
                </div>
                <div class="sub_contents4" data-aos="fade-up" data-aos-duration="1200"  data-aos-easing="ease-in-sine" >
                    <dl>
                        <dt>배터리 보호를 위한 안전 설계</dt>
                        <dd>전기차에 특화된 충격 안전 설계는 대부분 고전압 배터리를 물리적인 충격으로부터 보호하는 것입니다.<br>
                        배터리 내부의 양극과 음극 물질이 직접적으로 접촉하는 것을 방지하고 표면의 작은 구멍을 통해 리튬이온이 이동할 수 있게 하는 분리막을 충격으로부터 보호하고자 분리막 표면에 세라믹을 얇게 입혔습니다.<br>
                        또한 외부 열로 배터리를 보호하기 위해 파우치 타입의 배터리를 사용하고 있으며, 배터리 양 측면의 사이드실에는 충격 흡수를 위한 보강재를 적용했습니다.<br>
                        E-GMP는 초고속충전을 위한 800V 시스템을 적용하여 배터리 시스템의 열관리 기술이 중요합니다. 이를 위해 배터리 모듈의 냉각 채널을 개선하고 냉각 분리구조를 적용했습니다.</dd>
                        <div class="center"><img src="images/ev_con_img3.jpg" alt="배터리 구조"></div>
                        <div>E-GMP의 배터리 시스템은 냉각 채널 분리구조를 통해 냉각수 유출 시에도 안전성 확보</div>
                    </dl>
                </div>
            </div>
        </section>
        <section class="sub_contents_sec3">
            <div class="sub_contents_wrap wrap">
                <div class="sub_contents5"  data-aos="fade-right" data-aos-duration="1500" data-aos-offset="300"  data-aos-easing="ease-in-sine" >
                    <dl>
                        <dt>전기차 배터리 고강도 검증 시험 넷</dt>
                        <dd><span class="eb">충돌 시험</span> : 후방 충돌 시험으로 배터리 발화 및 폭발 여부 확인</dd>
                        <dd><span class="eb">수밀 시험</span> : 수분 유입 방지</dd>
                        <dd><span class="eb">침수 시험</span> : 소금물에 배터리를 침수시켜 발화나 폭발 여부 확인</dd>
                        <dd><span class="eb">연소 시험</span> : 화염에 배터리를 직접 노출시켜 폭발 여부 확인</dd>
                    </dl>
                    <dl>
                        <dt>누전 방지를 위한 안전 설계</dt>
                        <dd>전기차는 배터리와 각종 전장 부품이 상호 연계해서 작동하기에 고전압 부품이 고장 날 경우 배터리에 영향을 줄 수 있습니다.<br>
                            이런 위험을 방지하기 위한 기능이 바로 ‘페일 세이프(Fail-safe)’로 전장 부품의 고장이 배터리로 확산되지 않도록 합니다.<br>
                            또한 배터리에 이상이 감지될 경우 릴레이(특정 조건에서 다른 회로로 개폐하는 장치)를 통해 자동으로 배터리의 전원을 잇거나 끊습니다.</dd>
                    </dl>
                    <dl>
                        <dt>전기차 충전구 안전 설계</dt>
                        <dd>비 오는 날 전기차를 충전하면 위험할까요? 전기차는 4단계의 감전 예방 시스템이 적용됩니다.<br>
                            충전건의 버튼을 누를 경우 즉각 전류를 차단해 커넥터 접촉부의 손상을 방지하고, 비가 올 때 충전구 내부의 드레인 홀로 액체류가 배출하는 구조로 설계되었습니다.<br> 또한 차량과 완전한 연결을 확인한 후 시간 차를 두고 전류를 공급해 감전을 예방하고, 충전기 체결부에 밀봉 구조를 적용해 체결 후 액체 추가 유입을 방지하고 있습니다.
                        </dd>
                    </dl>
                    <div><img src="images/ev_con_img4.jpg" alt="전기차 충전구 설계"> </div>
                </div>
            </div>
        </section>
    </div>
    <? include_once('foot.php'); ?>
</body>
</html>