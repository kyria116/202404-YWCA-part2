<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member2.css">
</head>

<body class="lang_tw orderDetail orderDetail2">
    <?php
        include "quote/template/added.php";
        include "quote/template/nav.php";
    ?>
    <main>
        <div class="kv">
            <img src="dist/images/kv.jpg" class="pc">
            <img src="dist/images/kv_mb.jpg" class="mo"> 
            <div class="pageTitle">我的訂單</div>
        </div>
        <div class="pagePadding">
            <div class="container">
                <section>
                    <div class="blueTitle">訂單資訊</div>
                    <div>
                        <ul class="headerTitle">
                            <li>訂單日期</li>
                            <li>訂單編號</li>
                            <li>訂單金額</li>
                            <li>付款方式</li>
                            <li>付款狀態</li>
                            <li>訂單狀態</li>
                        </ul>
                        <ul class="items">
                            <li>
                                <div class="m_title">訂單日期</div>
                                <div class="m_info">2023/02/23</div>
                            </li>
                            <li>
                                <div class="m_title">訂單編號</div>
                                <div class="m_info blueTxt">Y20230223001</div>
                            </li>
                            <li>
                                <div class="m_title">訂單金額</div>
                                <div class="m_info">$14,630</div>
                            </li>
                            <!-- 三種狀態 (超商代收、線上ATM、線上刷卡) -->
                            <li>
                                <div class="m_title">付款方式</div>
                                <div class="m_info">超商代收</div>
                            </li>
                            <!-- 兩種狀態 (未付款、已付款) -->
                            <li>
                                <div class="m_title">付款狀態</div>
                                <div class="m_info">未付款</div>
                            </li>
                            <!-- 三種狀態 (待付款、訂單完成、訂單取消) -->
                            <li>
                                <div class="m_title">訂單狀態</div>
                                <div class="m_info">
                                    待付款
                                    <a href="javascript:;"><span>前往付款<img src="dist/images/common/pay.png"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="orderItems">
                        <!-- 有轉課+退費訂單 -->
                        <li class="typeTransfer">
                            <div class="num">1</div>
                            <div class="orderTop">
                                <div class="originalList listBox close">
                                    <a href="javascript:;" class="listBtn">原報名課程 – <i>A202301001 薑餅咪金幣挑戰營</i></a>
                                    <div class="contentBox" style="display:none">
                                        <ul class="titleHeader">
                                            <li>課程/活動名稱</li>
                                            <li></li>
                                            <li>費用</li>
                                        </ul>
                                        <ul class="containTop">
                                            <li>
                                                <!-- 
                                                    圖片尺寸 
                                                    250 * 163 (桌手機共用同一張)
                                                -->
                                                <div class="img">
                                                    <img src="dist/images/img.png">
                                                </div>
                                                <div class="box">
                                                    <div class="topTxtBox">
                                                        <div class="course_date">2023/07/11-2023/07/13</div>
                                                        <div class="course_title">小狼崇林奇譚季</div>
                                                    </div>
                                                    <div class="course_location">
                                                        <img src="dist/images/common/map.png">
                                                        <div class="location">
                                                            宜蘭縣頭城鎮
                                                        </div>
                                                    </div>
                                                    <div class="price mo_991">
                                                        <div class="m_title">費用</div>
                                                        <div class="m_info">$6,930</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="redBoxTxt pc_991"><img src="dist/images/common/exclamation.png" alt="">課程已更換為 A202305002 藝文活動</li>
                                            <li class="pc_991">$6,930</li>
                                        </ul>
                                        <div class="redBoxTxt mo_991"><img src="dist/images/common/exclamation.png" alt="">課程已更換為 A202305002 藝文活動</div>
                                        <div class="memberList">
                                            <!-- 有兩種狀態 (報名成功、報名取消)
                                            如為報名取消 則在sort增加delSort -->
                                            <div class="sort delSort">報名取消</div>
                                            <div class="memberTop">
                                                學員資料
                                            </div>
                                            <div class="topList">
                                                <a href="javascript:;" class="nameBox">
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
                                                    <div class="mo">
                                                        <div class="openBox">
                                                            <img src="dist/images/common/openIcon.png">
                                                        </div>
                                                    </div>
                                                </a>
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
                                        <div class="refund">
                                            <div class="refundInfo">
                                                <div class="img">
                                                    <img src="dist/images/common/refund.png">
                                                </div>
                                                <a href="javascript:;" class="txt refundTxtBtn">
                                                    <div class="name">退費紀錄</div>
                                                    <div class="m_title">退費原因</div>
                                                    <div class="m_info">許大寶 原報名 A202301001 薑餅咪金幣挑戰營($6,930)，轉報 A202305002 藝文活動($6,730)，因轉課退報名費差額 $200。</div>
                                                    <div class="mo">
                                                        <div class="openBox">
                                                            <img src="dist/images/common/openIcon_pink.png">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="refundMember">
                                                <ul>
                                                    <li>
                                                        <div class="m_title">申請人</div>
                                                        <div class="m_info">許青青</div>
                                                    </li>
                                                    <li>
                                                        <div class="m_title">電子信箱</div>
                                                        <div class="m_info">chinchin@gmail.com</div>
                                                    </li>
                                                    <li>
                                                        <div class="m_title">匯款帳號</div>
                                                        <div class="m_info">信用卡退刷</div>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <div class="m_title">收據號碼</div>
                                                        <div class="m_info">R20230101245-1</div>
                                                    </li>
                                                    <li>
                                                        <div class="m_title">退費金額</div>
                                                        <div class="m_info">$200</div>
                                                    </li>
                                                    <li>
                                                        <div class="m_title">退費狀態</div>
                                                        <div class="m_info">已完成</div>
                                                    </li>
                                                    <li>
                                                        <div class="m_title">備註</div>
                                                        <div class="m_info">許大寶 原報名 A202301001 薑餅咪金幣挑戰營($6,930)，轉報 A202305002 藝文活動($6,730)，因轉課退報名費差額 $200。</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="newList listBox">
                                    <a href="javascript:;" class="listBtn">新報名課程 – <i>A202301002 藝文活動</i></a>
                                    <div class="contentBox">
                                        <ul class="titleHeader">
                                            <li>課程/活動名稱</li>
                                            <li>費用</li>
                                        </ul>
                                        <ul class="containTop">
                                            <li>
                                                <!-- 
                                                    圖片尺寸 
                                                    250 * 163 (桌手機共用同一張)
                                                -->
                                                <div class="img">
                                                    <img src="dist/images/img.png">
                                                </div>
                                                <div class="box">
                                                    <div class="topTxtBox">
                                                        <div class="course_date">2023/07/11-2023/07/13</div>
                                                        <div class="course_title">小狼崇林奇譚季</div>
                                                    </div>
                                                    <div class="course_location">
                                                        <img src="dist/images/common/map.png">
                                                        <div class="location">
                                                            宜蘭縣頭城鎮
                                                        </div>
                                                    </div>
                                                    <div class="price mo_991">
                                                        <div class="m_title">費用</div>
                                                        <div class="m_info">$6,930</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pc_991">$6,930</li>
                                        </ul>
                                        <div class="memberList">
                                            <!-- 有兩種狀態 (報名成功、報名取消)
                                            如為報名取消 則在sort增加delSort -->
                                            <div class="sort">報名成功</div>
                                            <div class="memberTop">
                                                學員資料
                                            </div>
                                            <div class="topList">
                                                <a href="javascript:;" class="nameBox">
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
                                                    <div class="mo">
                                                        <div class="openBox">
                                                            <img src="dist/images/common/openIcon.png">
                                                        </div>
                                                    </div>
                                                </a>
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
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- 純退費取消訂單 -->
                        <li>
                            <div class="num">2</div>
                            <div class="orderTop">
                                <div class="contentBox">
                                    <ul class="titleHeader">
                                        <li>課程/活動名稱</li>
                                        <li>費用</li>
                                    </ul>
                                    <ul class="containTop">
                                        <li>
                                            <!-- 
                                                圖片尺寸 
                                                250 * 163 (桌手機共用同一張)
                                            -->
                                            <div class="img">
                                                <img src="dist/images/img.png">
                                            </div>
                                            <div class="box">
                                                <div class="topTxtBox">
                                                    <div class="course_date">2023/07/11-2023/07/13</div>
                                                    <div class="course_title">小狼崇林奇譚季</div>
                                                </div>
                                                <div class="course_location">
                                                    <img src="dist/images/common/map.png">
                                                    <div class="location">
                                                        宜蘭縣頭城鎮
                                                    </div>
                                                </div>
                                                <div class="price mo_991">
                                                    <div class="m_title">費用</div>
                                                    <div class="m_info">$6,930</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pc_991">$6,930</li>
                                    </ul>
                                    <div class="memberList">
                                        <!-- 有兩種狀態 (報名成功、報名取消)
                                        如為報名取消 則在sort增加delSort -->
                                        <div class="sort delSort">報名取消</div>
                                        <div class="memberTop">
                                            學員資料
                                        </div>
                                        <div class="topList">
                                            <a href="javascript:;" class="nameBox">
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
                                                <div class="mo">
                                                    <div class="openBox">
                                                        <img src="dist/images/common/openIcon.png">
                                                    </div>
                                                </div>
                                            </a>
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
                                    <div class="refund">
                                        <div class="refundInfo">
                                            <div class="img">
                                                <img src="dist/images/common/refund.png">
                                            </div>
                                            <a href="javascript:;" class="txt refundTxtBtn">
                                                <div class="name">退費紀錄</div>
                                                <div class="m_title">退費原因</div>
                                                <div class="m_info">許大寶 原報名 A202301001 薑餅咪金幣挑戰營($6,930)，轉報 A202305002 藝文活動($6,730)，因轉課退報名費差額 $200。</div>
                                                <div class="mo">
                                                    <div class="openBox">
                                                        <img src="dist/images/common/openIcon_pink.png">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="refundMember">
                                            <ul>
                                                <li>
                                                    <div class="m_title">申請人</div>
                                                    <div class="m_info">許青青</div>
                                                </li>
                                                <li>
                                                    <div class="m_title">電子信箱</div>
                                                    <div class="m_info">chinchin@gmail.com</div>
                                                </li>
                                                <li>
                                                    <div class="m_title">匯款帳號</div>
                                                    <div class="m_info">信用卡退刷</div>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <div class="m_title">收據號碼</div>
                                                    <div class="m_info">R20230101245-1</div>
                                                </li>
                                                <li>
                                                    <div class="m_title">退費金額</div>
                                                    <div class="m_info">$200</div>
                                                </li>
                                                <li>
                                                    <div class="m_title">退費狀態</div>
                                                    <div class="m_info">已完成</div>
                                                </li>
                                                <li>
                                                    <div class="m_title">備註</div>
                                                    <div class="m_info">許大寶 原報名 A202301001 薑餅咪金幣挑戰營($6,930)，轉報 A202305002 藝文活動($6,730)，因轉課退報名費差額 $200。</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- 報名成功訂單 -->
                        <li>
                            <div class="num">3</div>
                            <div class="orderTop">
                                <div class="contentBox">
                                    <ul class="titleHeader">
                                        <li>課程/活動名稱</li>
                                        <li>費用</li>
                                    </ul>
                                    <ul class="containTop">
                                        <li>
                                            <!-- 
                                                圖片尺寸 
                                                250 * 163 (桌手機共用同一張)
                                            -->
                                            <div class="img">
                                                <img src="dist/images/img.png">
                                            </div>
                                            <div class="box">
                                                <div class="topTxtBox">
                                                    <div class="course_date">2023/07/11-2023/07/13</div>
                                                    <div class="course_title">小狼崇林奇譚季</div>
                                                </div>
                                                <div class="course_location">
                                                    <img src="dist/images/common/map.png">
                                                    <div class="location">
                                                        宜蘭縣頭城鎮
                                                    </div>
                                                </div>
                                                <div class="price mo_991">
                                                    <div class="m_title">費用</div>
                                                    <div class="m_info">$6,930</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pc_991">$6,930</li>
                                    </ul>
                                    <div class="memberList">
                                        <!-- 有兩種狀態 (報名成功、報名取消)
                                        如為報名取消 則在sort增加delSort -->
                                        <div class="sort">報名成功</div>
                                        <div class="memberTop">
                                            學員資料
                                        </div>
                                        <div class="topList">
                                            <a href="javascript:;" class="nameBox">
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
                                                <div class="mo">
                                                    <div class="openBox">
                                                        <img src="dist/images/common/openIcon.png">
                                                    </div>
                                                </div>
                                            </a>
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
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="totleMoney">
                        <ul>
                            <li>
                                <div class="m_title">小計</div>
                                <div class="s_info">$14,630</div>
                            </li>
                            <li>
                                <div class="m_title">折扣碼折抵</div>
                                <div class="s_info">- $200</div>
                            </li>
                            <li>
                                <div class="m_title">轉課差額</div>
                                <div class="s_info">- $200</div>
                            </li>
                            <li>
                                <div class="m_title">退費金額</div>
                                <div class="s_info">- $790</div>
                            </li>
                            <li>
                                <div class="m_title">應付金額</div>
                                <div class="m_info">$13,440</div>
                            </li>
                        </ul>
                    </div>
                </section>

                <section>
                    <div class="blueTitle">收據資訊</div>
                    <div class="receiptBox">
                        <div class="receiptTop">
                            <ul>
                                <li>
                                    <div class="m_title">購買人</div>
                                    <div class="m_info">許青青</div>
                                </li>
                                <li>
                                    <div class="m_title">電子信箱</div>
                                    <div class="m_info">dabao@gmail.com</div>
                                </li>
                                <li>
                                    <div class="m_title">收據抬頭</div>
                                    <div class="m_info">源做視覺整合設計有限公司</div>
                                </li>
                                <li>
                                    <div class="m_title">公司統編</div>
                                    <div class="m_info">25116507</div>
                                </li>
                                <li>
                                    <div class="m_title">備註</div>
                                    <div class="m_info"></div>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="m_title">收據號碼</div>
                                    <div class="m_info">20230101245</div>
                                </li>
                                <!-- 有三種付款方式 (超商代收、線上ATM、線上刷卡) -->
                                <li class="payWay">
                                    <div class="m_title">付款方式</div>
                                    <div class="m_info pay_1">超商代收</div>
                                    <div class="m_info pay_2" style="display: none">線上ATM</div>
                                    <div class="m_info pay_3" style="display: none">線上刷卡</div>
                                </li>
                                <!-- 如果是線上刷卡，payInfo直接隱藏 -->
                                <li class="payInfo">
                                    <div class="m_title">付款資訊</div>
                                    <div class="m_info pay_1">
                                        <img src="dist/images/1677065994852 1.png">
                                    </div>
                                    <div class="m_info pay_2" style="display: none">
                                        銀行：台新銀行<br>
                                        代碼：812<br>
                                        帳號：12345678910236
                                    </div>
                                </li>
                            </ul>
                            <div class="allBtn">
                                <a href="javascript:;" target="_blank">下載收據PDF<img src="dist/images/common/download.png"></a>
                            </div>
                        </div>
                    </div>
                    <div class="receiptBox">
                        <div class="infoTitle">轉課差額收據</div>
                        <div class="receiptTop">
                            <ul>
                                <li>
                                    <div class="m_title">購買人</div>
                                    <div class="m_info">許青青</div>
                                </li>
                                <li>
                                    <div class="m_title">電子信箱</div>
                                    <div class="m_info">dabao@gmail.com</div>
                                </li>
                                <li>
                                    <div class="m_title">收據抬頭</div>
                                    <div class="m_info">源做視覺整合設計有限公司</div>
                                </li>
                                <li>
                                    <div class="m_title">公司統編</div>
                                    <div class="m_info">25116507</div>
                                </li>
                                <li>
                                    <div class="m_title">備註</div>
                                    <div class="m_info">許大寶 原報名 A202301001 音樂賞析課程 ($1,200) － 收據號碼: 20230101245 轉報 A202305010 藝文夏令營($2,000)，因轉課補報名費差額 $800 。</div>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="m_title">收據號碼</div>
                                    <div class="m_info">20230101245</div>
                                </li>
                                <!-- 有三種付款方式 (超商代收、線上ATM、線上刷卡) -->
                                <li class="payWay">
                                    <div class="m_title">付款方式</div>
                                    <div class="m_info pay_1">超商代收</div>
                                    <div class="m_info pay_2" style="display: none">線上ATM</div>
                                    <div class="m_info pay_3" style="display: none">線上刷卡</div>
                                </li>
                            </ul>
                            <div class="allBtn">
                                <a href="javascript:;" target="_blank">下載收據PDF<img src="dist/images/common/download.png"></a>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="allBtn backAllBtn">
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
    <script>
        $('.listBox .listBtn').on('click', function () {
            if($(this).parent().hasClass('close')){
                $(this).parent().removeClass('close')
                $(this).siblings('.contentBox').slideDown()
            }else{
                $(this).parent().addClass('close')
                $(this).siblings('.contentBox').slideUp()
            }
        });
        if($(window).width() < 768){
            $('.nameBox').on('click', function () {
                $(this).parent().siblings('.bottomList').slideToggle();
            });
            $('.refundTxtBtn').on('click', function () {
                $(this).parent().siblings('.refundMember').slideToggle();
            });
        }else{
            $('.bottomList').attr('style')
            $('.refundMember').attr('style')
        }
    </script>
</body>

</html>