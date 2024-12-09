<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw memberInfo orderList collection">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">我的收藏</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <div class="pc tabBtn">
                    <ul>
                        <li>
                            <a href="member-info.php">會員資料</a>
                        </li>
                        <li>
                            <a href="students-list.php">學員資料</a>
                        </li>
                        <li>
                            <a href="my-course.php">我的課程</a>
                        </li>
                        <li>
                            <a href="my-order.php">我的訂單</a>
                        </li>
                        <li class="active">
                            <a href="javascript:;">我的收藏</a>
                        </li>
                    </ul>
                </div>
                <div class="mo tabBtn">
                    <select name="" id="" onChange="location = this.options[this.selectedIndex].value;">
                        <option value="member-info.php">會員資料</option>
                        <option value="students-list.php">學員資料</option>
                        <option value="my-course.php">我的課程</option> 
                        <option value="my-order.php">我的訂單</option>
                        <option value="javascript:;" selected>我的收藏</option>
                    </select>
                </div>
                <ul class="activeItem">
                    <li>
                        <a href="course-detail.php">
                            <!-- 
                                圖片尺寸 
                                700 * 456 (桌手機共用同一張)
                            -->
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
                            <!-- 紅底 willOpenActive
                            藍底 openActive
                            灰底 closeActive -->
                            <div class="states willOpenActive">
                                即將開放報名<span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                            <div class="states openActive">
                                開放報名中
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                            <div class="states openActive">
                                男生額滿/女生尚有名額
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                女生額滿/男生尚有名額
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                報名人數額滿 (候補請來電聯繫)
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                報名已截止
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                <div class="like active"></div>
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
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                <div class="like active"></div>
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
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
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
                                <span><img src="dist/images/common/exclamation.png">即將於3天後截止報名</span>
                            </div>
                        </a>
                        <a href="javascirpt:;" class="like"></a>
                    </li>
                </ul>
                <?php
                    include "quote/template/page_list.php";
                ?>
            </div>
        </div>
    </main>
    <?php
        include "quote/template/footer.php";
        include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
</body>

</html>