<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/index.css">
</head>

<body class="lang_tw">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="banner">
            <!-- 
                圖片尺寸 
                1920 * 780 (桌手機共用同一張)
            -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="dist/images/banner.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="dist/images/banner.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="dist/images/banner.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="dist/images/banner.jpg">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="container_topmenu">
            <div class="topMenuBox">
                <?php
                    include "quote/template/tag_menu.php";
                ?>
            </div>
        </div>
        <div class="container">
            <ul class="activeItem">
                <li>
                    <a href="course-detail.php">
                        <!-- 
                            圖片尺寸 
                            668 * 435 (桌手機共用同一張)
                        -->
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營1</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info price">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底(即將開放報名) willOpenActive
                        藍底(開放報名中、男生額滿/女生尚有名額、女生額滿/男生尚有名額) openActive
                        灰底(報名人數額滿 (候補請來電聯繫)、報名已截止、活動已結束) closeActive -->
                        <div class="states willOpen">
                            即將開放報名
                        </div>
                    </a>
                    <!-- 加入收藏清單，like增加active -->
                    <a href="javascirpt:;" class="like active"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states openActive">
                            開放報名中
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states openActive">
                            男生額滿/女生尚有名額
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states openActive">
                            女生額滿/男生尚有名額
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states closeActive">
                            報名人數額滿 (候補請來電聯繫)
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states closeActive">
                            報名已截止
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states closeActive">
                            活動已結束
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞2</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states openActive">
                            開放報名中
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states openActive">
                            開放報名中
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states closeActive">
                            活動已結束
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞2</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states openActive">
                            開放報名中
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
                <li>
                    <a href="course-detail.php">
                        <div class="img">
                            <img src="dist/images/img.png">
                            <span class="txt">一般課程</span>
                        </div>
                        <div class="whiteBox">
                            <div class="date">2023/07/11 - 2023/07/13</div>
                            <div class="title">薑餅咪金幣挑戰營</div>
                            <ul class="listBox">
                                <li>
                                    <div class="m_title">對象</div>
                                    <div class="m_info">會員</div>
                                </li>
                                <li>
                                    <div class="m_title">地點</div>
                                    <div class="m_info">台北市松山區</div>
                                </li>
                                <li>
                                    <div class="m_title">費用</div>
                                    <div class="m_info">
                                        <ul>
                                            <li>
                                                <div class="s_title">一般會員價</div>
                                                <div class="s_info">$7,700</div>
                                            </li>
                                            <li class="gooseYellow">
                                                <div class="s_title">會員早鳥價</div>
                                                <div class="s_info">$6,930 <i class="pc_991">6/9前報名享優惠</i></div>
                                                <div class="mo_991">
                                                    6/9前報名享優惠
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                                <li>藝術文學</li>
                                <li>音樂欣賞</li>
                            </ul>
                        </div>
                        <!-- 紅底 willOpenActive
                        藍底 openActive
                        灰底 closeActive -->
                        <div class="states openActive">
                            開放報名中
                        </div>
                    </a>
                    <a href="javascirpt:;" class="like"></a>
                </li>
            </ul>
            <?php
                include "quote/template/page_list.php";
            ?>
        </div>
    </main>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>   
    <script src="dist/js/index.js"></script>
</body>

</html>