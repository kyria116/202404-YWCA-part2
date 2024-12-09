<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw memberInfo courseDetail">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">我的課程</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <ul class="headerTitle">
                    <li>活動編號</li>
                    <li>訂單編號</li>
                    <li>付款狀態</li>
                </ul>
                <ul class="item">
                    <li>
                        <div class="m_title mo">活動編號</div>
                        <div class="m_info">A202301001</div>
                    </li>
                    <li>
                        <div class="m_title mo">訂單編號</div>
                        <div class="m_info">230228001</div>
                    </li>
                    <li>
                        <div class="m_title mo">付款狀態</div>
                        <div class="m_info">已付款</div>
                    </li>
                </ul>
                <div class="detailContain">
                    <div class="img">
                        <!-- 
                            圖片尺寸 
                            700 * 456 (桌手機共用同一張)
                        -->
                        <img src="dist/images/img.png">
                        <span>過夜營隊</span>
                    </div>
                    <div class="box">
                        <div class="topTxtBox">
                            <div class="course_date">2023/07/11 - 2023/07/13</div>
                            <div class="course_title">小狼崇林奇譚季</div>
                        </div>
                        <div class="course_location">
                            <img src="dist/images/common/map.png">
                            <div class="location">
                                宜蘭縣頭城鎮協天路288號 <span>(YWCA 聽濤營營地)</span>
                            </div>
                        </div>
                        <div class="ss_btn">
                            <a href="course-detail.php">詳細資訊</a>
                        </div>
                    </div>
                </div>
                <div class="blueTitle">學員資料</div>
                <div class="memberList">
                    <div class="topList">
                        <div class="nameBox">
                            <div class="name">
                                <img src="dist/images/member.png">
                                許大寶
                            </div>
                            <ul class="infoBox">
                                <li>
                                    <div class="m_title">性別</div>
                                    <div class="m_info">男性</div>
                                </li>
                                <li>
                                    <div class="m_title">生日</div>
                                    <div class="m_info">1998/02/21</div>
                                </li>
                                <li>
                                    <div class="m_title">國籍</div>
                                    <div class="m_info">台灣</div>
                                </li>
                                <li>
                                    <div class="m_title">身分證字號</div>
                                    <div class="m_info">A123456789</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottomList">
                        <ul class="memberInfo">
                            <li>
                                <div class="m_title">行動電話</div>
                                <div class="m_info">0912345678</div>
                            </li>
                            <li>
                                <div class="m_title">市內電話</div>
                                <div class="m_info">0222345678</div>
                            </li>
                            <li>
                                <div class="m_title">電子信箱</div>
                                <div class="m_info">dabao@gmail.com</div>
                            </li>
                            <li>
                                <div class="m_title mb0">地址</div>
                                <div class="m_info">台北市大同區承德路三段179號</div>
                            </li>
                            <li class="shipMember">
                                <div class="m_title mb0"><span class="emergencyContact">緊急聯絡人</span><span class="mo">關係</span></div>
                                <div class="m_info">
                                    <span class="emergencyContact">許青青</span>
                                    <div class="ms_title pc">關係</div>
                                    <div class="ms_info">母子</div>
                                </div>
                            </li>
                            <li>
                                <div class="m_title">緊急聯絡電話</div>
                                <div class="m_info">0912345678</div>
                            </li>
                        </ul>
                        <ul class="btnBox">
                            <li>
                                <div class="b_title"><span>家長同意書</span></div>
                                <div class="b_info">
                                    <!-- <a href="parental_consent.php" class="whiteBtn">已完成</a> -->
                                    <a href="parental_consent.php">前往填寫</a>
                                </div>
                            </li>
                            <li>
                                <div class="b_title"><span>學員健康調查表</span></div>
                                <div class="b_info">
                                    <!-- <a href="health_survey.php" class="whiteBtn">已完成</a> -->
                                    <a href="health_survey.php">前往填寫</a>
                                </div>
                            </li>
                            <li>
                                <div class="b_title"><span>課前問卷</span></div>
                                <div class="b_info">
                                    <!-- <a href="javascript:;" class="whiteBtn">已完成</a> -->
                                    <a href="javascript:;">前往填寫<img src="dist/images/common/share.png"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="memberList">
                    <div class="topList">
                        <div class="nameBox">
                            <div class="name">
                                <img src="dist/images/member.png">
                                許小寶
                            </div>
                            <ul class="infoBox">
                                <li>
                                    <div class="m_title">性別</div>
                                    <div class="m_info">男性</div>
                                </li>
                                <li>
                                    <div class="m_title">生日</div>
                                    <div class="m_info">1998/02/21</div>
                                </li>
                                <li>
                                    <div class="m_title">國籍</div>
                                    <div class="m_info">台灣</div>
                                </li>
                                <li>
                                    <div class="m_title">身分證字號</div>
                                    <div class="m_info">A123456789</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottomList">
                        <ul class="memberInfo">
                            <li>
                                <div class="m_title">行動電話</div>
                                <div class="m_info">0912345678</div>
                            </li>
                            <li>
                                <div class="m_title">市內電話</div>
                                <div class="m_info">0222345678</div>
                            </li>
                            <li>
                                <div class="m_title">電子信箱</div>
                                <div class="m_info">dabao@gmail.com</div>
                            </li>
                            <li>
                                <div class="m_title mb0">地址</div>
                                <div class="m_info">台北市大同區承德路三段179號</div>
                            </li>
                            <li class="shipMember">
                                <div class="m_title mb0"><span class="emergencyContact">緊急聯絡人</span><span class="mo">關係</span></div>
                                <div class="m_info">
                                    <span class="emergencyContact">許青青</span>
                                    <div class="ms_title pc">關係</div>
                                    <div class="ms_info">母子</div>
                                </div>
                            </li>
                            <li>
                                <div class="m_title">緊急聯絡電話</div>
                                <div class="m_info">0912345678</div>
                            </li>
                        </ul>
                        <!-- 各兩種狀態 完成與前往填寫 -->
                        <ul class="btnBox">
                            <li>
                                <div class="b_title"><span>家長同意書</span></div>
                                <div class="b_info">
                                    <a href="parental_consent.php" class="whiteBtn">已完成</a>
                                    <!-- <a href="parental_consent.php">前往填寫</a> -->
                                </div>
                            </li>
                            <li>
                                <div class="b_title"><span>學員健康調查表</span></div>
                                <div class="b_info">
                                    <!-- <a href="health_survey.php" class="whiteBtn">已完成</a> -->
                                    <a href="health_survey.php">前往填寫</a>
                                </div>
                            </li>
                            <li>
                                <div class="b_title"><span>課前問卷</span></div>
                                <div class="b_info">
                                    <!-- <a href="javascript:;" class="whiteBtn">已完成</a> -->
                                    <a href="javascript:;">前往填寫<img src="dist/images/common/share.png"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="allBtn">
                    <a href="javascript:history.go(-1);">返回</a>
                </div>
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