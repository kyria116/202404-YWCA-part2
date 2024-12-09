<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw memberInfo orderList">
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
                        <li class="active">
                            <a href="javascript:;">我的訂單</a>
                        </li>
                        <li>
                            <a href="my-collection.php">我的收藏</a>
                        </li>
                    </ul>
                </div>
                <div class="mo tabBtn">
                    <select name="" id="" onChange="location = this.options[this.selectedIndex].value;">
                        <option value="member-info.php">會員資料</option>
                        <option value="students-list.php">學員資料</option>
                        <option value="my-course.php">我的課程</option> 
                        <option value="javascript:;" selected>我的訂單</option>
                        <option value="my-collection.php">我的收藏</option>
                    </select>
                </div>
                <ul class="headerTitle">
                    <li>訂單日期</li>
                    <li>訂單編號</li>
                    <li>訂單金額</li>
                    <li>付款方式</li>
                    <li>付款狀態</li>
                    <li>訂單狀態</li>
                    <li></li>
                </ul>
                <ul class="items">
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <!-- 三種狀態 (超商代收、線上ATM、線上刷卡) -->
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">超商代收</div>
                        </div>
                        <!-- 兩種狀態 (未付款、已付款) -->
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">未付款</div>
                        </div>
                        <!-- 三種狀態 (待付款、訂單完成、訂單取消) -->
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                待付款
                                <a href="javascript:;"><span>前往付款<img src="dist/images/common/pay.png"></span></a>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">線上ATM</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">已付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                訂單完成
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">線上刷卡</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">已付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                訂單取消
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">超商代收</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">未付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                待付款
                                <a href="javascript:;"><span>前往付款<img src="dist/images/common/pay.png"></span></a>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">超商代收</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">未付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                待付款
                                <a href="javascript:;"><span>前往付款<img src="dist/images/common/pay.png"></span></a>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">超商代收</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">未付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                待付款
                                <a href="javascript:;"><span>前往付款<img src="dist/images/common/pay.png"></span></a>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">超商代收</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">未付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                待付款
                                <a href="javascript:;"><span>前往付款<img src="dist/images/common/pay.png"></span></a>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">超商代收</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">未付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                待付款
                                <a href="javascript:;"><span>前往付款<img src="dist/images/common/pay.png"></span></a>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">超商代收</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">未付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                待付款
                                <a href="javascript:;"><span>前往付款<img src="dist/images/common/pay.png"></span></a>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="m_title">訂單日期</div>
                            <div class="m_info">2023/02/23</div>
                        </div>
                        <div>
                            <div class="m_title">訂單編號</div>
                            <div class="m_info blueTxt">Y20230223001</div>
                        </div>
                        <div>
                            <div class="m_title">訂單金額</div>
                            <div class="m_info">$14,630</div>
                        </div>
                        <div>
                            <div class="m_title">付款方式</div>
                            <div class="m_info">超商代收</div>
                        </div>
                        <div>
                            <div class="m_title">付款狀態</div>
                            <div class="m_info">未付款</div>
                        </div>
                        <div>
                            <div class="m_title">訂單狀態</div>
                            <div class="m_info">
                                待付款
                                <a href="javascript:;">前往付款<img src="dist/images/common/pay.png"></a>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="my-order-detail.php">查看</a>
                        </div>
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