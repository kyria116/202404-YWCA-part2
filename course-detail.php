<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/course.css">
</head>

<body class="lang_tw">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="container_swiper">
            <div class="topInfo">
                <!-- 
                    圖片尺寸 
                    768 * 500 (桌手機共用同一張)
                -->
                <div class="swiperBox">
                    <div class="bigBox">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 bigSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="dist/images/img.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/banner.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/img.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/banner.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/img.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/banner.jpg" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="smallBox">
                        <div thumbsSlider="" class="swiper mySwiper smallSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="dist/images/img.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/banner.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/img.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/banner.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/img.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="dist/images/banner.jpg" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="txtInfo">
                    <div class="iconBox">
                        <div class="icon">一般課程</div>
                        <div class="social">
                            <!-- 如果有加入我的最愛，在s_like增加active -->
                            <a href="javascript:;" class="s_like"></a>
                            <a href="javascript:;" target="_blank" class="s_mail"><img src="dist/images/common/s_mail.png"></a>
                            <a href="https://social-plugins.line.me/lineit/share?url=https://www.ywca-taipei.org.tw/" target="_blank" class="s_line"><img src="dist/images/common/s_line.png"></a>
                        </div>
                    </div>
                    <div class="title">薑餅咪金幣挑戰營</div>
                    <ul class="tags">
                        <li>藝術文學</li>
                        <li>音樂欣賞</li>
                        <li>藝術文學</li>
                        <li>音樂欣賞</li>
                        <li>藝術文學</li>
                        <li>音樂欣賞</li>
                        <li>藝術文學</li>
                    </ul>
                    <!-- 紅底(即將開放報名) willOpenActive
                    藍底(開放報名中、男生額滿/女生尚有名額、女生額滿/男生尚有名額) openActive
                    灰底(報名人數額滿) closeActive -->
                    <div class="states willOpen">
                        開放報名中
                    </div>
                    <ul class="listBox">
                        <li>
                            <div class="m_title">日期</div>
                            <div class="m_info">
                                <div class="s_info">
                                    <div class="date">2023/07/11 - 2023/07/13</div>
                                    <a href="javascript:;" target="_blank" class="s_txt"><img src="dist/images/common/add.png"><div class="ss_txt">加到Google日曆</div></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="m_title">對象</div>
                            <div class="m_info">會員</div>
                        </li>
                        <li>
                            <div class="m_title">地點</div>
                            <div class="m_info">
                                台北市松山區
                                <span class="location">(YWCA 聽濤營營地)</span>
                            </div>
                        </li>
                        <li>
                            <div class="m_title">費用</div>
                            <div class="m_info price">
                                <ul>
                                    <li>
                                        <div class="s_title">一般會員價</div>
                                        <div class="s_info">
                                            $7,700
                                            <a href="javascript:;" class="s_txt pcShow costDirections"><img src="dist/images/common/qmark.png"><div class="ss_txt">費用說明</div></a>
                                        </div>
                                    </li>
                                    <li class="gooseYellow">
                                        <div class="s_title">會員早鳥價</div>
                                        <div class="s_info">
                                            $6,930
                                            <i class="pc_991">6/9前報名享優惠</i>
                                        </div>
                                        <div class="mo_991">
                                            6/9前報名享優惠
                                        </div>
                                    </li>
                                    <li class="mo_991">
                                        <a href="javascript:;" class="s_txt costDirections"><img src="dist/images/common/qmark.png"><div class="ss_txt">費用說明</div></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="m_title">報名條件</div>
                            <div class="m_info">
                                <ul> 
                                    <li class="m0">
                                        性別：男性12人 + 女性 18人
                                    </li>
                                    <!-- 20240416 -->
                                    <li class="m0">      
                                        非會員/一般會員/終身會員/家庭會員
                                    </li>
                                    <!-- 20240416 -->
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- 
                        針對不同的狀態增加class到orderBtn中
                    一般課程
                        無法訂購(即將開放報名) disable 
                        可訂購、可通知(男女其中一個額滿) cart_bell
                        無法訂購(報名人數額滿) cart_dn
                    團體課程
                        可以訂購 instant
                        可訂購、可通知(男女其中一個額滿) instant_bell
                        無法訂購、可通知(報名人數額滿) instant_dn
                    -->
                    <div class="orderBtn">
                        <!-- 如果沒有會員則至nonmember-cart.php -->
                        <a href="cart.php" class="cart">
                            <img src="dist/images/common/cart.png">
                            <div class="txt"><span>加入購物車</span><i>立即報名</i></div>
                        </a>
                        <a href="javascript:;" class="bell">
                            <img src="dist/images/common/bell.png">
                            <div class="txt">有名額通知我</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="editor_Content">
                <div class="editor_box pc_use">
                    <img src="dist/images/img.png" alt="">
                    <p>pcpcpcpcpcpcppcpcpc</p>
                    <p>臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助</p>
                    <p>臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助</p>
                </div>
                <div class="editor_box mo_use">
                    <img src="dist/images/img.png" alt="">
                    <p>momomomomomomom</p>
                    <p>臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助</p>
                    <p>臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助-無風管空氣調節機、接風管空氣調節機照明燈具及室內停車場智慧照明申請臺北市服務業汰換節能設備補助</p>           
                </div>
            </div>
            <div class="allBtn">
                <a href="javascript:history.go(-1);">返回</a>
            </div>
        </div>
    </main>
    <div id="popup">
        <div class="popup_contain">
            <div class="whiteBox">
                <div class="b_title">各會員級別費用說明</div>
                <ul>
                    <li class="headBox">
                        <div>會籍身分</div>
                        <div>會員早鳥價</div>
                        <div>費用</div>
                    </li>
                    <li class="mt3">
                        <div>非會員</div>
                        <div>11,000</div>
                        <div>11,880</div>
                    </li>
                    <li>
                        <div>一般會員</div>
                        <div>8,920</div>
                        <div>9,900</div>
                    </li>
                    <li>
                        <div>終身會員</div>
                        <div>8,920</div>
                        <div>9,900</div>
                    </li>
                    <li>
                        <div>家庭會員</div>
                        <div>7,920</div>
                        <div>8,800</div>
                    </li>
                </ul>
                <div class="redTxt">
                    ※ 2023/06/09 前完成報名即可享有會員早鳥價之優惠
                </div>
            </div>
            <div class="closeIcon">
                <img src="dist/images/common/close_bt.png">
            </div>
        </div>
    </div>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/course.js"></script>
</body>

</html>